@extends('layouts.frontend')
@section('content')
 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contacto</h1>
            <p class="margin-bottom-0 text-size-16">Formulario de contacto directo<br>
            Indique alli su inquietud y a la brevedad le estaremos respondiendo.</p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius" style="height: 150px;">
                  <div class="float-left hide-s">
                    <i class="icon-sli-location-pin icon3x text-primary"></i>
                  </div>
                <div class="margin-left-70 margin-s-left-0 margin-bottom">
                  <h3 class="margin-bottom-0">Zona de atenci&oacute;n</h3>
                  <p>Prestamos servicios en todo el teritorio nacional</p>               
                </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius" style="height: 150px;">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p><a href="mailto:abog.edgarcardozo@gmail.com">abog.edgarcardozo@gmail.com</a></p>           
                  </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius" style="height: 150px;">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Tel&eacute;fono de contacto</h3>
                    <p><a href="tel:+584126932918" target="_blank">+58-412-693-2918</a></p>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
            
              <di5v class="s-12 m-12 l-12">
                <h2 class="margin-bottom-10">Deja un mensaje</h2>
                <form name="contactForm" class="customform" method="post">
                {!! Form::model(array('method' => 'POST', 'route' => 'contact'), array('class' => 'customform', 'id' => 'contact-form')) !!}  
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        {!!Form::text('email', null, ['class' => 'required email', 'id' => 'email', 'placeholder' => 'Correo Electronico'])!!}
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        {!!Form::text('name', null, ['class' => 'required name', 'id' => 'name', 'placeholder' => 'Nombre'])!!}
                        <p class="name-error form-error">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    {!!Form::text('subject', null, ['class' => 'required subject', 'id' => 'subject', 'placeholder' => 'Asunto'])!!}
                    <p class="subject-error form-error">Please enter the subject.</p>
                  </div>
                  <div class="s-12">
                  {!!Form::textarea('message', null, ['class' => 'required message', 'id' => 'message', 'placeholder' => 'Tu mensaje', 'rows' => '4'])!!}
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Enviar</button></div>
                </form>
              </div>
             <!--  <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10">Office Hours</h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Monday<br>
                  Tuesday<br>
                  Wednesday<br>
                  Thursday<br>
                  Friday<br>
                  Saturday<br>
                  Sunday
                  </p>
                </div>
                <div class="s-6">
                  <p class="text-size-16 text-strong">
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-14.00<br>
                  08.00-14.00<br>
                  Close
                  </p>
                </div>
              </div> -->
            </div>    
          </div>  
        </div> 
      </article>
    </main>
    @endsection