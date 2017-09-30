<!-- Top Navigation -->
<nav class="background-transparent background-transparent-hightlight full-width sticky">
<div class="s-12 l-4">
  <a href="{{route('/')}}" class="logo">
    <!-- Logo White Version -->
    <img class="logo-white" src="{{asset('img/logo-blanco.png')}}" alt="Abog. Edgar E Cardozo Lira">
    <!-- Logo Dark Version -->
    <img class="logo-dark" src="{{asset('img/logo-negro.png')}}" alt="Abog. Edgar E Cardozo Lira">
  </a>
</div>
<div class="top-nav s-12 l-8">
  <p class="nav-text"></p>
  <ul class="right chevron">
    <li><a href="{{route('/')}}">Inicio</a></li>
    <li><a href="{{route('about')}}">Qui&eacute;nes somos</a></li>
    <li><a>Servicios al cliente</a>
      <ul style="min-width: 184px;">
        <li><a>T&eacute;cnicos</a>
        </li>
        <li><a>Legales</a></li>
        @if(Auth::check())
        	<li><a href="{{route('calculator')}}">Calculadora de incidencias</a></li>
        @endif
      </ul>
    </li>
    <li><a href="gallery.html">Galer&iacute;a</a></li>
    <li><a href="{{route('contact')}}">Contactanos</a></li>
    @if(Auth::check())
    	<li><a href="{{route('logout')}}">Cerrar sesi&oacute;n</a></li>
    @else
    	<li><a href="{{route('login')}}">Iniciar sesi&oacute;n</a></li>
    @endif
  </ul>
</div>
</nav>
