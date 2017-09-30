@extends('layouts.calculator')
@section('content')
	<!-- <h1>{{$category->name}}</h1>
	<ul>
	@foreach($category2->subcategories as $subcategory)
	<li><h2><a href="{{route('calculator/subcategory',$subcategory->id)}}"> <?php echo $subcategory->name; ?></a></h2></li>
	@endforeach
	@foreach($category->events as $event)
		<li><h3>{{$event->name}}</h3></li>
	@endforeach
	</ul> -->

	<div class="line text-center">
		        <div class="margin">
		        		        <h1 style="padding: 1em 1em;">{{$category2->name}}</h1>
		@foreach($category2->subcategories as $subcategory)
 		          <div class="s-12 m-12 l-3 margin-m-bottom" style="padding: 1em 0.5em;">
		            <div class="padding-2x background-dark">
		              <i class="icon-sli-folder-alt icon3x text-white margin-bottom-30"></i>
		              <h2 class="text-thin">{{$subcategory->name}}</h2>
		              <a class="button button-white-stroke text-size-12" href="{{route('calculator/subcategory',$subcategory->id)}}">Ver detalle</a>
		            </div>
		          </div>		
		@endforeach
		      
		@foreach($category->events as $event)
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