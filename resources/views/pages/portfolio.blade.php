@extends('layouts.layout1')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Portfolio area start -->
        <section class="portfolio-v5 portfolio__project">
          <div class="container line">
            <div class="line-3"></div>
            <div class="row pt-130 pb-100">
              <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title-2 animation__char_come">Awesome <br>Projects</h2>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                <div class="blog__text">
                  <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide range of
                    original collabs. </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xxl-12">
                <div class="pp-title-wrap">
                  <h2 class="pp-title">Selected <br> Work</h2>
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
                          <a href="portfolio-details.html"><img src="frontend/assets/imgs/portfolio/1/1.jpg" alt="Portfolio Thumbnail"></a>
                        </div>
                      </div>
                      <div class="swiper-slide pp-slide">
                        <div class="pp-slide-img">
                          <a href="portfolio-details.html"><img src="frontend/assets/imgs/portfolio/1/2.jpg" alt="Portfolio Thumbnail"></a>
                        </div>
                      </div>
                      <div class="swiper-slide pp-slide">
                        <div class="pp-slide-img">
                          <a href="portfolio-details.html"><img src="frontend/assets/imgs/portfolio/1/3.jpg" alt="Portfolio Thumbnail"></a>
                        </div>
                      </div>
                      <div class="swiper-slide pp-slide">
                        <div class="pp-slide-img">
                          <a href="portfolio-details.html"><img src="frontend/assets/imgs/portfolio/1/4.jpg" alt="Portfolio Thumbnail"></a>
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
                        <h3 class="pp-slide-title">Apple book cover</h3>
                        <p>March 2021</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="pp-slide-thumb">
                        <h3 class="pp-slide-title">Apple book cover</h3>
                        <p>March 2021</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Portfolio area end -->

        <!-- CTA area start -->
        <section class="cta__area">
          <div class="container line pt-140 pb-110">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">Work with us</p>
                  <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                  <div class="btn_wrapper">
                    <a href="contact.html" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- CTA area end -->

      </main>
@endsection
