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
	    	@yield('content')
        </main>
        <!-- FOOTER -->
		<footer>
			@include('layouts.footer')
		</footer>
    </body>
</html>