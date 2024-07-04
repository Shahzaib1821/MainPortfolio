@extends('layouts.layout1');

@section('title', 'About - The Ridgeline Marketing')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Hero area start -->
                <section class="hero__about">
                    <div class="container g-0 line">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12 ps-lg-5">
                                <div class="hero__about-content">
                                    <h1 class="hero-title animation__word_come">About me</h1>
                                    <div class="hero__about-info">
                                        <div class="hero__about-btn">
                                            <div class="btn_wrapper">
                                                <a href="service.php"
                                                    class="wc-btn-primary btn-hover btn-item"><span></span> Trends & <br>
                                                    technology
                                                    <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="hero__about-text title-anim">
                                            <p>I am a self-taught full-stack programmer with a passion for crafting efficient and elegant solutions. With expertise in both front-end and back-end development, I thrive on turning ideas into robust web applications. My journey in programming has been driven by a curiosity to learn and a dedication to mastering new technologies. I specialize in creating scalable and user-centric software solutions that empower businesses and enhance user experiences.</p>
                                        </div>
                                        <div class="hero__about-award">
                                            <img src="{{ asset('frontend/assets/imgs/about/award.png') }}"
                                                alt="Best Studio Award">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row hero__about-row">
                            <div class="col-xxl-12">
                               <img src="{{asset('frontend/assets/imgs/about-img.png')}}" width="100%" alt="">>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero area end -->


                <!-- Story area start -->
                <section class="story__area">
                    <div class="container g-0 line pt-140">
                        <span class="line-3"></span>
                        <div class="sec-title-wrapper">
                            <div class="from-text">from <span>1990</span></div>

                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 ps-lg-5">
                                    <h2 class="sec-sub-title title-anim">Digital Studio</h2>
                                    <h3 class="sec-title title-anim">Our story</h3>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                    <div class="story__text">
                                        <p>Your brand is the most important asset in your company let our team of
                                            professionals help you
                                            with a good strategy took the runway next with an edgy collection featuring dyed
                                            denim pieces. The
                                            collection included patchwork denim, a trend that has recently exploded in
                                            younger generations.
                                            Playing on aspects of sustainability, the pieces appeared to be upcycled to
                                            establish dimension
                                            and flair. This take on grunge and streetwear took sustainable fashion to an
                                            entirely new level.
                                        </p>
                                        <p>ur specialized team of researchers, strategists, designers, developers, and
                                            project managers work
                                            with streamlined processes to break through organizational roadblocks. We
                                            translate research into
                                            solutions, crafting thoughtful and unified brands.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="story__img-wrapper">
                                    <img src="{{ asset('frontend/assets/imgs/story/2.png') }}" alt="Story Thumbnail" class="w-100">
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="story__img-wrapper img-anim">
                                    <img src="{{ asset('frontend/assets/imgs/story/4.jpg') }}" alt="Story Thumbnail" data-speed="auto">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="story__img-wrapper">
                                    <img src="{{ asset('frontend/assets/imgs/story/3.jpg') }}" alt="Story Thumbnail">
                                    <img src="{{ asset('frontend/assets/imgs/story/4.jpg') }}" alt="Story Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Story area end -->


                <!-- Counter area start -->
                <section class="counter__area">
                    <div class="container g-0 line pb-140 pt-140">
                        <span class="line-3"></span>

                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="counter__wrapper-2 counter_animation">
                                    <div class="counter__item-2 counter__anim">
                                        <h2 class="counter__number">25k</h2>
                                        <p>Project <br>completed</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item-2 counter__anim">
                                        <h2 class="counter__number">8k</h2>
                                        <p>Happy <br>customers</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item-2 counter__anim">
                                        <h2 class="counter__number">15</h2>
                                        <p>Years <br>experiences</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item-2 counter__anim">
                                        <h2 class="counter__number">98</h2>
                                        <p>Awards <br>achievement</p>
                                        <span class="counter__border"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter area end -->


                <!-- Stack area start -->
                <section class="brand__area">
                    <div class="container g-0 line pt-140 pb-140">
                        <span class="line-3"></span>
                        <div class="row g-0">
                            <div class="col-xxl-12 ps-lg-5">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">Fram Work I Use</h2>
                                    <h3 class="sec-title title-anim">We are happy to work with global <br>
                                        largest brands</h3>
                                </div>
                            </div>

                            <div class="brand__list">
                                <div class="brand__item fade_bottom">
                                    <i class="fa-brands fa-html5 w-100"></i>
                                </div>
                                <div class="brand__item fade_bottom">
                                    <i class="fa-brands fa-css3-alt"></i>
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- Stack area end -->

                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container g-0 line pt-140 pb-140">
                        <span class="line-3"></span>
                        <div class="row g-0">
                            <div class="col-xxl-12 ps-lg-5">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">Internation Brands</h2>
                                    <h3 class="sec-title title-anim">We are happy to work with global <br>
                                        largest brands</h3>
                                </div>
                            </div>

                            <div class="brand__list">
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                                </div>
                                <div class="brand__item fade_bottom">
                                    <img src="{{ asset('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- Brand area end -->


                <!-- Testimonial area start -->
                <section class="testimonial__area-2">
                    <div class="container g-0 line pb-140">
                        <span class="line-3"></span>

                        <div class="row g-0">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="testimonial__video">
                                    <video autoplay="" muted="" loop="">
                                        <source src="{{asset('frontend/assets/video/testimonial.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                            </div>

                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="testimonial__slider-wrapper-2">
                                    <div class="swiper testimonial__slider">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide testimonial__slide">
                                                <div class="testimonial__inner-2">
                                                    <h2 class="testimonial__title-2">Amazing digital service</h2>
                                                    <p class="testimonial__text-2">We were there right at the beginning
                                                        just when the concept
                                                        for
                                                        search
                                                        engine optimisation taking office and the full of internet. So
                                                        wewe’ve grown to employ
                                                        than 50
                                                        talented specialists with diverse experiences and broad skill sets
                                                        of huge markers.</p>
                                                    <h3 class="testimonial__author">Adam Syndera</h3>
                                                    <h4 class="testimonial__role">CEO, Agency</h4>
                                                </div>
                                            </div>

                                            <div class="swiper-slide testimonial__slide">
                                                <div class="testimonial__inner-2">
                                                    <h2 class="testimonial__title-2">Amazing digital service</h2>
                                                    <p class="testimonial__text-2">We were there right at the beginning
                                                        just when the concept
                                                        for
                                                        search
                                                        engine optimisation taking office and the full of internet. So
                                                        wewe’ve grown to employ
                                                        than 50
                                                        talented specialists with diverse experiences and broad skill sets
                                                        of huge markers.</p>
                                                    <h3 class="testimonial__author">Adam Syndera</h3>
                                                    <h4 class="testimonial__role">CEO, Agency</h4>
                                                </div>
                                            </div>

                                            <div class="swiper-slide testimonial__slide">
                                                <div class="testimonial__inner-2">
                                                    <h2 class="testimonial__title-2">Amazing digital service</h2>
                                                    <p class="testimonial__text-2">We were there right at the beginning
                                                        just when the concept
                                                        for
                                                        search
                                                        engine optimisation taking office and the full of internet. So
                                                        wewe’ve grown to employ
                                                        than 50
                                                        talented specialists with diverse experiences and broad skill sets
                                                        of huge markers.</p>
                                                    <h3 class="testimonial__author">Adam Syndera</h3>
                                                    <h4 class="testimonial__role">CEO, Agency</h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonial__pagination">
                                        <div class="prev-button"><i class="fa-solid fa-arrow-right"></i></div>
                                        <div class="next-button"><i class="fa-solid fa-arrow-left"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonial area end -->


                <!-- CTA area start -->
                <section class="cta__area">
                    <div class="container line pb-110 dark-p">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="cta__content">
                                    <p class="cta__sub-title">Work with us</p>
                                    <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                                    <div class="btn_wrapper">
                                        <a href="contact.php" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s
                                            talk us <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- CTA area end -->

            </main>
        @endsection
