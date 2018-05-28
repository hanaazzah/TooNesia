<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Atnic">

  <title>@yield('title', config('app.name', 'TooNesia'))</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ mix('/css/inspinia.css') }}" rel="stylesheet">
  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  @stack('head')
</head>
<body id="page-top" class="landing-page no-skin-config">
    <style>
    .p-lg {
        padding: 1px;
    }
    .p-md {
        padding: 0px;
        border-width: 0 0;
    }
    .landing-page section p, a {
        color: #aeaeae;
        font-size: 13px;
        margin-top: 7px;
    }
    i {
        color: #aeaeae;
        font-size: 13px;
    }
    .tabs-container .nav-tabs>li.active>a, .tabs-container .nav-tabs>li.active>a:focus, .tabs-container .nav-tabs>li.active>a:hover, .tabs-container .panel-body {
        border: none;
    }
    .side{
        margin-bottom: 51px;
    }
    .landing-page .services {
        padding-top: 24px;
    }
    .seach-section {
        margin-bottom: 51px;
    }
    .ibox-title {
        border-width: 0 0;
    }
    </style>
     <div class="navbar-wrapper">
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
               <div class="container">
                    <div class="navbar-header page-scroll">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="/">TooNesia</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                         <ul class="nav navbar-nav navbar-right">
                              <li><a class="page-scroll" href="/login">Masuk</a></li>
                              <li><a class="page-scroll" href="/register">Daftar</a></li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>
     <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
               <div class="item active">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1>Judul Komik</h1>
                         </div>
                    </div>
                    <!-- Set background for slide in css -->
                    <div class="header-back one"></div>

               </div>
          </div>
     </div>

     <section id="features" class="container services">
          <div class="row">
               <div class="col-sm-9">
                   <div class="ibox float-e-margins">
                       <div class="ibox-title">
                           <h5>Judul Komik</h5>
                       </div>
                       <div class="ibox-content">
                           <figure>
                               <iframe src="http://www.youtube.com/embed/bwj2s_5e12U" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353" style="width: 100%; height: 100%;"></iframe>
                           </figure>
                       </div>
                   </div>
                </div>
               <div class="col-sm-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Season</h5>
                        </div>
                        <div class="ibox-content text-left p-md">
                            <div class="m-t-md side">
                                <div class="p-lg">
                                    <a href=""><img class="img-responsive img-shadow" src="http://via.placeholder.com/350x240" alt=""></a>
                                </div>
                                <p><a href="#"><strong>Season - Episode</strong></a></p>
                                <p><a href="#">Tanggal Update</a></p>
                                <i class="fa fa-eye"> 200.000</i>
                                <i class="fa fa-heart"> 200</i>
                                <i class="fa fa-comment"> 56766</i>
                            </div>

                            <div class="m-t-md side">
                                <div class="p-lg">
                                    <a href=""><img class="img-responsive img-shadow" src="http://via.placeholder.com/350x240" alt=""></a>
                                </div>
                                <p><a href="#"><strong>Season - Episode</strong></a></p>
                                <p><a href="#">Tanggal Update</a></p>
                                <i class="fa fa-eye"> 200.000</i>
                                <i class="fa fa-heart"> 200</i>
                                <i class="fa fa-comment"> 56766</i>
                            </div>

                            <div class="m-t-md side">
                                <div class="p-lg">
                                    <a href=""><img class="img-responsive img-shadow" src="http://via.placeholder.com/350x240" alt=""></a>
                                </div>
                                <p><a href="#"><strong>Season - Episode</strong></a></p>
                                <p><a href="#">Tanggal Update</a></p>
                                <i class="fa fa-eye"> 200.000</i>
                                <i class="fa fa-heart"> 200</i>
                                <i class="fa fa-comment"> 56766</i>
                            </div>

                            <div class="m-t-md side">
                                <div class="p-lg">
                                    <a href=""><img class="img-responsive img-shadow" src="http://via.placeholder.com/350x240" alt=""></a>
                                </div>
                                <p><a href="#"><strong>Season - Episode</strong></a></p>
                                <p><a href="#">Tanggal Update</a></p>
                                <i class="fa fa-eye"> 200.000</i>
                                <i class="fa fa-heart"> 200</i>
                                <i class="fa fa-comment"> 56766</i>
                            </div>

                        </div>
                    </div>
                </div>
          </div>
     </section>

    <section id="contact" class="gray-section contact">
         <div class="container">
              <div class="row">
                   <div class="col-lg-12 text-right m-t-lg m-b-lg">
                        <p><strong>TooNesia &copy; Hana Azzah Nur Arifah 2018</strong></p>
                   </div>
              </div>
         </div>
    </section>
@yield('content')

@section('scripts')
<!-- Mainly scripts -->
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/jquery-3.1.1.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/bootstrap.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/inspinia.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/plugins/pace/pace.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.7.1/js/plugins/wow/wow.min.js"></script>

@show
@stack('body')
<script type="text/javascript">


$(function() {

     $('body').addClass('landing-page');
     $('body').attr('id', 'page-top');

     $('body').scrollspy({
          target: '.navbar-fixed-top',
          offset: 80
     });

     // Page scrolling feature
     $('a.page-scroll').bind('click', function(event) {
          var link = $(this);
          $('html, body').stop().animate({
               scrollTop: $(link.attr('href')).offset().top - 50
          }, 500);
          event.preventDefault();
          $("#navbar").collapse('hide');
     });

     var cbpAnimatedHeader = (function() {
          var docElem = document.documentElement,
          header = document.querySelector( '.navbar-default' ),
          didScroll = false,
          changeHeaderOn = 200;
          function init() {
               window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                         didScroll = true;
                         setTimeout( scrollPage, 250 );
                    }
               }, false );
          }
          function scrollPage() {
               var sy = scrollY();
               if ( sy >= changeHeaderOn ) {
                    $(header).addClass('navbar-scroll')
               }
               else {
                    $(header).removeClass('navbar-scroll')
               }
               didScroll = false;
          }
          function scrollY() {
               return window.pageYOffset || docElem.scrollTop;
          }
          init();

     })();


     // Activate WOW.js plugin for animation on scrol
     new WOW().init();


});

</script>
</body>
</html>
