@extends('layouts.layout1')

@section('title', 'Services - The Ridgeline Marketing')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <section class="blog__area-3 blog-v3 blog__animation">
                    <div class="container line">
                        <div class="line-3"></div>
                        <div class="row ">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper text-anim pt-130">
                                    <h2 class="sec-sub-title">Recent Blog</h2>
                                    <h3 class="sec-title title-anim" style="perspective: 400px;">
                                        <div
                                            style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 393px 25px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                            Read Updated </div>
                                        <div
                                            style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 393px 25px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                            Journal</div>
                                    </h3>
                                    <p style="perspective: 400px;">
                                    <div
                                        style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 165px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        Read our blog and try to see everything </div>
                                    <div
                                        style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 165px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        from every perspective. Our passion lies </div>
                                    <div
                                        style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 165px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        in making everything accessible and </div>
                                    <div
                                        style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 165px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        aesthetic for everyone. </div>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/1.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/1.jpg') }}">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">Web Development Service</a></h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Transform your online presence
                                                with our professional web development services. We create custom,
                                                responsive, and engaging websites tailored to your brand's needs.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/2.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/2.jpg') }}"
                                                    alt="Blog Thumbnail">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">Custom Software Development</a></h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Empower your business with
                                                tailored software solutions. Our custom software development services are
                                                designed to meet your specific needs and drive growth.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/3.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/3.jpg') }}"
                                                    alt="Blog Thumbnail">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">WordPress Web Development</a></h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Create stunning, user-friendly
                                                websites with our WordPress development services. From custom themes to
                                                plugin integration, we bring your vision to life.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/4.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/4.jpg') }}"
                                                    alt="Blog Thumbnail">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">Website Revamping & Bug Fixes</a>
                                        </h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Give your website a fresh,
                                                modern look with our revamping and bug fixing services. We improve
                                                functionality and performance to keep your site up-to-date.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/5.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/5.jpg') }}"
                                                    alt="Blog Thumbnail">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">Single Page Application
                                                Development</a></h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Enhance user experience with
                                                our Single Page Application development services. We build fast, responsive
                                                SPAs that provide a seamless experience.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <article class="blog__item-3">
                                    <div class="blog__img-wrapper-3">
                                        <a href="{{route('contact')}}">
                                            <div class="img-box">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/6.jpg') }}"
                                                    alt="Blog Thumbnail">
                                                <img class="image-box__item"
                                                    src="{{ asset('frontend/assets/imgs/service/1/6.jpg') }}"
                                                    alt="Blog Thumbnail">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog__info-3">
                                        <h4 class="blog__meta"><a href="category.html">Web Application Development</a>
                                        </h4>
                                        <p><a href="{{route('contact')}}" class="blog__title-3">Transform your ideas into
                                                powerful web applications with our expert development services. We create
                                                dynamic, interactive, and scalable web apps tailored to your business
                                                needs.</a></p>
                                        <a href="{{route('contact')}}" class="blog__btn">Get Service <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        @endsection
