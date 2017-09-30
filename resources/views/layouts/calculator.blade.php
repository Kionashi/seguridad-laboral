
<html>
    <head>
		<link rel="stylesheet" href="{{ asset('css/components.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/responsee.css') }}">
	    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css') }}">
	    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css') }}">     
	    <link rel="stylesheet" href="{{ asset('css/template-style.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/template-override.css') }}">
	    <!-- <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
	    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->


	    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>     
		<script type="text/javascript" src="{{ asset('js/responsee.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/template-scripts.js') }}"></script>

        <title>Edgar E. Cardozo Lira | Especialista en seguridad y salud en el trabajo</title>
    </head>
    <body class="size-1140">
    	<!-- MAIN -->
    	<main role="main">    
	    	<!-- HEADER -->
			<header role="banner" class="position-absolute">    
				@include('layouts.header')
		  	</header>   
		  	<header class="section background-dark">
          		<div class="line">        
		            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1"><a href="{{route('calculator')}}">Calculadora de incicencia</a></h1>
	          	</div>  
		            <div class="line">
	                   {{ Form::open(['route' => 'calculator/search', 'class' => 'customform']) }} 
                      	<div class= "s-12 m-12 l-4">
							    {!!Form::text('value', null, ['class' => 'value', 'id' => 'value', 'placeholder' => 'Buscar', 'style' => 'background: white;'])!!}
						</div>
						<div class="s-12 m-12 l-2">
							
							  <button class="submit-form button button-white-stroke" style="margin: 0 1em;" type="submit">Buscar</button>   
						</div>
							{{ Form::close() }}
                    </div>
                    <div class="line" >
                    	<div class="s-12 m-12 l-4">
							<a class="button button-white-stroke" href="{{route('calculator/total')}}">Ver resultado</a>
                      	</div>
                    </div>       
		            <!-- <p class="margin-bottom-0 text-size-16">Formulario de contacto directo<br>
		            Indique alli su inquietud y a la brevedad le estaremos respondiendo.</p> -->
</header>
	    	@yield('content')
        </main>
        <!-- FOOTER -->
		<footer>
			@include('layouts.footer')
		</footer>
    </body>
</html>
