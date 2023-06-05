@extends('layout.app')
 @Section('content')
 <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->

    @include('parts.navbar')
    <!--End Main Header -->

    <!-- Bnner Section -->

    @include('parts.image')
    <!-- End Bnner Section -->

    <!-- About Section Two -->

    <!-- End About Section Two -->
    @include('parts.about')
    <!-- Fun Fact Section Two-->

    <!-- Fun Fact Section Two -->
    @include('parts.fun')
    <!-- Services Section -->
    @include('parts.services')
    <!-- End service Section -->

    <!-- Portfolio Section -->
    @include('parts.portfolio')
    <!-- End Portfolio Section -->

    <!-- Appointment Form Section -->
    @include('parts.Appointment')
    <!--End Appointment Form Section -->

    <!-- Time Table Section -->
    @include('parts.time')
    <!-- End Time Table Section -->

    <!-- News Section Two -->
    @include('parts.news')
    <!--End News Section Two -->

    <!-- Clients Section -->
    @include('parts.Clients')
    <!--End Clients Section -->

    <!-- Main Footer -->
    @include('parts.Footer')
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

 @endSection
