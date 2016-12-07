@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.tab_origine_title') }}
@endsection

@section('description')
    {{ trans('messages.tab_origine_title') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.tab_origine_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.to_cr') }}</li>
                    <li>{{ trans('messages.to_p') }}</li>
                    <li>{{ trans('messages.to_m') }}</li>
                    <li>{{ trans('messages.to_ci') }}</li>
                    <li>{{ trans('messages.to_v') }}</li>
                    <li>{{ trans('messages.to_o') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>85g - 2,80€</li>
                </ul>

                <h2>{{trans('messages.order_product')}}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                    <div class="col-md-7">
                        {{ Form::select('type', array(
                            'to_cr' => trans('messages.to_cr'),
                            'to_p' => trans('messages.to_p'),
                            'to_m'=> trans('messages.to_m'),
                            'to_ci'=> trans('messages.to_ci'),
                            'to_v'=> trans('messages.to_v'),
                            'to_o'=> trans('messages.to_o'),
                        )) }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p><strong>85g - 2,80€</strong></p>
                        {{ Form::hidden('price', '2.8') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '5') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 

            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/taborigine1.jpg') }}" alt="{{ trans('messages.tab_origine_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection