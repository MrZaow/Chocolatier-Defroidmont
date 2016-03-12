@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.order_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_order') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.order_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ trans('messages.desc_order') }}</h2>
                <p>{!! trans('messages.order_details') !!}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/equipe-defroidmont.jpg') }}" alt="{{ trans('messages.order_alt') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection