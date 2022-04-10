@extends('layouts.index')
@section('content')
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        @include('layouts.header')
        <!-- ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        @include('layouts.top')
        <!-- ***** Main Banner Area End ***** -->

        <!-- ***** About Area Starts ***** -->
        @include('layouts.section_about')
        <!-- ***** About Area Ends ***** -->

        <!-- ***** Menu Area Starts ***** -->
        @include('layouts.section_menu')
        <!-- ***** Menu Area Ends ***** -->

        <!-- ***** Chefs Area Starts ***** -->
        @include('layouts.section_chefs')
        <!-- ***** Chefs Area Ends ***** -->

        <!-- ***** Reservation Us Area Starts ***** -->
        @include('layouts.section_reservation')
        <!-- ***** Reservation Area Ends ***** -->

        <!-- ***** Menu Area Starts ***** -->
        @include('layouts.section_offers')
        <!-- ***** Chefs Area Ends ***** -->

        <!-- ***** Footer Start ***** -->
        @include('layouts.footer')

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/isotope.js"></script>

        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        <script>
            $(function() {
                var selectedClass = "";
                $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                  $("."+selectedClass).fadeIn();
                  $("#portfolio").fadeTo(50, 1);
                }, 500);

                });
            });
        </script>
  </body>
@endsection
