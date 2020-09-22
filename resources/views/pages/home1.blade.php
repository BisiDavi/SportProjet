@extends('layouts.layout')

@section('title')
  Home
@endsection

@section('link')
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/home-slider.css">
  <link rel="stylesheet" href="assets/css/preloader.css">
  <link rel="stylesheet" href="assets/css/eventslider.css">
@endsection

@section('content')

  @include('partials.homeslider')

  <section class="container-fluid" id="main">
    <div class="row about-academy" id="about-academy">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="section-title">
          <h3 class="text-center pb-3">About De SkyBallers</h3>
        </div>
        <div class="about-us-image d-flex">
          <div class="abt">
            <img class="img-background" src="{{ asset('assets/img/Rectangle 16.png') }}">
            <img class="volleyball" src="{{ asset('assets/img/about 1.png') }}">
          </div>
          <div class="academy-text">
            <p>
              At De SkyBallers, we promote sports by setting up platforms and programs that enhances the
              discovery and
              harnessing of talents across every age and region while adopting international best practices
            </p>

            <p class="d-none d-lg-block">
              We are well-organized and competitive on international stage.
              We operates with progressive, modern standard and sustainable policies.</p>

            <button class="btn" type="button" href="/about"
              style="color:white;background: #7F2AA7;border: 1px solid #7F2AA7;box-sizing: border-box;">Read
              More</button>
          </div>
        </div>

        <div class="section-title text-center">
          <h3 class="text-center">Upcoming Events</h3>
        </div>
        <div class="events container">
          <div class="row d-flex mx-auto">           
            @include('partials.eventslider')
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blogpost d-none .d-sm-block d-sm-none d-md-block">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded blog-aside">
          <div class="section-title">
            <h3 class="text-center">Blog</h3>
          </div>
          @foreach ($posts as $post)
            <div id="blogcontent" class="row">
              <div class="blog-post">
                <img class="rounded img-fluid" src="storage/{{ $post->post_image }}" />
                <div class="posttitle">
                  <p>
                   <a href="/blog">
                     {{ $post->title }}
                    </a>
                  </p>
                </div>
                <div class="postlink">
                  <a href="/blog">
                    <i class="icofont-arrow-right float-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>    
    </div>    
  </section>


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container-fluid">
      <div class="section-title">
        <h3 class="text-center p-2">Services</h3>
        <h4 class="text-center">CONSULTANCY SERVICES</h4>
        <p class="text-center">We offer all round consultancy services in sports and sports related matters.
        </p>
      </div>

      <div class="row servicesrow">
        <div class="container-fluid">
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
                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
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
                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
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

                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
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

                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-5 col-md-4 col-sm-3 d-flex align-items-stretch">
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

                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
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

                  </ul>
                  <div class="read-more"><a href="/services"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->


  {{-- <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h3 class="text-center mb-5 p-2">Partners</h3>
      </div>
      <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
        <img width="100px" src="{{ asset('assets/img/fifa.png') }}" alt="">
        <img width="100px" src="{{ asset('assets/img/lagos') }}" alt="">
        <img width="100px" src="{{ asset('assets/img/fifa.png') }}" alt="">
        <img width="100px" src="{{ asset('assets/img/lagos.png') }}" alt="">
        <img width="100px" src="{{ asset('assets/img/fifa.png') }}" alt="">
      </div>
    </div>
  </section> --}}
  <!-- End Clients Section -->
  </div>
@endsection
