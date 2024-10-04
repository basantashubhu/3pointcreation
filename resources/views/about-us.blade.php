@extends('layouts.master')

@section('content')
    <!-- about us section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    About <span>Us</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.jpg"
                             alt="About Us">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            Who We Are
                        </h3>
                        <p>
                            3pointcreation is a team of passionate cinematographers, storytellers, and visual artists
                            dedicated to creating impactful, high-quality video content. Specializing in documentaries,
                            music videos, commercials, and films, we combine our expertise in visual storytelling with
                            cutting-edge technology to deliver captivating imagery. With a deep understanding of the art
                            and craft of cinematography, we transform ideas into stunning visual experiences that
                            connect with audiences on a profound level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->

    <!-- our mission section -->
    <section class="mission_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Mission</span>
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="detail-box">
                        <p class="text-justify">
                            "At 3pointcreation, our mission is to bring powerful stories to life through exceptional
                            cinematography. We are committed to delivering visually compelling content that resonates
                            with audiences, combining creativity with technical precision. From concept to
                            post-production, we strive to exceed client expectations and set new standards in visual
                            storytelling."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end our mission section -->

    <!-- team section -->
    <section class="team_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 class="">
                    Our <span> Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row justify-content-center">
                    @foreach($teamMembers as $member)
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="/images/{{ $member['image'] }}"
                                     class="img1"
                                     alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $member['name'] }}
                                </h5>
                                <p>
                                    {{ $member['role'] }}
                                </p>
                            </div>
                            <div class="social_box">
                                @foreach($member['socials'] as $icon => $link)
                                    <a href="{{ $link }}">
                                        <i class="fa fa-{{ $icon }}"
                                           aria-hidden="true"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->
@endsection
