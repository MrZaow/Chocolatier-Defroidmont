@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.error404') }}
@endsection

@section('description')
    {{ trans('messages.error404') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.error404') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('messages.error404_details') }}</h2>
                <a href="{{ route('home') }}"><button type="button" class="btn btn-primary btn-lg">{{ trans('messages.error404_back') }}</button></a>
            </div>
        </div>
    </section>
@endsection