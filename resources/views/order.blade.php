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

                {{Form::open(['action' => 'Controller@ResumeOrder', 'method' => 'get'])}}
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>{{ trans('messages.order_product') }}</th>
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
                        <th>
                            {{Form::number($item->rowId, $item->qty, array('min' => 1, 'max' => 50, 'size' => "4", 'class'=>'form-control'))}}
                        </th>
                        <th>{{$item->price}} €</th>
                        <th>{{$item->subtotal}} €</th>
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

                <p id="location">{{$loc}}</p>

                @if (count($cart) > 0)
                <div class="row">
                    <div class="col-md-3">
                    <h3>Total : {{$total}} €</h3>
                    {{Form::label('Code', 'Code')}}
                    {{Form::text('Code','', array('class'=>'form-control'))}}
                    <br>
                    {{Form::submit('Valide informations', array('class'=>'btn btn-primary'))}}
                    </div>
                </div>
                @endif

                {{Form::close()}}
            </div>
        </div>
    </section>

@endsection

<script src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript" src="../js/control.js"></script>
