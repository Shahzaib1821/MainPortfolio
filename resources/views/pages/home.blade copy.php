@extends('layouts.layout2')

@section('title', 'Home - The Ridgeline Marketing')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="portfolio__page">
                    <div class="swiper portfolio__main-slider">
                        <div class="swiper-wrapper portfolio__main-wrapper">
                            <div class="swiper-slide">
                                <section class="portfolio__hero-area portfolio-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="portfolio__hero">
                                                    <h1 class="title shape-circle">Full stack</h1>
                                                    <h2 class="title text-stroke">Web Software</h2>
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
                            </div>
                            <div class="swiper-slide">
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
                            </div>

                            <div class="swiper-slide">
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
                                                    <a href="about-dark.html" class="wc-btn-dark">Explore Me</a>
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
                                                            <img src="frontend/assets/imgs/brand/1.png" alt="Brand Logo" />
                                                        </div>
                                                        <div class="brand-logo">
                                                            <img src="frontend/assets/imgs/brand/2.png" alt="Brand Logo" />
                                                        </div>
                                                        <div class="brand-logo">
                                                            <img src="frontend/assets/imgs/brand/3.png" alt="Brand Logo" />
                                                        </div>
                                                        <div class="brand-logo">
                                                            <img src="frontend/assets/imgs/brand/4.png" alt="Brand Logo" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="swiper-slide">
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
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img
                                                                            src="frontend/assets/imgs/portfolio/1/1.jpg"
                                                                            alt="Portfolio Thumbnail" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img
                                                                            src="frontend/assets/imgs/portfolio/1/2.jpg"
                                                                            alt="Portfolio Thumbnail" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img
                                                                            src="frontend/assets/imgs/portfolio/1/3.jpg"
                                                                            alt="Portfolio Thumbnail" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img
                                                                            src="frontend/assets/imgs/portfolio/1/4.jpg"
                                                                            alt="Portfolio Thumbnail" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pp-next swipper-btn">prev</div>
                                                    <div class="pp-prev swipper-btn">Next</div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="swiper portfolio__project-thumbs">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Saltant Restaurant</h3>
                                                                <p>Website</p>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Radiant Self Treasure</h3>
                                                                <p>Blog Website</p>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">
                                                                    Apple book cover
                                                                </h3>
                                                                <p>March 2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">
                                                                    Apple book cover
                                                                </h3>
                                                                <p>March 2021</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__service pt-140 pb-140">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                                                <h2 class="sec-title">I MAKE THE Service BETTER.</h2>
                                            </div>
                                            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                                                <div class="sec-text">
                                                    <p>
                                                        Static and dynamic secure code review can prevent
                                                        a 0day before your product is even released. We
                                                        can integrate with your dev environment
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio__service-list">
                                            <div class="row">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">
                                                                Frontend <br />
                                                                Developemnt
                                                            </h3>
                                                            <div class="d-flex">

                                                                <ul>
                                                                    <li><i class="fa-brands fa-html5"></i> HTML</li>
                                                                    <li><i class="fa-brands fa-css3-alt"></i> CSS</li>
                                                                    <li><i class="fa-brands fa-js"></i> JavaScript</li>
                                                                </ul>
                                                                <ul>
                                                                    <li><i class="fa-brands fa-react"></i> React Js</li>
                                                                    <li><i class="fa-brands fa-bootstrap"></i> Bootstrap
                                                                    </li>
                                                                    <li>+ Jquery</li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">
                                                                Backend<br />
                                                                Developemnt
                                                            </h3>
                                                            <ul>
                                                                <li><i class="fa-brands fa-php"></i> PHP</li>
                                                                <li><i class="fa-brands fa-laravel"></i> Laravel</li>
                                                                <li><i class="fa-solid fa-database"></i> MySQL</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">
                                                                CMS<br />
                                                                Developemnt
                                                            </h3>
                                                            <ul>
                                                                <li><i class="fa-brands fa-wordpress"></i> WordPress</li>
                                                                <li><i class="fa-brands fa-shopify"></i> Shopify</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="ps-btn">
                                                    <a href="contact.html">Call me to get more extra service
                                                        <strong>call now</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__footer-area pt-130">
                                    <!-- Contact area start -->
                                    <div class="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="sec-title-wrapper">
                                                        <h2 class="pf-title">Let’s get in touch 🤟</h2>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact__text">
                                                        <p>
                                                            Great! We're excited to hear from you and let's
                                                            start something special togerter. call us for
                                                            any inquery.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                                    <div class="pf-contact">
                                                        <h3>Don't be afraid man ! <br />say hello</h3>
                                                        <ul>
                                                            <li>
                                                                <a href="tel:+(2)578365379">+(2) 578 - 365 - 379</a>
                                                            </li>
                                                            <li>
                                                                <a href="mailto:hello@example.com">hello@example.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pf-social">
                                                        <h3>follow</h3>
                                                        <ul>
                                                            <li><a href="#">Behance</a></li>
                                                            <li><a href="#">Dribble</a></li>
                                                            <li><a href="#">Meduim</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                                    <div class="contact__form">
                                                        <form action="#">
                                                            <div class="row g-3">
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="text" name="name"
                                                                        placeholder="Name *" />
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="email" name="email"
                                                                        placeholder="Email *" />
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="tel" name="phone"
                                                                        placeholder="Phone" />
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="text" name="subject"
                                                                        placeholder="Subject *" />
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <textarea name="message" placeholder="Messages *"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="pc-btn">
                                                                        <button class="wc-btn-dark">
                                                                            Send Me Quotes
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contact area end -->

                                    <!-- Footer area start -->
                                    <footer class="portfolio__footer">
                                        <div class="container">
                                            <div class="pf-btm">
                                                <div class="row">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                                                        <div class="footer__copyright-2">
                                                            <p>
                                                                © 2022 - 2025 | Alrights reserved by
                                                                <a href="https://dev.wealcoder.com/"
                                                                    target="_blank">Wealcoder</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                                                        <div class="footer__nav">
                                                            <ul class="footer-menu menu-anim">
                                                                <li>
                                                                    <a href="about-dark.html">about us</a>
                                                                </li>
                                                                <li><a href="contact.html">contact</a></li>
                                                                <li><a href="career.html">Career</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                    <!-- Footer area end -->
                                </section>
                            </div>
                        </div>
                        {{-- <div class="swiper-pagination circle-pagination-2"></div> --}}
                    </div>
                </div>
            </main>

        @endsection
