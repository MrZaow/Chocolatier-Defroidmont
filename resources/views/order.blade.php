@extends('layouts.app')

<script>    
    var sites = {!! json_encode($cart->toArray()) !!};
</script>

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
                    <h1>{{ trans('messages.order_title') }}</h1>
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
                    <th>{{ trans('messages.order_product') }}</th>
                    <th>{{ trans('messages.order_quantity') }}</th>
                    <th>{{ trans('messages.order_price') }}</th>
                    <th>{{ trans('messages.order_subtotal') }}</th>
                    <th>{{ trans('messages.order_delete') }}</th>
                  </tr>
                  @foreach ($cart as $item)
                    <tr>
                        <th>{{ trans('messages.' . $item->name) }}</th>
                        <th>
                            {{$item->qty}}
                        </th>
                        <th>{{$item->price}} €</th>
                        <th>{{$item->subtotal}} €</th>
                        <th>
                            {{ Form::open(['action' => 'Controller@DelCart', 'method' => 'delete', 'style'=>'margin-bottom: 0px']) }}
                            {{ Form::hidden('rowId', $item->rowId) }}
                            {{ Form::submit(trans('messages.order_delete'), array('class'=>'btn btn-danger')) }}
                            {{ Form::close()}}
                        </th>
                    </tr>
                  @endforeach
                </thead>
                </table>

                @if (count($cart) > 0)
                    <h3>Total : {{$total}} €</h3>
                    {{ Form::open(['action' => 'Controller@Pay']) }}
                      <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_kI7LUvvNO49sMTKvWEqloQgJ"
                        data-amount="{{$total * 100}}"
                        data-name="Commander"
                        data-description="Commande"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-zip-code="true"
                        data-shipping-address="true"
                        data-currency="eur">
                      </script>
                    {{ Form::close()}}
                @endif
            </div>
        </div>
    </section>
@endsection