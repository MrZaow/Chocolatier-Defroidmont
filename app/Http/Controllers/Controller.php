<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function AddCart(Request $request)
    {
    	$type = $request->input('type');
    	$qtt = $request->input('quantity');
    	$price = $request->input('price');
    	$id = $request->input('invisible') . $request->input('type');

        $client = new Client();
        $res = $client->request('GET', "freegeoip.net/json/".$_SERVER['REMOTE_ADDR']);
        $json = json_decode($res->getBody());

    	Cart::add($id, $type, $qtt, floatval($price));
    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal())->with('loc', $json->country_code);
    }

    public function DelCart(Request $request)
    {
    	$id = $request->input('rowId');

        $client = new Client();
        $res = $client->request('GET', "freegeoip.net/json/".$_SERVER['REMOTE_ADDR']);
        $json = json_decode($res->getBody());

    	Cart::remove($id);
    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal())->with('loc', $json->country_code);
    }


    public function ShowCart()
    {
        $client = new Client();
        $res = $client->request('GET', "freegeoip.net/json/".$_SERVER['REMOTE_ADDR']);
        $json = json_decode($res->getBody());

    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal())->with('loc', $json->country_code);
    }


    public function ResumeOrder(Request $request)
    {
        return view('resume');
    }

    public function Pay(Request $request)
    {
        \Stripe\Stripe::setApiKey("sk_test_Y2VMoA5AwUyht0U6ng2Edqcn");
        $token = $_POST['stripeToken'];

        $fail = false;
        $metadata['email'] = $_POST['stripeEmail'];
        //On remplis les metadata de la commande
        foreach (Cart::content() as $line) {
            $metadata[substr(trans('messages.' . $line->name, [], "", "spc"),0,40)] = $line->qty;
        }
        try {
          $charge = \Stripe\Charge::create(array(
            "amount" => Cart::subtotal() * 100, // Amount in cents
            "currency" => "eur",
            "source" => $token,
            "description" => "Example charge",
            "metadata" => $metadata
            ));
        } catch(\Stripe\Error\Card $e) {
          $fail = $e;
          return view('order_result')->with('fail', $fail);
        }
        Cart::destroy();
        return view('order_result')->with('fail', $fail);;
    }
}
