@extends('headfooter')
@section('content')
<aside style="margin-top: 100px;" id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            <li id="lili" style="background-image: url(img/a2.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner"><h1><strong>Algoritm</strong></h1>
                                <h2>"ALGORITM" это не просто жилой комплекс!
Это Ваш уголок рая! Где можете найти и построить своё счастье.....
Где всегда уют и комфорт.....
Современно и красиво.....
Развитая инфраструктура....
"Saroy Invest" мы заботимся о Вас....</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="#fh5co-services">ОБ ОБЪЕКТЕ</a></p>
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
                <div class="services"><span class="icon"><i class="fa fa-child"></i></span>
                    <div class="desc">
                        <h3 style="color: orange;">Детская площадка</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services"><span class="icon"><i class="fa fa-columns"></i></span>
                    <div class="desc">
                        <h3 style="color: orange;">Окна Engelberg</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(img/a1/3.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-clock-o""></i></span> <span class="fh5co-counter js-counter" data-from="2000" data-to="2017" data-speed="1000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Год постройки</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-home-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="32" data-speed="1000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Количество квартир</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-square-o"></i></span> <span class="fh5co-counter" style="font-size: 30px; line-height: 1.4">от 95 до 224 m2</span> <span class="fh5co-counter-label">Площадь квартири</span></div>
                    <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="fa fa-map-o"></i></span> <span class="fh5co-counter" style="font-size: 23px; line-height: 1.8">150, Shota Rustaveli, Tashkent</span> <span class="fh5co-counter-label">Адрес</span></div>
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
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/a1/1.jpg)" onclick="openModal();currentSlide(1)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/a1/2.jpg)" onclick="openModal();currentSlide(2)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/a1/3.jpg)" onclick="openModal();currentSlide(3)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/a1/4.jpg)" onclick="openModal();currentSlide(4)"></a></div>
        <div class="col-md-3 col-padded"><a href="#" class="gallery" style="background-image: url(img/a1/5.png)" onclick="openModal();currentSlide(5)"></a></div>
    </div>
    <div id="myModal" class="modal">
        <a href="#fh5co-gallery">
<span class="close cursor" onclick="closeModal()">&times;</span>
</a>
        <div class="modal-content">
            <div class="mySlides">
                <div class="numbertext">1 / 5</div>
                <img src="img/a1/1.jpg" style="width:100%">
</div>
                <div class="mySlides">
                    <div class="numbertext">2 / 5</div>
                    <img src="img/a1/2.jpg" style="width:100%">
</div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 5</div>
                        <img src="img/a1/3.jpg" style="width:100%">
</div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 5</div>
                            <img src="img/a1/4.jpg" style="width:100%">
</div>
                            <div class="mySlides">
                                <div class="numbertext">5 / 5</div>
                                <img src="img/a1/5.png" style="width:100%">
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