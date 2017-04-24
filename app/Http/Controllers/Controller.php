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

    private $StandardProduct = array (
            'ch_npn' => 2.5,
            'ch_ncp' => 2.5,
            'ch_ncf'=> 2.5,
            'ch_ncv'=> 2.5,
            'ch_lpn'=> 2.5,
            'ch_lc'=> 2.5,
            'ch_bpn'=> 2.5,
            'ch_bpc'=> 2.5,

            'ch_noci' => 10,
            'ch_lov' => 10,
            'ch_oci'=> 10,

            'ch_noci' => 8,
            'ch_lov' => 8,
            'ch_oci'=> 8,

            'pn_cnl' => 8.9,
            'pn_cn' => 8.9,

            'tb_bc' => 4,
            'tb_pe' => 4,
            'tb_bn'=> 4,
            'tb_bcl'=> 4,
            'tab_bnl'=> 4,

            'to_p' => 2.8,
            'to_ci'=> 2.8,
            'to_v'=> 2.8,
            'to_ve'=> 2.8,
            'to_o'=> 2.8,

            'the_nc' => 6.8,
            'the_nca' => 6.8,
            'the_nml' => 6.8,
            'the_vct' => 6.8,
            'the_vf' => 6.8,
            'the_vpc' => 6.8,
            'the_ipc' => 6.8,
            'the_idd' => 6.8,
            'the_ta' => 6.8,
        );

    private $notShippable = array(
        'mu_adulte' => 6,    
        'mu_enfant' => 4,
        'bird_adulte' => 6,
        'bird_enfant' => 5,
    );

    private function museumReservation(Request $request){
        $qttAdulte = $request->input("mu_adulte");
        $qttEnfant = $request->input("mu_enfant");
        $qttbirdEnfant = $request->input("bird_enfant");
        $qttbirdAdulte = $request->input("bird_adulte");

        if($qttAdulte > 0){
            $id = $request->input('invisible') . "mu_adulte";
            $price = $this->notShippable["mu_adulte"];

            Cart::add($id, "mu_adulte", $qttAdulte, floatval($price));
        }

        if($qttEnfant > 0){
            $id = $request->input('invisible') . "mu_enfant";
            $price = $this->notShippable["mu_enfant"];

            Cart::add($id, "mu_enfant", $qttEnfant, floatval($price));
        }

        if($qttbirdAdulte > 0){
            $id = $request->input('invisible') . "bird_adulte";
            $price = $this->notShippable["bird_adulte"];

            Cart::add($id, "bird_adulte", $qttbirdAdulte, floatval($price));
        }

        if($qttbirdEnfant > 0){
            $id = $request->input('invisible') . "bird_enfant";
            $price = $this->notShippable["bird_enfant"];

            Cart::add($id, "bird_enfant", $qttbirdEnfant, floatval($price));
        }


    }

    public function AddCart(Request $request)
    {
        $weight = array (
            "250" => 12.5,
            "350" => 17.5,
            "500" => 25,
        );

        if($request->input('weight')){
            $price = $weight[$request->input('weight')];
            $type = $request->input('type').$request->input('weight');
        }
        elseif($request->input('mu_adulte') || $request->input('mu_enfant') || $request->input('bird_enfant') || $request->input('bird_adulte')){

            $this->museumReservation($request);
            return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal());
        }
        else{
            $price = $this->StandardProduct[$request->input('type')];
            $type = $request->input('type');
        }

    	$qtt = $request->input('quantity');
    	$id = $request->input('invisible') . $request->input('type');


    	Cart::add($id, $type, $qtt, floatval($price));
    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal());
    }

    public function DelCart(Request $request)
    {
    	$id = $request->input('rowId');

    	Cart::remove($id);
    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal());
    }


    public function ShowCart()
    {

    	return view('order')->with('cart', Cart::content())->with('total', Cart::subtotal());
    }


    public function ResumeOrder(Request $request)
    {
        $promo = array (
            "CHOCO2017"=> 10
        );

        $pays = array(
            "BE" => 3,
            "BE50" => 0,
            "DE" => 16.8,
            "DE50" => 9,
            "FR50" => 9,
            "FR" => 16.8,
            "PB50" => 16.8,
            "PB" => 9
        );

        $prc = 0;

        $totCartContent = 0;
        $onlyNoDelivery = true;

        //Mise à jour du cart
        foreach (Cart::content() as $item) {
            $totCartContent = $totCartContent + $request->input($item->name);
            Cart::update($item->rowId, $request->input($item->name));

            if(!array_key_exists($item->name, $this->notShippable))
                $onlyNoDelivery = false;
        }

        if($totCartContent > 50)
            return view('order_result')->with('fail', false);
        

        foreach ($promo as $id => $val) {
                if($id = $request->input("Code"))
                    $prc = $val;
        }

        $totPrice = Cart::subtotal();


        if($totPrice > 50)
            $frais = $pays[$request->input('country').'50'];
        else
            $frais = $pays[$request->input('country')];

        if($onlyNoDelivery)
            $frais = 0;
        
        $promo = $totPrice * ($prc/100);
        $prixFinal = ($totPrice - $totPrice * ($prc/100))+ $frais;

        return view('resume')->with('cart', Cart::content())->with('total', $totPrice)->with('promo', $promo)->with('frais', $frais)->with("prixFinal", $prixFinal)->with('pays', $request->input('country'));
    }

    public function Pay(Request $request)
    {
        \Stripe\Stripe::setApiKey("sk_live_T7NjkW3MaXJWiK1626p0Hx7J");
        $token = $_POST['stripeToken'];

        $fail = false;
        $metadata['email'] = $_POST['stripeEmail'];

        //On remplis les metadata de la commande
        foreach (Cart::content() as $line) {
            $product_name = trans('messages.' . $line->name, [], "", "spc");

            $metadata[substr($product_name,0,40)] = $line->qty;
            $description = $product_name . ": " .$line->qty;
        }
        
        try {
          $charge = \Stripe\Charge::create(array(
            "amount" => $_POST['finalPrice'] * 100, // Amount in cents
            "currency" => "eur",
            "source" => $token,
            "description" => $description,
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
