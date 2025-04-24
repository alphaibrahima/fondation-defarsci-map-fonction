<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Fondation Defar Sci - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ3Yt8Ahkf94iOGLl94m24f4k62uUxcIc&callback=initMap">
    </script> --}}
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('/sta_img/favicon.ico') }}" type="image/x-icon">
    <!-- fin owl -->
    <!-- fontAwsome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <!-- fontAwsome -->
    <link rel="stylesheet" href="{{asset('css/icomoon/style.css')}}">
    <link rel="stylesheet" href=" {{asset('css/style2.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/menu.css')}} ">
    

    @yield('style')
</head>
<body>
{{-- Header --}}
    <div class="site-mobile-menu ">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar " role="banner">

      <div class="container ">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Brand</a></h1> --}}
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('/sta_img/logo.svg') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
              {{-- Defar Sci Fondation --}}
            </a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class=""><a href="{{ url('/') }}"><span>Accueil</span></a></li>
                <li><a href="{{ url('/livemap') }}"><span>Map</span></a></li>
                <li><a href="{{ url('/projetlistes') }}"><span>Projet</span></a></li>
                <li><a href="{{ route('problemes.create') }}"><span>Declaration</span></a></li>
                <li><a href="{{ url('/qui-somme-nous') }}"><span>Qui somme nous ?</span></a></li>
                <li><a href="{{ url('/projetlisteContribuez') }}"><span>Contribuez !</span></a></li>
                <li><a href="{{ url('/admin') }}"><span>Administration</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" >
            <a href="#" class="site-menu-toggle js-menu-toggle text-white" >
              <span class="icon-menu h3" style="color: #FF6600"></span>
            </a>
          </div>

          </div>

        </div>
      </div>
      
    </header>
{{-- Header --}}




    {{-- <div class="container-fluid "> --}}
        @yield('content')
    {{-- </div> --}}

    
    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
      <!-- owlcarrousel -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="{{asset('js/jquery.sticky.js')}}"></script>
      <script src="{{asset('js/map.js')}}"></script>
      <script src="{{asset('js/main1.js')}}"></script>
 
      @yield('script')
      
 
    {{-- Fin Script --}}
</body>
</html>