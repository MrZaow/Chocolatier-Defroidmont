@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.order_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_order') }}
@endsection

@section('main-content')

	<section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.resume_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <section class="container">
        <div class="row">
            <div class="col-md-12">
            	<h2>{{ trans('messages.order_question') }}</h2>
                <p>{!! trans('messages.order_help') !!}</p>

                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>{{ trans('messages.order_product_name') }}</th>
                    <th>{{ trans('messages.order_quantity') }}</th>
                    <th>{{ trans('messages.order_price') }}</th>
                    <th>{{ trans('messages.order_subtotal') }}</th>
                  </tr>
                  @foreach ($cart as $item)
                    <tr>
                        <th>
                            {{ trans('messages.' . $item->name) }}
                        </th>
                        <th class="qty">
                            {{$item->qty}}
                        </th>
                        <th>{{$item->price}} €</th>
                        <th>{{$item->subtotal}} €</th>
                    </tr>
                  @endforeach
                </thead>
                </table> 
                <div class="row">
                    <div class="col-md-5">
                        <h3>{{trans('messages.resume_total') }} : {{$total}} €</h3>
                        @if($promo)
                            <h3>{{trans('messages.order_code') }} : -{{$promo}} €</h3>
                        @endif
                            <h3>{{trans('messages.resume_pays') }} : {{trans('messages.resume_'.$pays) }}</h3>
                        @if($frais)
                            <h3>{{trans('messages.resume_frais') }} : {{$frais}} €</h3>
                        @endif
                        <h3>Prix final : {{$prixFinal}} €</h3>

                        {{ Form::open(['action' => 'Controller@Pay']) }}
                          {{ Form::hidden('finalPrice', $prixFinal) }}
                          <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_live_9Z5pgtC2W1d4uf03pOkq6aiI"
                            data-amount= {{$prixFinal * 100}}
                            data-name="Chocolatier Defroidmont"
                            data-currency="EUR"
                            data-description="Checkout"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-shipping-address="true"
                            data-billing-address="true"
                            data-zip-code="true">
                          </script>
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


