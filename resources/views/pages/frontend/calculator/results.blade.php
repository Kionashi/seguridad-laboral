	@extends('layouts.calculator')
	@section('content')


		<div class="line text-center">
		        <div class="margin">
		@foreach($events as $event)
<!-- 			<li><h1><a href="{{route('calculator/event',$event->id)}}"> {{$event->name}}</a> </h1>
 -->		          <div class="s-12 m-12 l-3 margin-m-bottom" style="padding: 1em 0.5em;">
		            <div class="padding-2x background-primary">
		              <i class="icon-sli-pin icon3x text-white margin-bottom-30"></i>
		              <h2 class="text-thin">{{$event->name}}</h2>
		              <a class="button button-white-stroke text-size-12" href="{{route('calculator/event',$event->id)}}">Ver detalle</a>
		            </div>
		          </div>		
		@endforeach
		        </div>
		      </div>
		
	@endsection