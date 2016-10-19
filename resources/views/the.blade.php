@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.the_title') }}
@endsection

@section('description')
    {{ trans('messages.the_title') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.the_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="portfolio" class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_nc') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/thechocolat.jpg') }}" alt="{{ trans('messages.the_nc') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_nca') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/thecaramel.jpg') }}" alt="{{ trans('messages.the_nca') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_nml') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/themylady.jpg') }}" alt="{{ trans('messages.the_nml') }}" class="img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_vct') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/thedouceur.jpg') }}" alt="{{ trans('messages.the_vct') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_vf') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/thefees.jpg') }}" alt="{{ trans('messages.the_vf') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_vpc') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/theprune.jpg') }}" alt="{{ trans('messages.the_vpc') }}" class="img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_ipc') }}</h3>
                <ul>
                    <li>60g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/theconnemara.jpg') }}" alt="{{ trans('messages.the_ipc') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_idd') }}</h3>
                <ul>
                    <li>60g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/thedurbuy.jpg') }}" alt="{{ trans('messages.the_idd') }}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3>{{ trans('messages.the_ta') }}</h3>
                <ul>
                    <li>50g - 4,50€</li>
                </ul>
                <img src="{{ asset('/images/theardennaise.jpg') }}" alt="{{ trans('messages.the_ta') }}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection
