@extends('layout')

@section('title')
  About us
@endsection

@section('link')
  <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('content')
  <div class="container-fluid">

    <div class="row about-banner">
      <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">
      <h3 class="text-center">About De Skyballers</h3>
    </div>

    <div class="container-fluid">
      <div class="row px-3 py-3">
        <div class="who-are-we">
          <div class="container">
            <div id="accordion" class="accordion">
              <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                  <a class="card-title">
                    <h1>Who Are We</h1>
                  </a>
                </div>
                <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                  <p>
                    Authentic African Sports Academy is an independent residential sports college for boys and girls. It
                    combines
                    education with sports along with a special focus on football development. The academy is designed to
                    help
                    aspiring players hone their football skills, place them in the limelight, and facilitate their
                    discovery and
                    recruitment
                    into the big clubs to play alongside football stars of their dreams.The academy is subdivided into two
                    viz
                  </p>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  <a class="card-title">
                    <h4>Student Academy</h4>
                  </a>
                </div>
                <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                  <p>
                    Authentic African Sports Academy is an independent residential sports college for boys and girls. It
                    combines
                    education with sports along with a special focus on football development. The academy is designed to
                    help
                    aspiring players hone their football skills, place them in the limelight, and facilitate their
                    discovery and
                    recruitment
                    into the big clubs to play alongside football stars of their dreams. The academy is subdivided into
                    two viz
                  </p>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  <a class="card-title">
                    <h1>Our Vision</h1>
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <p>
                      To have sports industry that is profitable, well-organized and competitive on international stage
                      and
                      operates with progressive, modern standard and sustainable policies.
                    </p>
                  </div>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  <a class="card-title">
                    <h1>Our Mission</h1>
                  </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <p>
                      To promote sports by setting up platforms and programs that enhances the discovery and harnessing of
                      talents across every age and region while adopting international best practices.
                    </p>
                  </div>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                  <a class="card-title">
                    <h1> Our Core Values</h1>
                  </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <ul class="col-lg-12 col-md-12 col-sm col-xs-12">
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
      </div>
    </div>
  </div>
@endsection
