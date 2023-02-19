<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{  $title }}</title>
    @include('layouts.css')
    <style>
      @media (max-width: 400px) {
        #portada {
            background-image: url(dash/images/cios/pexels-andrea-piacquadio-789822_mobile.jpg) !important;
            background-attachment: unset;
        }
      }
      .post-minimal-date1 {
          font-size: 15px;
          line-height: 17px;
          color: rgba(0, 0, 0, 0.5);
      }
    </style>
  </head>
  <body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="dash/images/cios/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      @include('layouts.header')
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner">
        <div class="main-bunner-img" style="background-image: url(&quot;dash/images/bg-bunner-1.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="row row-50 justify-content-lg-between align-items-lg-center">
              <div class="col-lg-2 order-lg-2 text-center text-lg-right mr-xl-2">
                <!--  
                <div class="block-video-button"><a href="https://youtu.be/NLOkpy6OOnM" data-lightgallery="item"><span class="icon fa-play icon-md"></span></a></div>
                -->
              </div>
              <div class="col-lg-9 col-xl-8 order-lg-1">
                <h5 class="bunner-location"><span class="icon mdi mdi-map-marker icon-secondary"></span><a class="text-opacity-80" href="#"></a>Ciudad de México, <span id="date_now"></span></h5>
                <h1 style="text-transform: none;">Partners CIO's LATAM</h1>
                <div class="countdown-gradient">
                  <div class="countdown" data-type="until" data-time="17 Aug 2020 16:00" data-format="dhms"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
            <h3>Registro de Partners</h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-centered">
                <div class="form-wrap">
                  <input class="form-input" id="usuario" type="text" name="usuario">
                  <label class="form-label" for="usuario">Usuario *</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="nom_contacto" type="text" name="nom_contacto">
                  <label class="form-label" for="nom_contacto">Nombre Contacto Principal *</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="ap_contacto" type="text" name="ap_contacto">
                  <label class="form-label" for="ap_contacto">Apellido Contacto Principal *</label>
                </div>  
                <div class="form-wrap">
                  <input class="form-input" id="num_contacto" type="text" name="num_contacto">
                  <label class="form-label" for="num_contacto">Número de Contacto Principal *</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="num_sec" type="text" name="num_sec">
                  <label class="form-label" for="num_sec">Número Secundario de Contacto *</label>
                </div>    
                <div class="form-wrap">
                  <input class="form-input" id="correo_empresarial" type="mail" name="correo_empresarial">
                  <label class="form-label" for="correo_empresarial">Correo Electrónico Empresarial *</label>
                </div>                                
                <div class="form-wrap">
                  <input class="form-input" id="password" type="password" name="password">
                  <label class="form-label" for="password">Contraseña de Acceso *</label>
                </div>  
                <div class="form-wrap">
                  <input class="form-input" id="password2" type="password" name="password2">
                  <label class="form-label" for="password2">Confirmar Contraseña *</label>
                </div>      
                <div class="form-wrap">
                  <input class="form-input" id="nom_empresa" type="password" name="nom_empresa">
                  <label class="form-label" for="nom_empresa">Nombre de la Empresa *</label>
                </div> 
                <div class="form-wrap">
                  <input class="form-input" id="Website" type="text" name="Website">
                  <label class="form-label" for="Website">Website *</label>
                </div>  
                
                <div class="row row-20 row-gutters-14">
                  <div class="col-sm-4">
                    <button class="button button-block button-gradient button-lg" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
     
      <!-- Sidebar -->
      @include('layouts.footer')
      <!-- End of Sidebar -->
    </div>
    <div class="snackbars" id="form-output-global"></div>
    @extends('layouts.js')
  </body>
</html>