@extends('layouts.frontend')
@section('content')
    <!-- Main Header -->
    <header>
      <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
          <div class="s-12">
            <img src="{!! asset('img/header.jpg') !!}" alt="header">
            <div class="carousel-content">

              <div class="content-center-vertical line">
                <div class="margin-top-bottom-80">
                  <!-- Title -->
                  <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Seguridad y salud en el trabajo</h1>
                  <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Nuestra experiencia y seriedad, puestas al servicio de su prevenci&oacute;n.</p></div>
                  <div class="line">
                    <div class="s-12 m-12 l-3 center">
                      <a class="button button-white-stroke s-12" href="{{route('calculator')}}">Calculadora de sanciones</a>
                    </div>       
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>              
      </div>               
    </header>
    
    <!-- Section 2 -->
    <section class="full-width">
      <div class="s-12 m-12 l-6">  
        <img src="{{ asset('img/img-12.jpg') }}" alt="">
      </div>
      <div class="s-12 m-12 l-6">
        <div class="padding-2x">
          <div class="line">
            <div class="float-left">
              <i class="icon-sli-drop icon3x text-dark"></i>
            </div>
            <div class="margin-left-60 margin-bottom-30">
              <h3 class="text-size-25 margin-bottom-0">Discreci&oacute;n en nuestra actuaci&oacute;n</h3>
              <p class="text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<br> Vel illum dolore eu feugiat nulla facilisis.</p>            
            </div>
          </div>
          
          <div class="line">
            <div class="float-left">
              <i class="icon-sli-screen-smartphone icon3x text-dark"></i>
            </div>
            <div class="margin-left-60 margin-bottom-30">
              <h3 class="text-size-25 margin-bottom-0">Seriedad en nuesta propuesta</h3>
              <p class="text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>            
            </div>
          </div>
          
          <div class="line">
            <div class="float-left">
              <i class="icon-sli-heart icon3x text-dark"></i>
            </div>
            <div class="margin-left-60 margin-bottom-30">
              <h3 class="text-size-25 margin-bottom-0">Solidez en nuestra argumentaci&oacute;n</h3>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<br> Vel illum dolore eu feugiat nulla facilisis.</p>            
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <hr class="break margin-top-bottom-0">
    
    <!-- Section 4 -->
    <section class="section-top-padding full-width">
      <h2 class="text-size-50 text-center">Nuestro trabajo</h2>
      <hr class="break-small background-primary break-center"> 
      <div class="tabs background-primary-hightlight">
          <div class="tab-item tab-active">
            <div class="tab-content lightbox-gallery">
              <div class="s-12 m-6 l-3">
                <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-02.jpg">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h2 class="text-thin">Asersor&iacute;a legal</h2> 
                      <p>Trabajo planificado para mantener al día y libre de cargos a los clientes bajo nuestra gesti&oacute;n</p> 
                    </div> 
                  </div> 
                  <img src="{{ asset('img/portfolio/thumb-02.jpg') }}" alt="" title="Portfolio Image 1" />
                </a>	
              </div>
              <div class="s-12 m-6 l-3">
                <a class="image-with-hover-overlay image-hover-zoom" href="{{ asset('img/portfolio/video.mp4') }}">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h2 class="text-thin">Urgencias e inspecciones</h2> 
                      <p>Trabajo de emergencia para procurar el menor impacto en la gesti&oacute;n de la empresa</p> 
                    </div> 
                  </div> 
                  <img src="img/portfolio/thumb-09.jpg" alt="" title="Portfolio Image 2" />
                </a>	
              </div>
              <div class="s-12 m-6 l-3">
                <a class="image-with-hover-overlay image-hover-zoom" href="{{ asset('img/portfolio/portfolio-08.jpg') }}">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h2 class="text-thin">Cursos y charlas</h2> 
                      <p>Trabajo para sensibilizar al prersonal de la empresa en el que hacer diario de la seguridad y salud en el trabajo</p> 
                    </div> 
                  </div> 
                  <img src="{{ asset('img/portfolio/thumb-08.jpg') }}" alt="" title="Portfolio Image 3" />
                </a>	
              </div>
              <div class="s-12 m-6 l-3">
                <a class="image-with-hover-overlay image-hover-zoom" href="{{ asset('img/portfolio/portfolio-05.jpg') }}">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h2 class="text-thin">Consultor&iacute;a</h2> 
                      <p>Trabajo puntual para resolver dudas y consultas no urgentes al cliente.</p> 
                    </div> 
                  </div> 
                  <img src="{{ asset('img/portfolio/thumb-05.jpg') }}" alt="" title="Portfolio Image 4" />
                </a>	
              </div>
          </div>
       </div>
    </section>
    
    <!-- Section 5 -->    
    <section class="section background-white text-center">
      <div class="line">
        <h2 class="text-size-50 text-center">Testimonials</h2>
        <hr class="break-small background-primary break-center">
        <div class="carousel-default owl-carousel carousel-wide-arrows">
          <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
              <img class="image-testimonial-small" src="img/testimonials-04.png" alt="">
              <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
              <p class="h1 text-size-16">Scott Star / CEO / Company</p>
            </div>
          </div>
          <div class="item"> 
            <div class="s-12 m-12 l-7 center text-center">
              <img class="image-testimonial-small" src="img/testimonials-05.png" alt="">
              <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
              <p class="h1 text-size-16">Mark Stoner / Web Developer / Company</h5>
            </div>
          </div>
          <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
              <img class="image-testimonial-small" src="img/testimonials-06.png" alt="">
              <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
              <p class="h1 text-size-16">Jane Naismith / Web Designer / Company</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection