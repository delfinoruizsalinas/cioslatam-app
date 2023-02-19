<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{  $title }}</title>
    @include('layouts.css')
    <style>
      @media (max-width: 400px) {
        #portada {
            background-image: url(/dash/images/cios/pexels-andrea-piacquadio-789822_mobile.jpg) !important;
            background-attachment: unset;
        }
      }
    </style>
  </head>
  <body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/dash/images/cios/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
      <section class="parallax-container" data-parallax-img="/dash/images/cios/office-620817_1280.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">{{ $resumenId[0]['titulo'] }}</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="/">Inicio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="team-item-info">
                <div class="team-item-info-name">
                  <h3>{{ $resumenId[0]['titulo'] }}</h3>
                </div>
                <ul class="team-info-list">

                  <li><span class="icon mdi mdi-account"></span>{{ $resumenId[0]['nombre'] }}</li>
                  <li><span class="icon mdi mdi-phone"></span><a href="tel:#">{{ $resumenId[0]['telefono'] }}</a></li>
                  <li><span class="icon mdi mdi-email-outline"></span><a href="mailto:#">{{ $resumenId[0]['correo'] }}</a></li>
                  <li><span class="icon mdi mdi-web"></span><a href="{{ $resumenId[0]['website'] }}" target="_blank">{{ $resumenId[0]['website'] }}</a></li>
                </ul>
                <br>
                <h5>Resumen</h5>
                <p class="post-classic-meta">{{ $resumenId[0]['resumen'] }}</p>
                <br>
                <h5>Oficinas</h5>
                <p class="post-classic-meta">{{ $resumenId[0]['oficinas'] }}</p>
                <br>
                <h5>Clientes</h5>
                <p class="post-classic-meta">{{ $resumenId[0]['clientes'] }}</p>
                <br>            
                <h5>Servicios</h5>
                <p class="post-classic-meta">{{ $resumenId[0]['servicios'] }}</p>
                <br>


                <!--
                <article class="quote-primary">
                  <div class="quote-primary-body">
                    <div class="quote-primary-text">
                      <p class="q">{{ $resumenId[0]['servicios'] }}</p>
                    </div>
                  </div>
                </article>-->

              </div>
            </div>
            <div class="col-lg-4">
              <div class="block-decorate-img">
                <div class="block-decorate-inner"><img src="{{ $resumenId[0]['imagen'] }}" alt="{{ $resumenId[0]['nombre'] }}"/>
                </div>
              </div>
                <h5>Años en el mercado</h5>
                <p class="post-classic-meta">{{ $resumenId[0]['anios_mercado'] }}</p>
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