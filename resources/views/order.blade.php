@extends('layouts.app')

<script>    
    var sites = {!! json_encode($cart->toArray()) !!};
</script>

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
                    <h1>{{ trans('messages.order_title') }}</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('messages.order_question') }}</h2>
                <p>{!! trans('messages.order_help') !!}</p>

                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>{{ trans('messages.order_product_name') }}</th>
                    <th>{{ trans('messages.order_quantity') }}</th>
                    <th>{{ trans('messages.order_price') }}</th>
                    <th>{{ trans('messages.order_subtotal') }}</th>
                    <th>{{ trans('messages.order_delete') }}</th>
                  </tr>
                  @foreach ($cart as $item)
                    <tr>
                        <th>
                            {{ trans('messages.' . $item->name) }}
                        </th>
                        <th class="qty">
                            {{Form::number($item->rowId, $item->qty, array('min' => 1, 'max' => 50, 'size' => "4", 'class'=>'form-control', 'id'=> $item->name))}}
                        </th>
                        <th><span id="{{$item->name.'_p'}}">{{$item->price}}<span>€</th>
                        <th><span id="{{$item->name.'_s'}}">{{$item->subtotal}}<span> €</th>
                        <th>
                            {{ Form::open(['action' => 'Controller@DelCart', 'method' => 'delete', 'style'=>'margin-bottom: 0px']) }}
                            {{ Form::hidden('rowId', $item->rowId) }}
                            {{ Form::submit(trans('messages.order_delete'), array('class'=>'btn btn-danger')) }}
                            {{ Form::close()}}
                        </th>
                    </tr>
                  @endforeach
                </thead>
                </table>

                {{Form::open(['action' => 'Controller@ResumeOrder', 'method' => 'get'])}}
                @if (count($cart) > 0)
                <div class="row">
                    <div class="col-md-3">
                    <h3>Total : <span id="total">{{$total}}</span> €</h3>

                    {{Form::label('country', '{{trans('messages.order_pays') }}')}}
                    {{Form::select('country', array('BE'=>'Belgique', 'DE'=>'Allemagne', 'PB'=>'Pays-Bas', 'FR' => 'France'), array('class'=>'form-control'))}}

                    <br>

                    {{Form::label('Code', '{{trans('messages.order_code') }}')}}
                    {{Form::text('Code','', array('class'=>'form-control'))}}
                    <br>
                    {{Form::submit('{{trans('messages.order_proceed') }}', array('class'=>'btn btn-primary'))}}
                    </div>
                </div>
                @endif

                @foreach ($cart as $item)
                    {{Form::hidden($item->name, $item->qty, array('id'=>$item->name.'_h') )}}
                @endforeach
                {{Form::close()}}
            </div>
        </div>
    </section>

@endsection

<script src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript" src="../js/control.js"></script>
