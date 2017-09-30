@extends('layouts.calculator')
@section('content')

	<div class="line text-center">
		        <div class="margin">
		        <h1 style="padding: 1em 1em;">Categorias</h1>
		@foreach($categories as $category)
 		          <div class="s-12 m-12 l-3 margin-m-bottom" style="padding: 1em 0.5em;">
		            <div class="padding-2x background-dark">
		              <i class="icon-sli-folder-alt icon3x text-white margin-bottom-30"></i>
		              <h2 class="text-thin">{{$category->name}}</h2>
		              <a class="button button-white-stroke text-size-12" href="{{route('calculator/category',$category->id)}}">Ver detalle</a>
		            </div>
		          </div>		
		@endforeach
		        </div>
		      </div>
@endsection