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
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/taborigine1.jpg') }}" alt="{{ trans('messages.tab_origine_title') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection