@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.products_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_products') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.products_title') }}</h1>
                    <p>{{ trans('messages.desc_products') }}</p>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="portfolio" class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h3>Ballotins</h3>
                <a href="{{ route('ballotins') }}">
                    <img id="produit" src="{{ asset('/images/ballotins.jpg') }}" alt="Ballotin" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.bloc_nature_title') }}</h3>
                <a href="{{ route('bloc_nature') }}">
                    <img id="produit" src="{{ asset('/images/blocnature.jpg') }}" alt="{{ trans('messages.bloc_nature_title') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.bloc_fruit_title') }}</h3>
                <a href="{{ route('bloc_fruit') }}">
                    <img id="produit" src="{{ asset('/images/blocfruit.jpg') }}" alt="{{ trans('messages.bloc_fruit_title') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.tab_brisure_title') }}</h3>
                <a href="{{ route('tablette_brisure') }}">
                    <img id="produit" src="{{ asset('/images/tablettebrisure.jpg') }}" alt="{{ trans('messages.tab_brisure_title') }}" class="img-responsive">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.tab_origine_title') }}</h3>
                <a href="{{ route('tablettes_origine') }}">
                    <img id="produit" src="{{ asset('/images/taborigine1.jpg') }}" alt="{{ trans('messages.tab_origine_title') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.bfr_title') }}</h3>
                <a href="{{ route('batons_fourres') }}">
                    <img id="produit" src="{{ asset('/images/baton.jpg') }}" alt="{{ trans('messages.bfr_title') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.pate_title') }}</h3>
                <a href="{{ route('pate') }}">
                    <img id="produit" src="{{ asset('/images/pate.jpg') }}" alt="{{ trans('messages.pate_title') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>{{ trans('messages.the_title') }}</h3>
                <a href="{{ route('the') }}">
                    <img id="produit" src="{{ asset('/images/thechocolat.jpg') }}" alt="{{ trans('messages.the_title') }}" class="img-responsive">
                </a>
            </div>
        </div>
    </section>
@endsection