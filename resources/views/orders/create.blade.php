@extends('layouts.app')
@section('content')
<h1>New Order</h1>
    <p>Please enter information for Ordering a new drink</p>
<div class="text-left">            
{!! Form::open(['action' => 'OrdersController@store' ,'method'=> 'POST']) !!}
<div class="form-row">
    {!! Form::label('Name', 'Name', ['class' => 'col-lg-2 control-label'] )  !!}
    {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
</div>
<div class="form-row">
        {!! Form::label('Drink', 'Preferred Drink', ['class' => 'col-lg-2 control-label'] )  !!}
        <div class="col col-md-3">
            {!!  Form::select('Drink', ['Vodka Mist' => 'Vodka Mist', 'Dirty Martini' => 'Dirty Martini', 'Irish Coffee' => 'Irish Coffee', 'Negroni ' => 'Negroni ', 'Bloody Maria ' => 'Bloody Maria '], 'Main Campus', ['class' => 'form-control' ]) !!}
        </div>
</div>
        <div class="form-row">
                {!! Form::label('Qty', 'Preferred Quantity', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                        {!!Form::number('Qty', 'value');!!}
                    </div> 
        </div>
            </div>
            <div style="padding-top: 10px">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    <a class="btn btn-secondary" href="/menu" role="button">Back</a>
                </div>{!! Form::close() !!}

</div>
@endsection
