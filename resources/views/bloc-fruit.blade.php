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
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/blocfruit.jpg') }}" alt="Bloc fruit" class="img-responsive">
            </div>
        </div>
    </section>
@endsection