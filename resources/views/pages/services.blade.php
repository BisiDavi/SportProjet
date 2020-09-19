@extends('layouts.layout')

@section('title')
  Our Services
@endsection

@section('link')
  <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection


@section('content')
  <section class="services mt-0">
    <marquee class="marquee-text" direction="right">We offer all round consultancy services in sports and sports related
      matters.
    </marquee>
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="service-1 col-md-4 col-sm-3 d-flex d-sm-none d-md-block align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/malefitness.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">HEALTH, WELLNESS AND FITNESS CAMPAIGN</a></h5>
              <ul class="card-text">
                <li>Dish out strategies that can help improve quality of life for people of various
                  ages and abilities.</li>
                <li>Bring light to topics such as athletic injury management,
                  sport and exercise
                  psychology, anatomy, biomechanics, wellness management strategies and many more.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="service-2 col-md-4 col-sm-3 d-flex d-sm-none d-md-block align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/femalefitness.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">ACADEMY / TRAINING</a></h5>
              <ul class="card-text">
                <li>We have set up a professional and sustainable training platform where
                  sportsperson of all ages and levels will have the chance to attain their full
                  potential under the tutelage of passionate, disciplined and certified training
                  crew.</li>
                <li>Our clients/athletes acquire individually streamed training
                  programs and
                  sessions that are designed uniquely to enhance their talents, while developing
                  the skills and techniques of the athlete, group or team across a wide range of
                  sporting disciplines.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="service-3 col-md-4 col-sm-3 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/football.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">SPORT FESTIVALS / TALENT HUNT SHOWS</a></h5>
              <ul class="card-text">
                <li>Several unique sport festivals are to be organized for various sports, age, sex,
                  regions of the country. These festivals come with our own unique concept and
                  programs.</li>
                <li>We have a sustainable template that we follow which ensures
                  ha the ultimate goal
                  of the festival is achieved. We partner with lots of organizations, firms, and
                  individuals etc. to ensure that each festival is a huge success</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="service-4 col-md-4 col-sm-3 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/banner2.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">ATHLETE MANAGEMENT</a></h5>
              <ul class="card-text">
                <li>This is what makes De skyballers international exceptional; we have set up a
                  beautiful and dynamic system that consists of seasoned and passionate
                  professionals that carries out standard and productive athlete management.</li>
                <li>Our team ensures that every athlete grows not just in
                  skills but in value. We
                  make all the moves, create the required environment, partnerships and attract
                  the best of deals to our athletes. We manage each athlete to stand out as a
                  personal brand that is sell-able anywhere in the world.</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="service5" class="service-5 col-md-4 col-sm-3 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/banner2.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">SALES AND SUPPLY OF SPORTS MATERIALS</a></h5>
              <ul class="card-text">
                <li>We cover the whole ground in supply and sales of all types of sports materials.
                  We place premium on quality over quantity, we go for the best and that sets us
                  apart. We deliver to our clients even in bulk quantities.</li>
                <li>We of course, partner with the best brands in the world to
                  deliver on quality
                  sport materials.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="service-6 col-md-4 col-sm-3 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/banner2.jpg" width="100%" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">BOOT CAMPS/LIFESTYLE</a></h5>
              <ul class="card-text">
                <li>We believe in the power of influence, networks, and collaborations; hence, we
                  organize boot camps cities to create a sweet-sweet environment for athletes to
                  be influenced positively, network with big stars in the industry and collaborate
                  effectively to grow.</li>
                <li>Our Lifestyle project is exceptional and plays a key role
                  in the development
                  process. Celebrities, stars, big wigs in sports administration within the
                  country and beyond are all part this initiative.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
