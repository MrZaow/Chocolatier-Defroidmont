@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.pate_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_pate') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.pate_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.pn_cnl') }}</li>
                    <li>{{ trans('messages.pn_cn') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>300g - 7,90€</li>
                </ul>

                <h2>{{trans('messages.order_product')}}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                        {{ Form::select('type', array(
                            'pn_cnl' => trans('messages.pn_cnl'),
                            'pn_cn' => trans('messages.pn_cn'),
                        )) }}
                </div>
                <div class="row">
                    <p><strong>300g - 7,90€</strong></p>
                    {{ Form::hidden('price', '7.9') }}
                </div>
                <div class="row">
                    <div class="col-md-7">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '7') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/pate.jpg') }}" alt="{{ trans('messages.pate_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection