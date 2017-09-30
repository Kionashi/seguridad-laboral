@extends('layouts.calculator')
@section('content')

<div class="line">
@if(isset($response))
	        	<h3 style="color:green;">{{$response}}</h3>
@endif 
    <h2 class="text-size-40 margin-bottom-30">{{$event->name}}</h2>
    <hr class="break-small background-primary margin-bottom-30">
    <p class="margin-bottom-40">
        {{$event->description}}
    </p>
	<h3 style="color:red;">Sanci&oacuten: {{$event->penalty_charge}} UT</h3>
{{ Form::open(['route' => 'calculator/add-penalty']) }}
    {{ Form::text('id',$event->id,['style' => 'display:none;'])}}
    {{ Form::submit('Agregar sancion',['class' => 'btn btn-primary'])}}
{{ Form::close() }}
</div>   



@endsection