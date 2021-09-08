@extends('Layouts.master')

@section('title', 'Accueil')


@section('content')
<div class="main">
    <h3>
        Vivre c'est aider
    </h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Tristique venenatis nunc facilisis venenatis ac proin. Viverra tincidunt maecenas vehicula 
        turpis.<br> Sagittis, massa mattis metus fames quis. Fermentum massa risus.
    </p>
    <div class="div_btn">
        <a class="btn_white" href="">
            Faire un don
        </a>
        <a class="btn_orange" href="">
            Nous contacter
        </a>
    </div>
</div>

<div class="container sect-2">
    <div class="row ">
        <div class="col-md-6 col-sm-12  ">
            <img src="{{ asset('/sta_img/galery.png') }}" alt="">
        </div>
        <div class="col-md-6 col-sm-12   list_style">
            <h3>
                Notre Mission
            </h3>
            <p class="para">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Ac ultrices scelerisque est massa gravida.
            </p>
            <ul >
                <li>
                    Eu purus at et.
                </li>
                <p class="pa-ul">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ac ultrices scelerisque est massa gravida.
                </p>
                <li>
                   Eu purus at et. 
                </li>
                <p class="pa-ul">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ac ultrices scelerisque est massa gravida.
                </p>
                <li>
                   Eu purus at et. 
                </li>
                <p class="pa-ul">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Ac ultrices scelerisque est massa gravida.
                </p>
            </ul>
        </div>
    </div>
</div>
<!-- Debut section realisations -->
<div class="conatiner " id="real">
    <h3 class="">
        Dernières Réalisations
    </h3>
    <p class="">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Ullamcorper et morbi viverra imperdiet porta amet dignissim. 
        In eu nisl ipsum non nulla nibh sed ut nec. 
    </p>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 pt-1">
                    <div class="card text" style="background-color:transparent;">
                        <img src="{{ asset('/sta_img/6.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Eget pharetra</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Sit sed nec faucibus purus.
                            </p> 
                        </div>
                    </div>    
                </div>

                <div class="col-md-4 col-sm-6 pt-1">
                    <div class="card" style="background-color:transparent;">
                        <img src="{{ asset('/sta_img/6.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">Eget pharetra</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Sit sed nec faucibus purus.
                            </p> 
                        </div>            
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 pt-1">
                    <div class="card" style="background-color:transparent;">
                        <img src="{{ asset('/sta_img/6.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Eget pharetra</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Sit sed nec faucibus purus.
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="pb-4">
        Nos Chiffres
    </h3>
    <!-- Progress Circle  -->
    <div class="container pb-4 text-center">
        <div class="row progre pb-4">
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="progress green">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">1</div>
                    <!-- <div class="progress-value">90%</div> -->
                </div>
                <h3 style="margin-top:-10px; font-weight:500; font-size:20px;">
                    Projets réalisés
                </h3>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="progress orange">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">2</div>
                    <!-- <div class="progress-value">75%</div> -->
                </div>
                <h3 style="margin-top:-10px; font-weight:500; font-size:20px;">
                    Projets en cours
                </h3>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="progress bleu">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">3</div>
                    <!-- <div class="progress-value">60%</div> -->
                </div>
                <h3 style="margin-top:-10px; font-weight:500; font-size:20px;">
                    Projets en attente
                </h3>
            </div>

            <div class="col-md-3 col-sm-12 mb-2">
                <div class="progress rouge">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">4</div>
                    <!-- <div class="progress-value">75%</div> -->
                </div>
                <h3 style="margin-top:-10px; font-weight:500; font-size:20px;">
                    Problèmes détectés
                </h3>
            </div>
        </div>
    </div>
    <!-- fin progess circle -->

</div>
<!-- Fin section realisations -->

<!-- debut ils nous font confiance -->
<div class="container-fluid pt-4 text-center">
    <h3 class="pb-3">
        Ils nous accompagnent
    </h3>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{ asset('/sta_img/part1.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part2.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part3.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part2.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part1.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part3.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part3.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part2.png') }}" alt=""  >
        </div>

        <div class="item">
            <img src="{{ asset('/sta_img/part1.png') }}" alt=""  >
        </div>
    </div>
</div>
<!-- fin ils nous font confiance -->

<!-- Debut Footer -->
<div class="container-fluid footer">

    <div class="row" style="padding-left:25px;">
        <div class="col-md-4 ">
            <img src="{{ asset('/sta_img/logo.png') }}" alt="" width="50" height="50" 
                class="d-inline-block align-text-top">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Tellus consequat arcu tellus amet semper orci, egestas morbi. Fringilla. 
            </p>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>

    <div class="row" >
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center footer-d" style="display:block; ">
            <h3>
                Aider c’est donner !
            </h3><br>
            <button>
                Faites un don
            </button>
        </div>
        <div class="col-md-4">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </div>
    </div>
    <div class="copyri">
        <p >
            COPYRIGHT - DEFARSci 2021
        </p>
    </div>

</div>
<!-- Fin Footer -->
@stop
@section('script')

<script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay: true,
            autoplayTimeout: 1000,
            stagePadding: 50,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
</script>
@stop
