@extends('layouts.master')

@section('content')
    <!-- about us section -->
    <section class="about_section layout_padding position-relative" style="background-color: rgba(0,0,0,0.6);">
        <img src="/images/envybanner.png" alt="3pointcreation banner" style="position: absolute;width: 100%;height: 100%;z-index: -1; top: 0px;
            filter: blur(2px);">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="detail-box">
                        <h3>
                            Bring Your Vision to Life
                        </h3>
                        <p>
                            Crafting Cinematic Experiences with Precision and Passion
                        </p>
                        <p>
                            "We are a team of cinematography professionals dedicated to turning your creative ideas into
                            visually stunning realities. From concept to post-production, we handle every detail to
                            ensure your story is told in the most compelling way."
                        </p>
                        <div class="button-container">
                            <a href="/services" class="btn btn-primary">Explore Our Services</a>
                            <a href="/work" class="btn btn-danger">Watch Our Reel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                    <p>
                        Professional cinematography services tailored to bring your creative vision to life, from concept development to final production.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.png"
                                     alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Video Production
                                </h5>
                                <p>
                                    End-to-end production services for commercials, films, documentaries, and music videos, from planning to post-production.
                                </p>
                                <a href="/services">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png"
                                     alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Cinematography Direction
                                </h5>
                                <p>
                                    Professional cinematographers to lead the visual direction of projects, ensuring high-quality framing, lighting, and camera work.
                                </p>
                                <a href="/services">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.png"
                                     alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Post-Production Services
                                </h5>
                                <p>
                                    Editing, color grading, and visual effects to enhance the final product, ensuring it aligns with the project's creative vision.
                                </p>
                                <a href="/services">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="/services">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    About <span>Us</span>
                </h2>
                <p>
                    Crafting powerful visual stories through cinematography, 3pointcreation specializes in bringing ideas to life with passion and precision.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            We Are 3pointcreation
                        </h3>
                        <p>
                            At 3pointcreation, we are a team of experienced cinematographers and storytellers who excel at producing high-quality visual content. Whether it’s for documentaries, music videos, commercials, or films, our goal is to create captivating imagery that resonates with audiences.
                        </p>
                        <p>
                            From concept development to post-production, we handle every aspect of the filmmaking process with creativity and technical expertise. Our commitment to excellence and attention to detail ensures that your vision is translated into a stunning cinematic experience.
                        </p>
                        <a href="/about-us">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end about section -->


    <!-- client section -->

    {{-- <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What says our <span>Customers</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/team-{{ random_int(1, 4) }}.jpg"
                                     alt="Testimonial"
                                     class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            {{ $testimonial['name'] }}
                                        </h6>
                                        <p>
                                            {{ $testimonial['role'] }}, {{ $testimonial['company'] }}
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left"
                                       aria-hidden="true"></i>
                                </div>
                                <p>{{ $testimonial['message'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}

    <!-- end client section -->
    
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    Our <span>Achievement</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                  <img src="/images/1.jpeg" alt="lost" class="img-fluid mt-5">
                </div>
                <div class="col-md-4 mb-3">
                  <img src="/images/2.png" alt="firm festival winner" class="img-fluid mt-5">
                </div>
                <div class="col-md-4 mb-3">
                  <img src="/images/3.jpg" alt="coventry phoenix" class="img-fluid">
                </div>
                
                
                
              </div>
        </div>
    </section>

@endsection
