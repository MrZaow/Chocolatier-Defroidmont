@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.bloc_fruit_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_bloc_fruit') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.bloc_fruit_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.ch_noci') }}</li>
                    <li>{{ trans('messages.ch_lov') }}</li>
                    <li>{{ trans('messages.ch_oci') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>300g - 10,00€</li>
                </ul>

                <h2>{{trans('messages.order_product')}}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                    <div class="col-md-7">
                        {{ Form::select('type', array(
                            'ch_noci' => trans('messages.ch_noci'),
                            'ch_lov' => trans('messages.ch_lov'),
                            'ch_oci'=> trans('messages.ch_oci'),
                        )) }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p><strong>300g - 10,00€</strong></p>
                        {{ Form::hidden('price', '10') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '3') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 

            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/blocfruit.jpg') }}" alt="Bloc fruit" class="img-responsive">
            </div>
        </div>
    </section>
@endsection