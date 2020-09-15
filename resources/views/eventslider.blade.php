@extends('layout')

@section('link')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="assets/css/eventslider.css">
@endsection

@section('content')
    

<div class="autoplay">
  <div class="d-block">
    <img src="assets/img/training.jpg" alt="">
    <p class="d-block">
      <strong class="text-center">Date: November 10</strong>
    </p>
  </div>
  <div class="d-block">
    <img src="assets/img/upcoming_event.jpg" alt="">
    <p class="d-block">
      <strong class="text-center">Date: Upcoming</strong>
    </p>
  </div>
  <div class="d-block">
    <img src="assets/img/malefitness.jpg" alt="">
    <p class="d-block">
      <strong class="text-center">Date: Upcoming</strong>
    </p>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });

</script>

@endsection

