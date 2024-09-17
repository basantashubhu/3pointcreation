@extends('layouts.master')

@section('content')
    <!-- ======= Home Section ======= -->
    <section id="home" class="about section-show" style="padding-bottom: 0;">

        <!-- ======= About Me ======= -->
        <div class="about-me">

            <!-- video slider -->
            <div class="row">
                <div class="col-lg-12">
                    <div style="height: 100vh;width: 100vw;" id="homeVideo">
                        <video class="mt-3 mt-lg-0" width="100%" height="auto" autoplay muted style="position: absolute;top: 0;left: 0;z-index: -1;">
                            <source src="/assets/teaser.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-12">

                    <div id="aboutMe" class=""
                         style="margin-top: 100px;">
                        <!-- ======= About Me ======= -->
                        <div class="about-me container">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/1.jpeg" alt="lost" class="img-fluid mt-5">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/2.png" alt="firm festival winner" class="img-fluid mt-5">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/3.jpg" alt="coventry phoenix" class="img-fluid">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/4.jpg" alt="bts" class="img-fluid">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/5.jpg" alt="bts2" class="img-fluid">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="/assets/img/home/6.jpg" alt="creative artist" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="about-me container">

                            <div class="section-title">
                                <!-- <h2>About</h2> -->
                                <p>about me</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-5" data-aos="fade-right">
                                    <img src="/assets/img/profile.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left">
                                    <h3>Cinematographer/Post-production</h3>
                                    <p>
                                        I am an experienced cinematographer and videographer with extensive expertise in film and media
                                        production processes. I am proficient in camera operation, visual storytelling, lighting techniques,
                                        and post-production processes, including technical support, equipment maintenance, and production
                                        management. I serve as the primary contact for supporting producers, directors, crew members, and
                                        clients, offering creative solutions, technical expertise, and guidance on social media marketing
                                        campaigns.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End About Me -->

                        <!-- ======= FOOTER ======= -->
                        <div class="footer container mt-4 p-3">

                            <div class="row">
                                <div class="col-lg-12 pt-3 content" data-aos="fade-left">
                                    <div class="d-flex align-items-center flex-column" style="gap: 10px;">
                                        <div>
                                            Email: <a href="mailto:ranjan.rimal5@gmail.com">ranjan.rimal5@gmail.com</a>
                                        </div>
                                        <div class="social-links d-flex" style="gap: 10px;">
                                            <a href="https://www.instagram.com/rj_rimal" class="instagram"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.youtube.com/@ranjanrimal1683" class="youtube"><i class="bi bi-youtube"></i></a>
                                            <a href="https://www.facebook.com/ranjan.rimal" class="facebook"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.linkedin.com/in/ranjan-rimal-559351163" class="linkedin"><i
                                                    class="bi bi-linkedin"></i></a>
                                            <a href="https://www.tiktok.com/@rj_rimal" class="tiktok"><i class="bi bi-tiktok"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End FOOTER -->
                        <br><br>

                    </div>

                </div>
            </div>

        </div><!-- End About Me -->

    </section>
    <!-- End Home Section -->
@endsection
