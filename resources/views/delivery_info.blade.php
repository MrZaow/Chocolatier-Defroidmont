
@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.ballotins_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_ballotins') }}
@endsection

@section('main-content')
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Information sur le pays de livraison</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <h2>Livraison en Belgique</h2>

            Au-dessus de 50€ d’achat, la livraison en Belgique est gratuite
            En dessous de 50€ d’achat, la livraison en Belgique coûte 3€
            La durée de livraison estimée en Belgique est de 2 à 4 jours ouvrés

            <h2>Livraison aux Pays-Bas, en France et en Allemagne</h2>
            Au-dessus de 50€ d’achat, la livraison coûte 9€
            En dessous de 50€ d’achat, la livraison coûte 16,80€
            La durée de livraison estimée aux Pays-Bas, en France et en Allemagne est de 3 à 5 jours ouvrés
        </div>
    </section>
@endsection
