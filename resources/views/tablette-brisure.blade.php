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
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/tablettebrisure.jpg') }}" alt="{{ trans('messages.tab_brisure_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection
