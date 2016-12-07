@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.bfr_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_bfr') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.bfr_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.ch_npn') }}</li>
                    <li>{{ trans('messages.ch_ncp') }}</li>
                    <li>{{ trans('messages.ch_ncf') }}</li>
                    <li>{{ trans('messages.ch_ncv') }}</li>
                    <li>{{ trans('messages.ch_lpn') }}</li>
                    <li>{{ trans('messages.ch_lc') }}</li>
                    <li>{{ trans('messages.ch_bpn') }}</li>
                    <li>{{ trans('messages.ch_bpc') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>65g - 2,00€</li>
                </ul>

                <h2>{{trans('messages.order_product')}}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                        {{ Form::select('type', array(
                            'ch_npn' => trans('messages.ch_npn'),
                            'ch_ncp' => trans('messages.ch_ncp'),
                            'ch_ncf'=> trans('messages.ch_ncf'),
                            'ch_ncv'=> trans('messages.ch_ncv'),
                            'ch_lpn'=> trans('messages.ch_lpn'),
                            'ch_lc'=> trans('messages.ch_lc'),
                            'ch_bpn'=> trans('messages.ch_bpn'),
                            'ch_bpc'=> trans('messages.ch_bpc'),
                        )) }}
                </div>
                <div class="row">
                    <p><strong>65g - 2,00€</strong></p>
                    {{ Form::hidden('price', '2') }}
                </div>
                <div class="row">
                    <div class="col-md-7">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '6') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 

            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/baton.jpg') }}" alt="{{ trans('messages.bfr_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection