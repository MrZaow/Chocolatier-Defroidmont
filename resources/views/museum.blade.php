@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.museum_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_museum') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.museum_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="center">
                <h2>{{ trans('messages.come_museum') }}</h2>
                <p>{{ trans('messages.desc_museum1') }}</p>
                <p>{{ trans('messages.desc_museum2') }}</p>
            </div>
            <div class="row center">
                <h2>{{ trans('messages.mu_reserve') }}</h2>
                {{ Form::open(['action' => 'Controller@AddCart']) }}
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="row pull-right">
                        {{ Form::label("mu_adulte", trans('messages.mu_adulte') . " (6€) ")}}
                        {{ Form::number('mu_adulte', '1', array('min' => 0, 'max' => 50, 'size' => "4"))}}
                        </div>

                        <div class="row pull-right">
                        {{ Form::label('mu_enfant', trans('messages.mu_enfant') . " (4€) ")}}
                        {{ Form::number('mu_enfant', '0', array('min' => 0, 'max' => 50, 'size' => "4"))}}
                        </div>

                        <div class="row pull-right">
                        {{ Form::label("bird_adulte", trans('messages.bird_adulte') . " (6€) ")}}
                        {{ Form::number('bird_adulte', '0', array('min' => 0, 'max' => 50, 'size' => "4"))}}
                        </div>

                        <div class="row pull-right">
                        {{ Form::label('bird_enfant', trans('messages.bird_enfant') . " (4€) ")}}
                        {{ Form::number('bird_enfant', '0', array('min' => 0, 'max' => 50, 'size' => "4"))}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{ Form::submit(trans('messages.mu_resbutton'), array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 35px')) }}
                        {{ Form::hidden('invisible', '42') }}

                        {{ Form::close()}}
                    </div>
                    <div class="col-md-4"></div>
                </div>
            
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <img src="{{ asset('/images/musee1.jpg') }}" alt="{{ trans('messages.ch_museum') }}" class="img-responsive"><br>
                    <img src="{{ asset('/images/musee2.jpg') }}" alt="{{ trans('messages.ch_museum') }}" class="img-responsive"><br>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/images/musee4.JPG') }}" alt="{{ trans('messages.ch_museum') }}" class="img-responsive"><br>
                    <img src="{{ asset('/images/musee5.JPG') }}" alt="{{ trans('messages.ch_museum') }}" class="img-responsive"><br>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="center">
                <h2>{{ trans('messages.informations') }}</h2>
            </div>
            <div class="col-md-4">
                <h3>{{ trans('messages.tarif') }}</h3>
                <p>
                    {{ trans('messages.adultes') }} <br>
                    {{ trans('messages.enfants') }}
                </p>
                <h3>{{ trans('messages.tarif_bees') }}</h3>
                <p>
                    {{ trans('messages.adultes_bees') }} <br>
                    {{ trans('messages.enfants_bees') }}
                </p>
                <h3>{{ trans('messages.duree') }}</h3>
                <p>{!! trans('messages.desc_museum3') !!}</p>
                <h3>{{ trans('messages.open_hour') }}</h3>
                <p>
                    {{ trans('messages.lundi') }} : {{ trans('messages.ferme') }}<br>
                    {{ trans('messages.mardi') }} - {{ trans('messages.samedi') }} : 10h - 17h<br>
                    {{ trans('messages.dimanche') }} : 11h - 16h<br>
                </p>
                <h3>{{ trans('messages.access') }}</h3>
                <p>{!! trans('messages.access_details') !!}
                    <img style="width:50px;" src="{{ asset('/images/pmr.png') }}" alt="{{ trans('messages.access_img_alt') }}">
                </p>
            </div>
            <div class="col-md-8">
                <h3>{{ trans('messages.localisation') }}</h3>
                <iframe width="100%" class="hidden-xs" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6063.0078142283!2d5.591841093712012!3d50.28855343285271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c046a419f795c9%3A0x6b5083c0d48052ff!2sDefroidmont!5e0!3m2!1sfr!2sbe!4v1450614993714" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe width="100%" class="hidden-sm hidden-md hidden-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6063.0078142283!2d5.591841093712012!3d50.28855343285271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c046a419f795c9%3A0x6b5083c0d48052ff!2sDefroidmont!5e0!3m2!1sfr!2sbe!4v1450614993714" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </section>
@endsection