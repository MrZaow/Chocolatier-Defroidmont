@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.ballotins_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_ballotins') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Ballotins</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.desc') }}</h2>
                <p>{{ trans('messages.desc_details') }}</p>
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.ass_black') }}</li>
                    <li>{{ trans('messages.ass_milk') }}</li>
                    <li>{{ trans('messages.ass_white') }}</li>
                    <li>{{ trans('messages.ass_all') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>250g - 12,50€</li>
                    <li>350g - 17,50€</li>
                    <li>500g - 25,00€</li>
                </ul>
                <h2>{{trans('messages.order_product')}}</h2>

                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::select('type', array(
                            'ass_black' => trans('messages.ass_black'),
                            'ass_milk' => trans('messages.ass_milk'),
                            'ass_white'=> trans('messages.ass_white'),
                            'ass_all' => trans('messages.ass_all'),
                        )) }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        {{ Form::select('price', array(
                            '12.5' => '250g - 12,50€',
                            '17.5' => '350g - 17,50€',
                            '25' => '500g - 25,00€',
                        )) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '1') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/ballotins.jpg') }}" alt="Ballotin" class="img-responsive">
            </div>
        </div>
    </section>
@endsection
