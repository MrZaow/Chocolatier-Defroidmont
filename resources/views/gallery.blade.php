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
                <div class="col-sm-12">
                    <h1>{{ trans('messages.our_collection') }}</h1>
                    {!! trans('messages.our_collection_details') !!}
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie1.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie2.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie3.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie4.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie5.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/paques/galerie/gallerie6.jpg') }}" alt="{{ trans('messages.choco_easter') }}" class="img-responsive"><br>
            </div>
        </div>
    </section>
@endsection
