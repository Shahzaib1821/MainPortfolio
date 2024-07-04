@extends('layouts.layout2')

@section('title', 'Home - The Ridgeline Marketing')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <section class="portfolio__hero-area portfolio-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="portfolio__hero">
                                    <h1 class="title shape-circle">Full stack</h1>
                                    <h2 class="title text-stroke">Web & Software</h2>
                                    <h2 class="title">developer</h2>
                                    <div class="btn-wrapper">
                                        <a href="{{ route('portfolio') }}" class="wc-btn-dark">View all
                                            work</a>
                                    </div>
                                    <img src="frontend/assets/imgs/portfolio/1.png" alt="Personal Portfolio"
                                        class="pp-thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Roll area start -->
                <section class="roll__area">
                    <div class="swiper roll__slider">
                        <div class="swiper-wrapper roll__wrapper">
                            <div class="swiper-slide roll__slide">
                                <h2>Development</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Studio</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>typhography</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Design</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Element</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>DIgital SOlution</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2>DIgital SOlution</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Roll area end -->

                <section class="portfolio-section portfolio__about pt-140 pb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-8 col-xxl-8 col-lg-8">
                                <div class="portfolio__about-left">
                                    <h2 class="sec-title">
                                        I craft wonderful
                                        <span>digital experiences</span> for brands
                                    </h2>
                                    <img src="frontend/assets/imgs/shape/16.png" alt="Shape" />
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="sec-text">
                                    <p>
                                        Based in Washington, DC, I work with experts from
                                        the Center for Strategic and International Studies
                                        (CSIS) to help them communicate their research
                                        more effectively on the web. Together we make
                                        websites, data visualizations, and long-forms that
                                        strengthen their networks and engage new audiences
                                        with thoughtful content and design strategies.
                                    </p>
                                    <a href="{{route('about')}}" class="wc-btn-dark">Explore Me</a>
                                </div>
                            </div>
                        </div>

                        <div class="about-row">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                    <div class="brand-title-wrap">
                                        <h3 class="brand-title">
                                            worked with global largest brands
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                                    <div class="brand-list">
                                        <div class="brand-logo">
                                            <img src="frontend/assets/imgs/brand/1.png" alt="Brand Logo" width="150px" />
                                        </div>
                                        <div class="brand-logo">
                                            <img src="frontend/assets/imgs/brand/2.png" alt="Brand Logo" width="150px"/>
                                        </div>
                                        <div class="brand-logo">
                                            <img src="frontend/assets/imgs/brand/3.png" alt="Brand Logo" width="150px"/>
                                        </div>
                                        <div class="brand-logo">
                                            <img src="frontend/assets/imgs/brand/4.png" alt="Brand Logo" width="150px"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- @include('components.services-slider') --}}

                <section class="portfolio-section portfolio__project">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="pp-title-wrap">
                                    <h2 class="pp-title">
                                        Selected <br />
                                        Work
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                                <div class="pp-slider-wrapper">
                                    <div class="swiper portfolio__project-slider">
                                        <div class="swiper-wrapper">
                                            @foreach ($projects as $project)
                                                <div class="swiper-slide pp-slide">
                                                    <div class="pp-slide-img">
                                                        <a href="{{ $project->project_link }}" target="_blank"><img src="{{ asset($project->image_path) }}" alt="{{ $project->title }}" /></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="pp-next swiper-btn text-white">Next</div>
                                    <div class="pp-prev swiper-btn text-white">Prev</div>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                <div class="swiper portfolio__project-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach ($projects as $project)
                                            <div class="swiper-slide">
                                                <div class="pp-slide-thumb">
                                                    <h3 class="pp-slide-title">{{ $project->title }}</h3>
                                                    <p>{{ $project->description }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service area start -->
                <section class="service__area pt-110 pb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="sec-title-wrapper wrap">
                                    <h2 class="sec-sub-title title-anim">service</h2>
                                    <h3 class="sec-title title-anim">Solution we <br>provide</h3>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="service__top-text text-anim">
                                    <p>With every single one of our clients we bring forth a deep passion
                                        for <span>creative problem solving
                                            innovations</span> forward thinking
                                        brands boundaries</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="service__top-btn">
                                    <div class="btn_wrapper">
                                        <a href="#" class="btn-item wc-btn-secondary btn-hover"><span></span>
                                            View <br>all
                                            services <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service__list-wrapper">
                            <div class="row">
                                <di class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                                    <div class="service__img-wrapper ">
                                        <img src="frontend/assets/imgs/service/1/1.jpg" alt="Service Image"
                                            class="service__img img-1 active">
                                        <img src="frontend/assets/imgs/service/1/2.png" alt="Service Image"
                                            class="service__img img-2">
                                        <img src="frontend/assets/imgs/service/1/3.png" alt="Service Image"
                                            class="service__img img-3">
                                        <img src="frontend/assets/imgs/service/1/4.png" alt="Service Image"
                                            class="service__img img-4">

                                        <span class="shape-box-1 current"></span>
                                        <span class="shape-box-2"></span>
                                        <span class="shape-box-3"></span>
                                        <span class="shape-box-4"></span>
                                    </div>
                                </di v>
                                <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                                    <div class="service__list">
                                        <a href="#">
                                            <div class="service__item animation_home1_service" data-service="1">
                                                <div class="service__number"><span>01</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">Website Development</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> I am specialize in creating robust and scalable web applications tailored to meet your specific
                                                        business needs..</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#">
                                            <div class="service__item  animation_home1_service" data-service="2">
                                                <div class="service__number"><span>02</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">CUSTOM SOFTWARE DEVELOPMENT</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>My custom software solutions are designed to streamline your business operations and enhance
                                                        productivity.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#">
                                            <div class="service__item  animation_home1_service" data-service="3">
                                                <div class="service__number"><span>03</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">WORDPRESS WEB DEVELOPMENT</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> As experts in WordPress development, we create stunning websites that are user-friendly and
                                                        easily manageable.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#">
                                            <div class="service__item  animation_home1_service" data-service="4">
                                                <div class="service__number"><span>04</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">WEBSITE REVAMPING & BUG FIXES</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>I am specialize in refining interfaces, resolving glitches, and optimizing functionality for
                                                        seamless user experiences.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service area end -->

                <!-- Award area start -->
                <section class="award__area pt-130 pb-140 bg-transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper pb-140">
                                    <h2 class="sec-title title-anim">We’re nominated as Agency of
                                        the Year amongst best
                                        Digital Agencies
                                        Worldwide.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="award__left">
                                    <h4 class="award__text-2">Experience</h4>
                                    <h3 class="award__text">Experience</h3>
                                    <img src="frontend/assets/imgs/shape/3.png" alt="Shape Image" data-speed="1"
                                        data-lag="0.2">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="award__right">
                                    <p>We're passionate about doing the best digital
                                        innovation we can and pushing new
                                        technology
                                        to its limits. And we achieve
                                        results we're proud of beyond the realm.</p>
                                    <div class="award__list">
                                        <div class="award__item">
                                            <p>LiveBits</p>
                                            <img src="frontend/assets/imgs/brand/1.png" alt="Brand Logo" width="80px">
                                            <p>2021</p>
                                        </div>
                                        <div class="award__item">
                                            <p>II Solutions</p>
                                            <img src="frontend/assets/imgs/brand/2.png" alt="Brand Logo" width="80px">
                                            <p>2020</p>
                                        </div>
                                        <div class="award__item">
                                            <p>The Ridgeline Marketing</p>
                                            <img src="frontend/assets/imgs/brand/3.png" alt="Brand Logo" width="80px">
                                            <p>2018</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Award area end -->

                <!-- CTA area start -->
                <section class="cta__area">
                    <div class="container line pb-110">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="cta__content">
                                    <p class="cta__sub-title">Work with us</p>
                                    <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                                    <div class="btn_wrapper">
                                        <a href="{{route('contact')}}"
                                            class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- CTA area end -->

            </main>
        @endsection
