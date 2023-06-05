<header class="main-header header-style-two">

    <!-- Header top -->
    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner-container">
                <div><a href="/istop/en/"><b>EN</b></a> | <a class="current" href="/istop/ar/">AR</a></div>
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="flaticon-hospital-1"></i>234 Triumph, Los Angeles, <br>California, US </li>
                        <li><i class="flaticon-back-in-time"></i>Mon - Sat 8.00 - 18.00. <br>Sunday CLOSED</li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                    <div class="btn-box">
                        <a href="tel:" id="appointment-btn" class="theme-btn btn-style-three"><span class="btn-title">Call Now!</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <!-- Logo -->
            <div class="logo-box" style="z-index: 50;">
                <div class="logo"><a href="index.html"><img style="width: 250px;" width="" src="images/FINAL V.png" alt="" title=""></a></div>
            </div>
            <!-- Main box -->
            <div class="main-box">

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li class=" {{ (request()->is('/')) ? 'current':''}}"><a href="{{url('index')}}">Home</a></li>
                            <li class="{{ (request()->is('about')) ? 'current':''}}"><a href="{{url('about')}}">About Us</a></li>
                            <li class="{{ (request()->is('classes')) ? 'current':''}}"><a href="{{url('classes')}}">Classes</a></li>
                            <li class="{{ (request()->is('blog')) ? 'current':''}}"><a href="{{url('blog')}}">Blog</a></li>
                            <li class="{{ (request()->is('contact')) ? 'current':''}}"><a href="{{url('contact')}}">Contact Us</a></li>
                            <li class="{{ (request()->is('teacher')) ? 'current':''}}"><a href="{{url('teacher')}}">Teacher</a></li>
                            <li class="{{ (request()->is('student')) ? 'current':''}}"><a href="{{url('student')}}">Student</a></li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->

                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img width="150px;" src="images/FINAL V.png" alt="" title=""></a></div>
                </div>

                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.html"><img src="images/FINAL V.png" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Search Btn -->
                <div class="search-box">
                    <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->
</header>
