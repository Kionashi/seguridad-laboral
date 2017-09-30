@extends('layouts.calculator')
@section('content')
	<!-- <ul>
	@foreach($subcategory->events as $event)
		<li><h3>{{$event->name}}</h3></li>
	@endforeach
	</ul> -->

<div class="line text-center">
		        <div class="margin">
		        		        <h1 style="padding: 1em 1em;">{{$subcategory->name}}</h1>

@foreach($subcategory->events as $event)
 		          <div class="s-12 m-12 l-3 margin-m-bottom" style="padding: 1em 0.5em;">
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