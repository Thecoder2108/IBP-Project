<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>iStop The Bleed (DEMO) | Student Appoinment</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    @include('parts.navbar')
    <!--End Main Header -->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <span class="sub-title">Student Appointment</span>
                <h2>Registration Now!</h2>
                <span class="divider"></span>
            </div>

            <!-- Form box -->
            <div class="form-box">
                <div class="contact-form">
                    <form action="{{url('dashboard/studentadd')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="form-group col-lg-12 text-center pt-3">
                                <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Registration</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

    <!-- Main Footer -->
    <footer class="main-footer style-two">
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(images/background/7.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.html"><img width="250px;" src="images/FINAL V -stroke.png" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>Our Clinic has grown to provide a world class facility for the clinic advanced restorative. </p>
                                        <p>We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <ul class="user-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="classes.html">Classes</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="teacher.html">Teacher</a></li>
                                <li><a href="student.html">Student</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Latest News</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href=""><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="">Integrative Medicine <Br>& Cancer Treatment.</a></h4>
                                            <span class="date">July 11, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href=""><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="">Achieving Better <br>Health Care Time.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href=""><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                            <h4><a href="">Great Health Care <br>For Patients.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <div class="text">2130 Fulton Street San Diego <Br>CA 94117-1080 USA</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text">Mon to Fri : 08:30 - 18:00</div>
                                                <a href="tel:+89868679575"><strong>+898 68679 575</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">Do you have a Question?<br>
                                                <a href="mailto:info@gmail.com"><strong>info@gmail.com</strong></a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">Mon - Sat 8.00 - 18.00<br>
                                                <strong>Sunday CLOSED</strong></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div style="text-align: center;">
                        <p style="color: #fff;">Copyright © 2022 <a style="color: #fff" href="https://tradelineturkey.com"><b>Tradeline Turkey</b></a> - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>


