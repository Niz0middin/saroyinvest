@extends('headfooter')
@section('content')

        <aside style="margin-top: 100px;" id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(img/c1.jpg)">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-md-pull-0 slider-text">
                                    <div class="slider-text-inner"><h1><strong>White House</strong></h1>
                                        <h2>"Saroy Invest" в реальности предлагаем Вам сказочные квартиры от ЖК "WHITE HOUSE" где вы сможете себя чувствовать уютно, комфортно, надёжно и незабываемо! Позвольте себе окунуться в сказочную атмосферу</h2>
                                        <p><a class="btn btn-primary btn-lg" href="wh">Подробнее</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/x.jpg)">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner"><h1><strong>Xamza</strong></h1>
                                        <h2>Наш 4-й по счёту жилой комплекс "ХАМЗА" Аккуратное построения комплекса с одним подъездом и охраняемой территорией. Пяти этажный комплекс включающий в себя индивидуальный Итальянский котёл "Fondital". А так же большой комфортный лифт!</h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="xamza">Подробнее</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/a2.jpg)">
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
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="algoritmnew">Подробнее</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/m4.jpg)">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1><strong>Mevazor</strong></h1>
                                        <h2>Великолепный ЖК "MEVAZOR" наш первый проект в котором наши Дорогие Клиенты нашли свой уютный уголок
Красивая атмостфера и дружные соседи добавляют яркие краски в нашу жизнь! 
А так же, можем поделиться свежими фотографиями нашего дома ЖК "MEVAZOR"
"Saroy Invest" квартиры Вашей мечты!</h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="mevazor">Подробнее</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-services">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading"><h2>ПРЕИМУЩЕСТВА</h2>
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
                        <div class="services"><span class="icon"><i class="fa fa-building-o"></i></span><div id="objects"></div>
                            <div class="desc">
                                <h3 style="color: orange;">Сейсмоустойчивость</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-doctor" class="fh5co-bg-section">
            <div class="container-fluid" style="width: 90%;">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading"><h2>Объекты</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box text-center abc">
                        <div class="doctor">
                            <div class="abd">
                                <div class="staff-img" style="background-image: url(img/wh/1.jpg)">
                                    <ul class="fh5co-social">
                                        <li>
                                            <div style="background-color: orange; border-radius: 2px;"><h5 style="padding:5px !important; color: white">ИДУТ ПРОДАЖИ</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="wh">White House</a></h3>
                            <p><a class="btn btn-primary" href="wh">Узнать больше</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box text-center abc">
                        <div class="doctor">
                            <div class="abd">
                                <div class="staff-img" style="background-image: url(img/x/1.jpg)">
                                    <ul class="fh5co-social">
                                        <li>
                                            <div style="background-color: orange; border-radius: 2px;"><h5 style="padding:5px !important; color: white">ИДУТ ПРОДАЖИ</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="xamza">Xamza</a></h3>
                            <p><a class="btn btn-primary" href="xamza">Узнать больше</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box text-center abc">
                        <div class="doctor">
                            <div class="abd">
                                <div class="staff-img" style="background-image: url(img/m/2.jpg)">
                                    <ul class="fh5co-social">
                                        <li>
                                            <div style="background-color: orange; border-radius: 2px;"><h5 style="padding:5px !important; color: white">ИДУТ ПРОДАЖИ</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="mevazor">Mevazor</a></h3>
                            <p><a class="btn btn-primary" href="mevazor">Узнать больше</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box text-center abc">
                        <div class="doctor">
                            <div class="abd">
                                <div class="staff-img" style="background-image: url(img/a1/2.jpg)">
                                    <ul class="fh5co-social">
                                        <li>
                                            <div style="background-color: orange; border-radius: 2px;"><h5 style="padding:5px !important; color: white">ИДУТ ПРОДАЖИ</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="algoritm">Algoritm</a></h3>
                            <p><a class="btn btn-primary" href="algoritm">Узнать больше</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box text-center abc">
                        <div class="doctor">
                            <div class="abd">
                                <div class="staff-img" style="background-image: url(img/a2/6.jpg)">
                                    <ul class="fh5co-social">
                                        <li>
                                            <div style="background-color: orange; border-radius: 2px;"><h5 style="padding:5px !important; color: white">ИДУТ ПРОДАЖИ</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="algoritmnew">Algoritm NEW</a></h3>
                            <p><a class="btn btn-primary" href="algoritmnew">Узнать больше</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row animate-box" style="margin-top: 30px;">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Объекты на карте</h2>
            </div>
        </div>
        <div id="map2" class="mymap2 animate-box container" style="height: 600px; width: 80%; margin-top: -60px; margin-bottom: 20px;"></div>
        <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(img/d1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-group-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="329" data-speed="3000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Клиенты</span></div>
                            <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-home-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="117" data-speed="3000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Квартиры</span></div>
                            <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-user-add-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="250" data-speed="3000" data-refresh-interval="50"></span> <span class="fh5co-counter-label">Рабочие</span></div>
                            <div class="col-md-3 col-sm-6 text-center animate-box"><span class="icon"><i class="icon-point-of-interest-outline"></i></span> <span class="fh5co-counter js-counter" data-from="0" data-to="19" data-speed="3000" data-refresh-interval="50"></span> 
                            <div id="about"></div><span class="fh5co-counter-label">Партнеры</span></div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="about"></div>
        </div>
        <div id="fh5co-choose">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2 id="about"><span>О НАШЕЙ</span> КОМПАНИИ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="fh5co-video" style="background-image: url(img/c3.jpg)">
                        </div>
                    </div>
                    <div style="margin-top:20px;" class="col-md-6">
                        <div class="features"><span class="icon text-center"><i class="fa fa-gears"></i></span>
                            <div class="desc">
                                <h3>Сервис</h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                        <div class="features"><span class="icon text-center"><i class="fa fa-thumbs-o-up"></i></span>
                            <div class="desc">
                                <h3>Качество</h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                        <div class="features"><span class="icon text-center"><i class="fa fa-handshake-o"></i></span>
                            <div class="desc">
                                <h3>Доверие</h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                        <div class="features"><span class="icon text-center"><i class="fa fa-smile-o"></i></span>
                            <div class="desc">
                                <h3>Комфорт</h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-register" style="background-image: url(img/c1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="date-counter text-center">
                            <h2>Получите <strong class="color">бесплатную консультацию</strong></h2>
                            <div id="contact"></div>
                            <p><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg btn-reg">Заказать звонок</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                    <!--Modal for Telegram Send Message-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/saroy/public">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Мобильный номер:</label>
            <input type="text" maxlength="17" name="number" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Имя:</label>
            <textarea class="form-control" maxlength="40" name="name" id="message-text"></textarea>
          </div>
              <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary" name="submit">Отправить</button>
      </div>
       </form>
      </div>

 
    </div>
  </div>
</div>
<!--End of Modal-->
        </div>
        <div style="margin-top: -20px; margin-bottom: -50px;" id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="text-center fh5co-heading">
                            <h2 id="contacts">Контакты</h2>
                        </div>
                    </div>
                    <div style="margin-top: -40px;" class="col-md-7">
                        <div id="map" class="mymap" style="height: 400px; width: 100;"></div>
                    </div>
                    <div style="margin-top: 20px;" class="col-md-4 col-md-push-1">
                        <div class="fh5co-contact-info">
                            <ul>
                                <li class="address h4">Vega Center, улица Шота Руставели,
                                    <br>Ташкент, Узбекистан</li>
                                <li class="phone h4"><a href="tel://1234567920">99 400-97-77</a>
                                    <div id="news"></div>
                                </li>
                                <li class="phone h4"><a href="tel://1234567920">98 300-97-77</a>
                                    <div id="news"></div>
                                </li>
                                <!-- Right -->
                                <ul style="margin-left: -35px; margin-bottom: 20px;" id="ul1">
                                    <li>
                                        <a style="color: black" href="https://www.facebook.com/saroy.invest.39?ref=br_rs" class="nav-link" target="_blank">
              <i style="font-size: 20px;margin-left: 4px;" class="fa fa-facebook">  facebook</i>
            </a>
                                    </li>
                                    <li>
                                        <a style="color: black" href="https://t.me/saroyinvest" class="nav-link" target="_blank">
              <i style="font-size: 20px;" class="fa fa-telegram"> telegram</i>
            </a>
            <div id="new"></div>
                                    </li>
                                    <li>
                                        <a style="color: black" href="https://www.instagram.com/saroy_invest/" class="nav-link" target="_blank">
              <i style="font-size: 20px;" class="fa fa-instagram"> instagram</i>
            </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-blog">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2 id="news"><a id="nh" style="color: black" href="posts">Новости</a></h2>
                </div>
            </div>
            <div class="container-fluid">
				<div style="width: 90%; margin: auto;" class="row">
					@if(count($posts)>0)
@foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="blog-wrap">
                            <div class="row">
                                <div class="col-md-6"><a href="posts/{{$post->id}}" class="blog-img" style="background-image: url(/saroy/public/storage/cover_images/{{$post->cover_image}})"></a>
                                </div>
                                <div class="col-md-6" style="max-height: 300px; overflow: hidden;">
                                    <div class="blog-desc"><h2><a href="posts/{{$post->id}}">{{$post->title}}</a></h2>
                                        <div class="post-meta"><span>Дата:</span> <span> {{date('j.m.Y',strtotime($post->created_at))}}</span></div>
                                    <p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) >= 250 ? "..." : "" }}</p>
										
                                    </div>
                                </div>
								<p><a href="posts/{{$post->id}}" class="btn btn-primary">Подробнее</a></p>
                            </div>
                            
                        </div>
					</div>
					@endforeach
@else
<p>Нет новостей</p>
@endif
</div>
                    </div>
                    <div class="col-md-2 col-md-offset-5">
                        <div class="date-counter text-center">
                            <p><a href="posts" class="btn btn-primary1 btn-reg1">Все Новости >></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
@endsection