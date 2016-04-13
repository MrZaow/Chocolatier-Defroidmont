@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.easter_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_easter') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.our_collection') }}</h1>
                    {!! trans('messages.our_collection_details') !!}
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques1.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques2.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques3.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques4.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques5.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques6.JPG') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
    </section>
@endsection
