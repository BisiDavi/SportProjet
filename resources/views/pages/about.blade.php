@extends('layouts.layout')

@section('title')
  About us
@endsection

@section('link')
  <script src="assets/js/accordion.js"></script>
  <link rel="stylesheet" href="assets/css/aboutaccordion.css">
  <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('content')

  <div class="aboutus">
    <div class="container-fluid">
      <div class="row about-banner">
        <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">
        <h1 class="text-center">About De Skyballers</h1>
      </div>

      <div class="container-fluid">
        <div class="row px-3 py-3">
          <div class="who-are-we">
            <div class="accordion">
              <h1 class="accordion__title">De SkyBallers</h1>
              <h2 class="accordion__items">
                Who Are We</h2>
              <div class="accordion__content">
                <h3 class="accordion__content__caption">
                  At De SkyBallers, we promote sport activities by adopting international standards
                </h3>
                <p class="accordion__content__txt">At De SkyBallers, we promote sports by setting up platforms and
                  programs that enhances the discovery and harnessing of talents across every age and region while
                  adopting international best practices We are well-organized and competitive on international stage. We
                  operates with progressive, modern standard and sustainable policies.</p>
              </div>
              {{-- <h2 class="accordion__items">Student Academy</h2>
              <div class="accordion__content">
                <h3 class="accordion__content__caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                <p class="accordion__content__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
                  repellat
                  vel et
                  neque at asperiores recusandae necessitatibus voluptatum magnam. Odio est, repellendus quas molestias
                  laborum
                  itaque perspiciatis perferendis consequuntur quidem.
                  Non ullam velit eaque accusantium nam, voluptates earum ab, placeat quaerat commodi delectus vel, magni
                  maxime
                  itaque dicta consequatur quisquam maiores nisi.</p>
              </div> --}}
              <h2 class="accordion__items">Our Vision</h2>
              <div class="accordion__content">
                <h3 class="accordion__content__caption">
                  To develop Profitable, Well-organized and competitive sport industry
                </h3>
                <p class="accordion__content__txt">To have sports industry that is profitable, well-organized and
                  competitive on international stage and
                  operates with progressive, modern standard and sustainable policies.
                </p>
              </div>
              <h2 class="accordion__items">Our Mission</h2>
              <div class="accordion__content">
                <h3 class="accordion__content__caption">Promote Sports activities across every age & region .</h3>
                <p class="accordion__content__txt">To promote sports by setting up platforms and programs that enhances
                  the
                  discovery and harnessing of
                  talents across every age and region while adopting international best practices.</p>
              </div>
              <h2 class="accordion__items">Our Core Values</h2>
              <div class="accordion__content">
                <ul class="col-md-8 col-sm-8 col-xs-12">
                  <div class="row">
                    <div class="col">
                      <li>
                        <h4>Commitment</h4>
                      </li>
                      We have the resolve to show commitment in all we set out to do; we are committed to our goals,
                      services
                      to our clients and loyalty to our vision.
                    </div>
                    <div class="col">
                      <li>
                        <h4>Dynamism</h4>
                      </li>
                      We are dynamic in all we do so that we can achieve the best result possible while maximizing
                      opportunities.
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <li>
                        <h4>Team Work</h4>
                      </li>
                      We believe in efficiency and product that can be achieved from working together, identifying
                      each
                      other’s weaknesses while acknowledging our strengths.
                    </div>
                    <div class="col">
                      <h4>
                        <li>Integrity
                      </h4>
                      </li>
                      We earn the trust and confidence of our clients and followers by maintaining high level
                      integrity.
                    </div>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
