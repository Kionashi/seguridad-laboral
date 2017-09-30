@extends('layouts.frontend')

@section('content')
 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Registro de Usuario</h1>
            <p class="margin-bottom-0 text-size-16">Formulario de contacto directo<br>
            Indique alli su inquietud y a la brevedad le estaremos respondiendo.</p>
          </div>  
        </header>
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="customform" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="name" class="l-4 m-4 s-12 control-label">Nombre</label>

                            <div class="l-6 m-6 s-12">
                                <input id="name" type="text" class="form-control" name="first_name" placeholder="Nombre" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="l-4 m-4 s-12 control-label">Apellido</label>

                            <div class="l-6 m-6 s-12">
                                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Apellido" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="l-4 m-4 s-12 control-label">Correo electronico    </label>

                            <div class="l-6 m-6 s-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Coreo Electronico" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                            <label for="ci" class="l-4 m-4 s-12 control-label">C&eacute;dula de identidad</label>

                            <div class="l-6 m-6 s-12">
                                <input id="ci" type="text" class="form-control" name="ci" placeholder="C&eacute;dula de identidad" required autofocus>

                                @if ($errors->has('ci'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="l-4 m-4 s-12 control-label">Tel&eacute;fono</label>

                            <div class="l-6 m-6 s-12">
                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Tel&eacute;fono" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="l-4 m-4 s-12 control-label">Empresa</label>

                            <div class="l-6 m-6 s-12">
                                <input id="company" type="text" class="form-control" name="company" placeholder="Empresa (Opcional)" required autofocus>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="l-4 m-4 s-12 control-label">Contraseña</label>

                            <div class="l-6 m-6 s-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="l-4 m-4 s-12 control-label">Confirm Password</label>

                            <div class="l-6 m-6 s-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="l-4 m-4 s-12 center">
                                <button type="submit" class="btn button-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
