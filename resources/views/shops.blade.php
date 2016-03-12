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
                    {{ trans('messages.open') }} : {{ trans('messages.open_erezee') }}
                </p>
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
                    {{ trans('messages.open') }} : {{ trans('messages.open_durbuy') }}
                </p>
                <p>{{ trans('messages.durbuy_details') }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="center">
                <h2>{{ trans('messages.partenaire_title') }}</h2>
            </div>
            <div class="col-md-4">
                <h3>{{ trans('messages.brabant_wallon') }}</h3>
                <p><strong>L’ACCORD PARFAIT</strong> <br>
                    Grand’Route, 14 <br>
                    B 1435 CORBAIS <br>
                    {{ trans('messages.phone') }} : 010/65.62.96 <br>
                    {!! trans('messages.acp_horaire') !!}
                </p>
                <h3>{{ trans('messages.namur') }}</h3>
                <p><strong>LA GAILLARDE</strong> <br>
                    Rue Saint-Gilles, 59 <br>
                    B 5590 CINEY <br>
                    {{ trans('messages.phone') }} : 083/63.30.75 <br>
                    {!! trans('messages.lg_horaire') !!}
                </p>
                <p><strong>DELICES FERMIERS</strong> <br>
                    Place de l'Eglise, 6 <br>
                    5377 NETTINNE <br>
                    {{ trans('messages.phone') }} : 083/68.80.83 <br>
                    {!! trans('messages.df_horaire') !!}
                </p>
                <h3>{{ trans('messages.limbourg') }}</h3>
                <p><strong>MOKKA MIN</strong> <br>
                    Stapelstraat 76 <br>
                    B 3800 SINT-TRUIDEN <br>
                    {{ trans('messages.phone') }} : 011/70 79 93 <br>
                    {!! trans('messages.mm_horaire') !!}
                </p>
            </div>
            <div class="col-md-4">
                <h3>{{ trans('messages.liege') }}</h3>
                <p><strong>AU FIL DES SAISONS</strong> <br>
                    Route de Marche, 11a <br>
                    B 4560 TERWAGNE <br>
                    {{ trans('messages.phone') }} : 0497/577.212 <br>
                    {!! trans('messages.fs_horaire') !!}
                </p>
                <p><strong>LA MIE GOURMANDE</strong> <br>
                    Chaussée d’Argenteau 34 <br>
                    B 4601 ARGENTEAU <br>
                    {{ trans('messages.phone') }} : 04/374.05.54 <br>
                    {!! trans('messages.mg_horaire') !!}
                </p>
                <p><strong>LA COP</strong> <br>
                    Place de Chablis 14a <br>
                    B 4190 FERRIERES <br>
                    {{ trans('messages.phone') }} : 086/84.01.57
                </p>
            </div>
            <div class="col-md-4">
                <h3>{{ trans('messages.luxembourg') }}</h3>
                <p><strong>MONTFRUIT (Bodson)</strong> <br>
                    Rue des Ardoisières, 3 <br>
                    B 6680 BERTRIX <br>
                    {{ trans('messages.phone') }} : 061/41.23.63 <br>
                    {!! trans('messages.mb1_horaire') !!}
                </p>
                <p><strong>MONTFRUIT (Bodson)</strong> <br>
                    Square Général Patton, 14 <br>
                    L 8443 STEINFORT <br>
                    {{ trans('messages.phone') }} : + 352 27 395.451 <br>
                    {!! trans('messages.mb2_horaire') !!}
                </p>
                <p><strong>SYMPHONIE DES SAVEURS</strong> <br>
                    Place de l’Eglise, 15 <br>
                    B 6660 HOUFFALIZE <br>
                    {{ trans('messages.phone') }} : 061/32.11.09 <br>
                    {!! trans('messages.ss_horaire') !!}
                </p>
                <p><strong>ESOTHERIX</strong> <br>
                    Rue du Mont, 5 <br>
                    B 6941 WERIS (DURBUY) <br>
                    {{ trans('messages.phone') }} : 086/32 27 20 <br>
                    {!! trans('messages.e_horaire') !!}
                </p>
                <p><strong>LE CABAS DU MOULIN</strong> <br>
                    Rue de la Gare 2B <br>
                    B 6670 GOUVY <br>
                    {{ trans('messages.phone') }} : 080/40 02 21 <br>
                    {!! trans('messages.cm_horaire') !!}
                </p>
            </div>

        </div>
    </section>
@endsection