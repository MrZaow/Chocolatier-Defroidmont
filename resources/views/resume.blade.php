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
                    <th>{{ trans('messages.order_product') }}</th>
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
                    <div class="col-md-3">
                        <h3>Total : {{$total}} €</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


