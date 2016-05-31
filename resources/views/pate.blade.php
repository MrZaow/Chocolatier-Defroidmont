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
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/pate.jpg') }}" alt="{{ trans('messages.pate_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection