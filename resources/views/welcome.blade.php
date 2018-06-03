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
                              <h1>TooNesia</h1>
                              <p>Semua komik hanya ada disini, kamu mau cari komik yang seru jangan cari yang lain .</p>
                              <p>
                                   <a class="btn btn-lg btn-primary" href="/register" role="button">Lihat</a>
                              </p>
                         </div>
                    </div>
                    <!-- Set background for slide in css -->
                    <div class="header-back one"></div>

               </div>
          </div>
     </div>

     <style>
    .header-back {
         height:470px;
         width:100%
    }
    .landing-page .header-back.one {
        background:image-url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcfFCoGMgcP8ThXAQIgFUQmjQLmHdUehaMtBEEBuexTDG0fU20_Q") 50% 0 no-repeat
    }
     </style>

     <section id="features" class="container services">
          <div class="row">
              <div class="seach-section">
                  <div class="col-md-9"></div>
                  <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Cari .." name="search">
                  </div>
              </div>
               <div class="col-sm-9">
                    <h3>TooNesia Hari Ini</h3>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content text-left p-md">
                            @if($comics->count() > 0)
                            @foreach($comics as $key => $value)
                            <div class="col-sm-4">
                                <div class="m-t-md">
                                    <div class="p-lg">
                                        <a href="{{ url('details') }}/{{ $value->id }}"><img class="img-responsive img-shadow" src="{{ env('APP_URL') }}/{{ str_replace('public/', '', $value->image) }}" alt=""></a>
                                    </div>
                                    <p><a href="#">{{ $value->category->name }}</a></p>
                                    <p><a href="{{ url('details') }}/{{ $value->id }}"><strong>{{ $value->title }}</strong></a></p>
                                    <i class="fa fa-eye"> 200.000</i>
                                    <i class="fa fa-heart"> 200</i>
                                    <i class="fa fa-comment"> 56766</i>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <div class="col-lg-12">

                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        @if($tab_contents->count() > 0)
                                        @foreach($tab_contents as $key => $value)
                                            @if($key == 0)
                                            <li class="active"><a data-toggle="tab" href="#tab-{{$key}}" aria-expanded="true"> {{ $value->name }}</a></li>
                                            @else
                                            <li><a data-toggle="tab" href="#tab-{{$key}}" aria-expanded="true"> {{ $value->name }}</a></li>
                                            @endif
                                        @endforeach
                                        @endif
                                    </ul>

                                    <div class="tab-content">
                                        @if($tab_contents->count() > 0)
                                        @foreach($tab_contents as $key => $value)
                                            @if($key == 0)
                                            <div id="tab-{{$key}}" class="tab-pane active">
                                            @else
                                            <div id="tab-{{$key}}" class="tab-pane">
                                            @endif
                                            <div class="panel-body">
                                                @if(count($value->comics) > 0)
                                                @foreach($value->comics as $k => $v)
                                                <div class="col-sm-3">
                                                    <div class="m-t-md">
                                                        <div class="p-lg">
                                                            <a href=""><img class="img-responsive img-shadow" src="{{ env('APP_URL') }}/{{ str_replace('public/', '', $v->image) }}" alt=""></a>
                                                        </div>
                                                        <p><a href="#">{{$value->name}}</a></p>
                                                        <p><a href="#"><strong>{{$v->title}}</strong></a></p>
                                                        <i class="fa fa-eye"> 200.000</i>
                                                        <i class="fa fa-heart"> 200</i>
                                                        <i class="fa fa-comment"> 56766</i>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-sm-3">
                    <h3>Komik Terpopuler</h3>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content text-left p-md">
                            @if($popular_comics->count() > 0)
                            @foreach($popular_comics as $key => $value)
                            <div class="m-t-md side">
                                <div class="p-lg">
                                    <a href=""><img class="img-responsive img-shadow" src="{{ env('APP_URL') }}/{{ str_replace('public/', '', $value->image) }}" alt=""></a>
                                </div>
                                <p><a href="#">{{ $value->category->name }}</a></p>
                                <p><a href="#"><strong>{{ $value->title }}</strong></a></p>
                                <i class="fa fa-eye"> 200.000</i>
                                <i class="fa fa-heart"> 200</i>
                                <i class="fa fa-comment"> 56766</i>
                            </div>
                            @endforeach
                            @endif
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
