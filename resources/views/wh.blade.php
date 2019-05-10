@extends('headfooter')
@section('content')
<aside style="margin-top: 100px;" id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            <li id="lili" style="background-image: url(img/c1.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-md-pull-1 slider-text">
                            <div class="slider-text-inner"><h1><strong>White House</strong></h1>
                                <h2>"Saroy Invest" в реальности предлагаем Вам сказочные квартиры от ЖК "WHITE HOUSE" где вы сможете себя чувствовать уютно, комфортно, надёжно и незабываемо! Позвольте себе окунуться в сказочную атмосферу</h2>
                                <p><a class="btn btn-primary btn-lg" href="#fh5co-services">ОБ ОБЪЕКТЕ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div style="margin-top: 80px;" id="fh5co-services">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2><span>ОБ </span>ОБЪЕКТЕ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services"><span class="icon"><i class="fa fa-car"></i></span>
                    <div class="desc">
                        <h3 style="color: orange;">Удобная парковка</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services"><span class="icon"><i class="fa fa-shield"></i></span>
                    <div class="desc">
                        <h3 style="color: orange;">Безопасность</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services"><span class="icon"><i class="fa fa-building-o"></i></span>
                    <div class="desc">
                        <h3 style="color: orange;">Сейсмоустойчивость</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(img/m/3.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-clock-o""></i></span> <span class="fh5co-counter js-counter" data-from="2000" data-to="2018" data-speed="1000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Год постройки</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-home-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="44" data-speed="1000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Количество квартир</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-square-o"></i></span> <span class="fh5co-counter" style="font-size: 30px; line-height: 1.4">от 105 до 245 m2</span> <span class="fh5co-counter-label">Площадь квартири</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-map-o"></i></span> <span class="fh5co-counter" style="font-size: 23px; line-height: 1.8">40, Shota Rustaveli, Tashkent</span> <span class="fh5co-counter-label">Адрес</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-gallery" class="fh5co-bg-section">
    <div class="row text-center">
        <h2><span>Галерея</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/1.jpg)" onclick="openModal();currentSlide(1)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/2.jpg)" onclick="openModal();currentSlide(2)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/3.jpg)" onclick="openModal();currentSlide(3)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/4.jpg)" onclick="openModal();currentSlide(4)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/5.jpg)" onclick="openModal();currentSlide(5)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/6.jpg)" onclick="openModal();currentSlide(1)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/7.jpg)" onclick="openModal();currentSlide(2)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/8.jpg)" onclick="openModal();currentSlide(3)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/9.jpg)" onclick="openModal();currentSlide(4)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/10.jpg)" onclick="openModal();currentSlide(5)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/11.jpg)" onclick="openModal();currentSlide(4)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/wh/12.jpg)" onclick="openModal();currentSlide(5)"></a></div>
    </div>
    <div id="myModal" class="modal">
        <a href="#fh5co-gallery">
<span class="close cursor" onclick="closeModal()">&times;</span>
</a>
        <div class="modal-content">
            <div class="mySlides">
                <div class="numbertext">1 / 12</div>
                <img src="img/wh/1.jpg" style="width:100%">
</div>
                <div class="mySlides">
                    <div class="numbertext">2 / 12</div>
                    <img src="img/wh/2.jpg" style="width:100%">
</div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 12</div>
                        <img src="img/wh/3.jpg" style="width:100%">
</div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 12</div>
                            <img src="img/wh/4.jpg" style="width:100%">
</div>
                            <div class="mySlides">
                                <div class="numbertext">5 / 12</div>
                                <img src="img/wh/5.jpg" style="width:100%">
</div>
                                <div class="mySlides">
                                    <div class="numbertext">6 / 12</div>
                                    <img src="img/wh/1.jpg" style="width:100%">
</div>
                                    <div class="mySlides">
                                        <div class="numbertext">7 / 12</div>
                                        <img src="img/wh/2.jpg" style="width:100%">
</div>
                                        <div class="mySlides">
                                            <div class="numbertext">8 / 12</div>
                                            <img src="img/wh/3.jpg" style="width:100%">
</div>
                                            <div class="mySlides">
                                                <div class="numbertext">9 / 12</div>
                                                <img src="img/wh/4.jpg" style="width:100%">
</div>
                                                <div class="mySlides">
                                                    <div class="numbertext">10 / 12</div>
                                                    <img src="img/wh/5.jpg" style="width:100%">
</div>
                                                    <div class="mySlides">
                                                        <div class="numbertext">11 / 12</div>
                                                        <img src="img/wh/4.jpg" style="width:100%">
</div>
                                                        <div class="mySlides">
                                                            <div class="numbertext">12 / 12</div>
                                                            <img src="img/wh/5.jpg" style="width:100%">
</div>
                                                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                                            <div class="caption-container">
                                                                <p id="caption"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
@endsection