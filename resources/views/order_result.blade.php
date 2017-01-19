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
                    <h1>{{ trans('messages.result_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <section class="container">
        <div class="row">
            <div class="col-md-12">
            	@if ($fail)
            		<div class="alert alert-danger">
					  <strong>{{ trans('messages.result_oops') }}</strong> {{ trans('messages.result_error') }} 
					</div>
            	@else
            		<div class="alert alert-success">
					  <strong>{{ trans('messages.result_thanks') }}</strong> {{ trans('messages.result_success') }}
					</div>
            	@endif
            </div>
        </div>
    </section>
@endsection

