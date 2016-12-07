@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('messages.order_title') }}
@endsection

@section('description')
    {{ trans('messages.desc_order') }}
@endsection

@section('main-content')
	<section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Commande</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <section class="container">
        <div class="row">
            <div class="col-md-12">
            	@if ($fail)
            		<div class="alert alert-danger">
					  <strong>Oops!</strong> Une erreur s'est produite lors de votre payement : {{$e}}
					</div>
            	@else
            		<div class="alert alert-success">
					  <strong>Merci !</strong> Nous avons bien reçus votre payemment. Votre commande est en cours de traitement.
					</div>
            	@endif
            </div>
        </div>
    </section>
@endsection

