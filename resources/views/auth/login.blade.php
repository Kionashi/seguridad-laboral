@extends('layouts.frontend')
@section('content')
 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Inicio de sesi&oacute;n</h1>
            <p class="margin-bottom-0 text-size-16">Ingrese sus datos<br>
            Para acceder a la zona de usuarios</p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="panel panel-default s-12 m-12 l-12">
                <div class="panel-body">
                    <form class="customform" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="line form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="l-4 control-label">Correo Electronico</label>

                            <div class="l-4 m-4 -s-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electronico">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class=" line form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="l-4 m-4 s-12 control-label">Contraseña</label>

                            <div class="l-4 m-4 s-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="l-4 m-4 s-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="l-4 m-4 s-12 center">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>

        
            </div>            
    @endsection