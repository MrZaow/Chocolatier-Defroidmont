@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.home_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_home') }}
@endsection

@section('main-content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-color: #30120a">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <div class="hidden-xs">
                                        <img style=" display: block;  margin-left: auto; margin-right: auto; margin-top: 10%;" src="{{ asset('/images/logo22.png') }}" alt="Logo chocolaterie Defroidmont">
                                    </div>
                                    <div class="hidden-sm hidden-md hidden-lg">
                                        <img style="margin-top: 50%;" class="img-responsive" src="{{ asset('/images/logo22.png') }}" alt="Logo chocolaterie Defroidmont">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url({{ asset('/images/slider/bg2.jpg') }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h1 class="animation animated-item-1">{{ trans('messages.choco_here') }}</h1>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="{{ route('easter') }}">{{ trans('messages.see_choco_here') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url({{ asset('/images/equipe-defroidmont.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">{{ trans('messages.dont_hesitate') }}</h2>
                                    <h3 class="animation animated-item-2">{{ trans('messages.phone') }} : 086 21 84 40</h3>
                                    <h3 class="animation animated-item-3">Mail : contact@chocolatier-defroidmont.be</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-time icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{ trans('messages.open_hour') }}</h3>
                            <h4>Erezée</h4>
                            <p>{{ trans('messages.open_hour_erezee') }}</p>
                            <h4>Durbuy</h4>
                            <p>{{ trans('messages.open_hour_durbuy') }}</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-shopping-cart icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{ trans('messages.sell_chocolate') }}</h3>
                            <p>{{ trans('messages.sell_chocolate_details') }}</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-group icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{ trans('messages.visit_museum') }}</h3>
                            <p>{!! trans('messages.visit_museum_details') !!}</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>{{ trans('messages.delicious_products') }}</h3>
                    <p>{{ trans('messages.delicious_products_details') }}</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('ballotins') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/ballotins.jpg') }}" alt="Ballotins">
                                                </a>
                                                <h5>
                                                    Ballotins
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('bloc_nature') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/blocnature.jpg') }}" alt="bloc nature">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.natural_blocs') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('bloc_fruit') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/blocfruit.jpg') }}" alt="bloc fruit">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.fruit_blocs') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('tablette_brisure') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/tablettebrisure.jpg') }}" alt="">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.brisure_tablet') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('tablettes_origine') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/taborigine1.jpg') }}" alt="">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.origin_tablet') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('batons_fourres') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/baton.jpg') }}" alt="">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.fure_baton') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="{{ route('pate') }}">
                                                    <img id="produit" class="img-responsive" src="{{ asset('/images/pate.jpg') }}" alt="">
                                                </a>
                                                <h5>
                                                    {{ trans('messages.pate_tartinas') }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="testimonial" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>{{ trans('messages.what_client_say') }}</h2>
                        <p>{{ trans('messages.satisfaction_first') }}</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>
                                    <i>"{{ trans('messages.testimonial_1') }}"</i>
                                </p>
                                <small>Emeline Quirynen {{ trans('messages.from') }} <cite title="Source Title">Google Maps</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>
                                    <i>"{{ trans('messages.testimonial_2') }}"</i>
                                </p>
                                <small>Virginie Danny {{ trans('messages.from') }} <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>
                                    <i>"{{ trans('messages.testimonial_3') }}"</i>
                                </p>
                                <small>Lucie V {{ trans('messages.from') }} <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                            <blockquote>
                                <p><i>"{{ trans('messages.testimonial_4') }}"</i>
                                </p>
                                <small>Natalie F {{ trans('messages.from') }} <cite title="Source Title">TripAdvisor</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->
@endsection
