@extends('layouts.calculator')
@section('content')

<h1>Total: {{$total}} UT</h1>

<h3>Sanciones aplicadas</h3>
<!-- <ul>
	@foreach($events as $event)
		<li><h1><a href="{{route('calculator/event',$event->id)}}"> {{$event->name}}</a> </h1>

	@endforeach
</ul> -->

<div class="line text-center">
		        <div class="margin">
@foreach($events as $i => $event)
 		          <div class="s-12 m-12 l-3 margin-m-bottom" style="padding: 1em 0.5em;">
		            <div class="padding-2x background-primary">
		              <i class="icon-sli-pin icon3x text-white margin-bottom-30"></i>
		              <h2 class="text-thin">{{$event->name}}</h2>
		              <div class="line">
		              	
		              <div class= "l-6"><a class="button button-white-stroke text-size-12 lg-7" href="{{route('calculator/event',$event->id)}}">Detalle</a> 
		            </div>
		            <div class= "l-5">
		              <a class="button button-white-stroke text-size-12 lg-6" href="{{route('calculator/event/delete',$i)}}">Eliminar</a>
		              </div>
					</div>
		     		</div>
		          </div>		
		@endforeach
		        </div>
		      </div>
				<div class="line" >
                	<div class="s-12 m-12 text-center" style="padding: 2em 0;">
						<a class="button button-dark-stroke " href="{{route('calculator/new')}}">Iniciar nueva consulta</a>
               		</div>
                </div>
<!-- <a href="{{route('calculator/new')}}"><button class="btn button-primary">Iniciar nueva consulta</button></a>
 -->
 @endsection