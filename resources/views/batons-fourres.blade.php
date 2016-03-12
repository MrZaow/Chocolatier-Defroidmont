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
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/baton.jpg') }}" alt="{{ trans('messages.bfr_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection