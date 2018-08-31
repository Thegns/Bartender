@extends('layouts.app')
@section('content')
    <h1>
        orders
    </h1>
    @if(count($orders)>1)
    <div class="row">
            <div class="col-3 col-lg-2"> Ordernumber</div>
            <div class="col-2 col-lg-2">Name</div>
            <div class="col-2 col-lg-2">Drink</div>
            <div class="col-2 col-lg-2">Quantity</div>
        </div>
        <?php $key =0; ?>
    @foreach($orders as $order)
 
  
    

    <div class="row">
       
    <div class="col-2 col-lg-2"> {{ ++$key }}</div>
    <div class="col-2 col-lg-2">{{$order->Name}}</div>
    <div class="col-2 col-lg-2">{{$order->Drink}}</div>
    <div class="col-2 col-lg-2">{{$order->Qty}}</div>
    {!!Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST', 'class' => 'btn btn-sm btn-danger'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Served', ['class' => 'btn btn-sm btn-danger'])}}
{!!Form::close()!!}
    </div>
    @endforeach 

    <div class="center"><a href="/" class="btn btn-md btn-primary"> Home</a></div>
     
    @else
    <p>
        None
    </p>
    @endif
@endsection
