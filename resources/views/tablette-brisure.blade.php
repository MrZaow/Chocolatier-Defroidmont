@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.tab_brisure_title') }}
@endsection

@section('description')
    {{ trans('messages.tab_brisure_title') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.tab_brisure_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.tasty') }}</h2>
                <ul>
                    <li>{{ trans('messages.tb_bc') }}</li>
                    <li>{{ trans('messages.tb_pe') }}</li>
                    <li>{{ trans('messages.tb_bn') }}</li>
                    <li>{{ trans('messages.tb_bcl') }}</li>
                    <li>{{ trans('messages.tab_bnl') }}</li>
                </ul>
                <h2>{{ trans('messages.pd_px') }}</h2>
                <ul>
                    <li>85g - 4,00€</li>
                </ul>

                <h2>{{trans('messages.order_product')}}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}

                <div class="row">
                    <div class="col-md-7">
                        {{ Form::select('type', array(
                            'tb_bc' => trans('messages.tb_bc'),
                            'tb_pe' => trans('messages.tb_pe'),
                            'tb_bn'=> trans('messages.tb_bn'),
                            'tb_bcl'=> trans('messages.tb_bcl'),
                            'tab_bnl'=> trans('messages.tab_bnl'),
                        )) }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p><strong>85g - 4,00€</strong></p>
                        {{ Form::hidden('price', '4') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        {{ Form::label('quantity : ', trans('messages.order_quantity'))}}
                        {{ Form::number('quantity', '1', array('min' => 1, 'max' => 50, 'size' => "4"))}}
                        {{ Form::hidden('invisible', '4') }}
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        {{ Form::submit(trans('messages.order_product'), array('class'=>'btn btn-primary')) }}
                    </div>
                    {{ Form::close()}}
                </div> 


            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/tablettebrisure.jpg') }}" alt="{{ trans('messages.tab_brisure_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection
