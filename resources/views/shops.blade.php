@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.shops_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_shops') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.shops_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="center">
                <h2>{{ trans('messages.our_shops_ed') }}</h2>
                <p>{{ trans('messages.our_shops_ed_details') }}</p>
            </div>
            <div class="col-md-5">
                <h3 class="center">{{ trans('messages.erezee') }}</h3>
                <img src="{{ asset('/images/boutique.JPG') }}" alt="{{ trans('messages.erezee_shop') }}" class="img-responsive">
                <br>
                <p>
                    {{ trans('messages.address') }} : Briscol 19a, 6997 Érezée <br>
                    {{ trans('messages.phone') }} : {{ trans('messages.phone_number_erezee') }} <br>
                </p>
                <p style="font-weight: Bold">{{ trans('messages.lundi') }} : {{ trans('messages.ferme') }}<br>
                                {{ trans('messages.mardi') }} : 10h - 17h30<br>
                                {{ trans('messages.mercredi') }} : 10h - 17h30<br>
                                {{ trans('messages.jeudi') }} : 10h - 17h30<br>
                                {{ trans('messages.vendredi') }} : 10h - 17h30<br>
                                {{ trans('messages.samedi') }} : 10h - 17h30<br>
                                {{ trans('messages.dimanche') }} : 11h - 16h</p>
                <p>{{ trans('messages.erezee_details') }}</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <h3 class="center">{{ trans('messages.durbuy') }}</h3>
                <img src="{{ asset('/images/boutiquedurbuy.jpg') }}" alt="{{ trans('messages.durbuy_shop') }}" class="img-responsive">
                <br>
                <p>
                    {{ trans('messages.address') }} : rue Alphonse Eloy 7, 6940 Durbuy  <br>
                    {{ trans('messages.phone') }} : {{ trans('messages.phone_number_durbuy') }} <br>
                </p>
                <p style="font-weight: Bold">{{ trans('messages.lundi') }} : 14h - 18h<br>
                                {{ trans('messages.mardi') }} : {{ trans('messages.ferme') }}<br>
                                {{ trans('messages.mercredi') }} : {{ trans('messages.ferme') }}<br>
                                {{ trans('messages.jeudi') }} : 14h - 18h<br>
                                {{ trans('messages.vendredi') }} : 14h - 18h<br>
                                {{ trans('messages.samedi') }} : 11h - 16h<br>
                                {{ trans('messages.dimanche') }} : 11h - 16h</p>
                <p>{{ trans('messages.durbuy_details') }}</p>
            </div>
        </div>
    </section>
@endsection