
@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.delivery_title') }}
@endsection

@section('description')
    {{ trans('messages.delivery_b_info') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.delivery_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <h2>{{ trans('messages.delivery_belgique') }}</h2>
            {{ trans('messages.delivery_b_info') }}

            <h2>{{ trans('messages.delivery_all') }}</h2>
            {{ trans('messages.delivery_a_info') }}
        </div>
    </section>
@endsection
