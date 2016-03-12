@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.infos_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_infos') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.infos_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>{{ trans('messages.infos_title') }}</h2>
                <p><strong>{{ trans('messages.phone') }}</strong> : 086 21 84 40</p>
                <p><strong>Mail</strong> : <a href="mailto:contact@chocolatier-defroidmont.be"> contact@chocolatier-defroidmont.be</a> </p>
                <h2>{{ trans('messages.access') }}</h2>
                <p>{!! trans('messages.access_details') !!}
                    <img style="width:50px;" src="{{ asset('/images/pmr.png') }}" alt="{{ trans('messages.access_img_alt') }}">
                </p>
            </div>
            <div class="col-md-8">
                <h2>{{ trans('messages.localisation') }}</h2>
                <iframe width="100%" class="hidden-xs" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6063.0078142283!2d5.591841093712012!3d50.28855343285271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c046a419f795c9%3A0x6b5083c0d48052ff!2sDefroidmont!5e0!3m2!1sfr!2sbe!4v1450614993714" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe width="100%" class="hidden-sm hidden-md hidden-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6063.0078142283!2d5.591841093712012!3d50.28855343285271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c046a419f795c9%3A0x6b5083c0d48052ff!2sDefroidmont!5e0!3m2!1sfr!2sbe!4v1450614993714" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection