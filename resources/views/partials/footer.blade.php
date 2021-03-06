  <!-- Footer -->
  <footer id="footer">
    <div class="footer-top" style="background:rgba(83, 84, 97, 0.77);">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 d-sm-none d-sm-block d-xs-none d-xs-block footer-contact">
            <div class="logo-bottom mr-auto d-flex mb-2 mt-2">
              <a href="/"><img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" class="img-fluid mr-2"></a>
              <h1>
                <a class="site-title" href="/">
                De Skyballers
                </a>
              </h1>
            </div>
            <p>
              At De SkyBallers, we promote sports by setting up platforms and programs that enhances the
              discovery and
              harnessing of talents across every age and region while adopting international best practices

              We are well-organized and competitive on international stage.
              We operates with progressive, modern standard and sustainable policies.
            </p>
          </div>
          <div class="col-lg-4 col-md-4ssssssss col-sm-4 col-xs-4 d-none d-sm-block footer-links">
            <h1 class="ml-5">Additional Link</h1>
            <ul>
              <li><a href="#location">Our Location</a></li>
              <li><a href="#Scholarship">Scholarship</a></li>
              <li><a href="#Curriculum">Curriculum</a></li>
              <li><a href="#Benefits">Benefits</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 footer-links">
            @if (session()->has('contactform_message'))
              <div class="alert alert-success">
                <strong>Success</strong>
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ session()->get('contactform_message') }}
              </div>
            @endif
            <h1 class="text-center">Contact De Skyballers</h1>

            <form action="/gallery" id="form" method="POST">
              <div id="row" class="row">
                <div class="form-group col-md-6 col-sm-6">
                  <input type="text" name="full_name" class="form-control" placeholder="Fullname">
                  <p class="text-danger">
                    {{ $errors->first('full_name') }}
                  </p>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <input type="email" name="contact_email" class="form-control" placeholder="Email">
                  <p class="text-danger">
                    {{ $errors->first('contact_email') }}
                  </p>
                </div>
              </div>
              <div class="form-group col-md-12 col-sm-12" style="margin-left:-5%;">
                <textarea type="text" style="width:110%" class="message-textarea" name="user_message" form-control"
                  placeholder="Message" rows="3"></textarea>
                <p class="text-danger"> {{ $errors->first('user_message') }}</p>
              </div>

              <button class="btn btn-secondary" type="submit">Send</button>
              @csrf
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <p class="text-center">
          &copy; Copyright
          <strong>
            {{-- <span>{{ setting('site.title') }}</span> --}}
            De Skyballers
          </strong>. All Rights Reserved
        </p>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>
  <!-- End Footer -->
