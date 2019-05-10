<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saroy Invest</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"><!-- Animate.css -->
    <link rel="stylesheet" href="{!!asset('css/animate.css')!!}"><!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{!!asset('css/animate.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/icomoon.css')!!}"><!-- Bootstrap  -->
    <link rel="stylesheet" href="{!!asset('css/bootstrap.css')!!}"><!-- Magnific Popup -->
    <link rel="stylesheet" href="{!!asset('css/magnific-popup.css')!!}"><!-- Owl Carousel  -->
    <link rel="stylesheet" href="{!!asset('css/owl.carousel.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/owl.theme.default.min.css')!!}"><!-- Flexslider  -->
    <link rel="stylesheet" href="{!!asset('css/flexslider.css')!!}"><!-- Pricing -->
    <link rel="stylesheet" href="{!!asset('css/pricing.css')!!}"><!-- Theme style  -->
    <link rel="stylesheet" href="{!!asset('css/style.css')!!}"><!-- Modernizr JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{!!asset('js/modernizr-2.6.2.min.js')!!}"></script><!-- FOR IE9 below -->
</head>
<body id="123">
    <div id="page">
        <nav style="position:fixed;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right soc">
                            <p class="loc"><i class="icon-location4"></i> Vega Center, ул. Шота Руставели,Ташкент</p>
                            <p class="num">Tel: <span>99 400-97-77</span></p>
                            <ul class="fh5co-social">
                                <li><a href="https://www.facebook.com/saroy.invest.39?ref=br_rs"><i class="icon-facebook2"></i></a></li>
                                <li><a href="https://t.me/saroyinvest"><i class="icon-telegram"></i></a></li>
                                <li><a href="https://www.instagram.com/saroy_invest/"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="/saroy/public"><img src="{!!asset('img/logo.png')!!}" style="min-width: 100px;max-width:120px"></a></div>
                        </div>
                        <div class="col-xs-9 text-right menu-1">
                            <ul>
                                <li class="has-dropdown"><a style="padding-bottom: 20px;" href="/saroy/public/#fh5co-doctor">ОБЪЕКТЫ</a>
                                    <ul class="dropdown">
                                        <li><a href="wh">White House</a></li>
                                        <li><a href="algoritm">Algoritm</a></li>
                                        <li><a href="algoritmnew">Algoritm NEW</a></li>
                                        <li><a href="mevazor">Mevazor</a></li>
                                        <li><a href="xamza">Xamza</a></li>
                                    </ul>
                                </li>
                                <li><a href="/saroy/public/#fh5co-choose">О КОМПАНИИ</a></li>
                                <li><a href="/saroy/public/#fh5co-contact">КОНТАКТЫ</a></li>
                                <li><a href="/saroy/public/posts">НОВОСТИ</a>
                                </li>
                                                                                <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/saroy/public/posts/create"><small>Создать Hовость</small></a>
                                        <br>
                                        <a class="dropdown-item" href="/saroy/public/dashboard"><small>Список Hовостей</small></a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <small>Выйти</small>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            </ul>

                        </div>
                        <div id="main" style="z-index:1000; margin-left: 90%;">
                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
         <div style="z-index: 10000000;" id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/saroy/public/#objects" onclick="closeNav()">ОБЪЕКТЫ</a>
            <a href="wh" onclick="closeNav()"><small>White House</small></a>
            <a href="algoritm1" onclick="closeNav()"><small>Algoritm</small></a>
            <a href="algoritm2" onclick="closeNav()"><small>Algoritm NEW</small></a>
            <a href="mevazor" onclick="closeNav()"><small>Mevazor</small></a>
            <a href="xamza" onclick="closeNav()"><small>Xamza</small></a>
            <a href="/saroy/public/#about" onclick="closeNav()">О КОМПАНИИ</a>
            <a href="/saroy/public/#contact" onclick="closeNav()">КОНТАКТЫ</a>
            <a href="/saroy/public/posts" onclick="closeNav()">НОВОСТИ</a>
         </div>
         <div style="margin-top:100px"></div>
            @include('inc.messages')
            @yield('content')

        </div>

    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(img/d2.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget"><h2 class="logo">Saroy Invest.</h2>
                    <p>Строй будущее вместе с нами!</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget"><h3>Разделы</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="/saroy/public/index#fh5co-choose">О КОМПАНИИ</a></li>
                        <li><a href="#fh5co-contact">КОНТАКТЫ</a></li>
                        <li><a href="#fh5co-blog">НОВОСТИ</a>
                        <li><a href="#fh5co-doctor">ОБЪЕКТЫ</a>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget"><h3>Объекты</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="wh">White House</a></li>
                        <li><a href="algoritm">Algoritm</a></li>
                        <li><a href="algoritmnew">Algoritm NEW</a></li>
                        <li><a href="mevazor">Mevazor</a></li>
                        <li><a href="xamza">Xamza</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget"><h3>Мы в социальных сетях</h3>
                    <ul style="margin-left: -35px; margin-bottom: 20px;" id="ul1">
                        <li>
                            <a href="https://www.facebook.com/saroy.invest.39?ref=br_rs" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i> Facebook
            </a>
                        </li>
                        <li>
                            <a href="https://t.me/saroyinvest" class="nav-link" target="_blank">
              <i class="fa fa-telegram"></i> Telegram
            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/saroy_invest/" class="nav-link" target="_blank">
              <i class="fa fa-instagram"></i> Instagram
            </a>
                        </li>
                        <br>
                        <li>
                            <a>
              <i class="fa fa-phone"> 99 400-97-77</i>
          </a>
                        </li>
                        <li><a>
              <i class="fa fa-phone"> 98 300-97-77</i>
          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row copyright" style="margin-right: 0!important">
            <div class="col-md-12 text-center">
                <p><small class="block">&copy; 2018 Saroy Invest. All Rights Reserved.</small> <small class="block">Designed by <a href="#" target="_blank">Web Art Studio</a></small></p>
            </div>
        </div>
    </footer>
    <div style="right: 90px!important;bottom:3.7%!important" class="gototop js-top"><a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a></div><!-- jQuery -->
    <script src="{!!asset('js/jquery.min.js')!!}"></script><!-- jQuery Easing -->
    <script src="{!!asset('js/jquery.easing.1.3.js')!!}"></script><!-- Bootstrap -->
    <script src="{!!asset('js/bootstrap.min.js')!!}"></script><!-- Waypoints -->
    <script src="{!!asset('js/jquery.waypoints.min.js')!!}"></script><!-- Validate -->
    <script src="{!!asset('js/jquery.validate.min.js')!!}"></script><!-- Stellar Parallax -->
    <script src="{!!asset('js/jquery.stellar.min.js')!!}"></script><!-- Carousel -->
    <script src="{!!asset('js/owl.carousel.min.js')!!}"></script><!-- Flexslider -->
    <script src="{!!asset('js/jquery.flexslider-min.js')!!}"></script><!-- countTo -->
    <script src="{!!asset('js/jquery.countTo.js')!!}"></script><!-- Magnific Popup -->
    <script src="{!!asset('js/jquery.magnific-popup.min.js')!!}"></script>
    <script src="{!!asset('js/magnific-popup-options.js')!!}"></script><!-- Sticky Kit -->
    <script src="{!!asset('js/sticky-kit.min.js')!!}"></script><!-- Main -->
    <script src="{!!asset('js/main.js')!!}"></script><!-- For demo purposes Only ( You may delete this anytime ) -->
    <script src="{!!asset('js/jquery.style.switcher.min.js')!!}"></script>
    <script src="{!!asset('https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript')!!}"></script>
    <script src="{!!asset('js/map.js')!!}"></script>
    <script src="{!!asset('js/sidenav.js')!!}"></script>
    <script src="{!!asset('js/gallery.js')!!}"></script>
    <script src="{!!asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')!!}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script>
            window.replainSettings = { id: 'f7c2db63-6945-48df-b74b-0f0c6ea35cee' };
            (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
            var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
            })('https://widget.replain.cc/dist/client.js')!!}');
            </script>
                <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Заказать звонок ')
  modal.find('.modal-body input').val(recipient)
})
    </script>
</body>
</html>
