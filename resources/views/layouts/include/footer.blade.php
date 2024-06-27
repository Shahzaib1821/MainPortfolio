<!-- Footer area start -->
<footer class="footer__area">
    <div class="footer__top">
        <div class="container footer-line"></div>
        <img src="{{asset('frontend/assets/imgs/thumb/footer.jpg')}}" alt="Footer Image" data-speed="0.5">
    </div>

    <div class="footer__btm">
        <div class="container">
            <div class="row footer__row">
                <div class="col-xxl-12">
                    <div class="footer__inner">
                        <div class="footer__widget">
                            <img class="footer__logo" src="{{asset('frontend/assets/imgs/logo/footer-logo-white.png')}}" alt="Footer Logo">
                            <p>When do they work well, and when do they on us and finally, when do we actually need how
                                can we
                                avoid
                                them.</p>
                            <ul class="footer__social">
                                <li><a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                <li><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                            </ul>
                        </div>

                        <div class="footer__widget-2">
                            <h2 class="footer__widget-title">Information</h2>
                            <ul class="footer__link">
                                <li><a href="about-us.php">About Company</a></li>
                                <li><a href="portfolio.html">Case Study</a></li>
                                <li><a href="career.php">Career</a></li>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                        </div>

                        <div class="footer__widget-3">
                            <h2 class="footer__widget-title">Contact Us</h2>
                            <ul class="footer__contact">
                                <li>Valentin, Street Road 24, New York, USA - 67452</li>
                                <li><a href="tel:02574328301" class="phone">+02) 574 - 328 - 301 </a></li>
                                <li><a href="mailto:info@buildyexample.com">info@buildyexample.com</a></li>
                            </ul>
                        </div>

                        <div class="footer__widget-4">
                            <h2 class="project-title">Have a project in your mind?</h2>
                            <div class="btn_wrapper">
                                <a href="contact.php" class="wc-btn-primary btn-hover btn-item"><span></span> contact us
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <h3 class="contact-time">09 : 00 AM - 10 : 30 PM</h3>
                            <h4 class="contact-day">Saturday - Thursday</h4>
                        </div>

                        <div class="footer__copyright">
                            <p>© 2022 - 2025 | Alrights reserved by <a href="https://dev.wealcoder.com/"
                                    target="_blank">Wealcoder</a>
                            </p>
                        </div>

                        <div class="footer__subscribe">
                            <form action="#">
                                <input type="email" name="email" placeholder="Enter your email">
                                <button type="submit" class="subs-btn"><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer area end -->


</div>
</div>

{{-- @include('components.career-modal') --}}
<!-- Modal 2 -->
<div class="modal__application" id="application_form2">
    <div class="modal__apply">
        <button class="modal__close-2" id="apply_close2">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="form-top">
            <img src="assets/imgs/logo/logo-black.png" alt="Site logo" />
            <h2 class="sec-title">Frontend Developer</h2>
            <p>Full time</p>
        </div>
        <div class="form-apply">
            <form action="#">
                <div class="input-apply-2">
                    <p>Name *</p>
                    <input type="text" name="name" required="" />
                </div>
                <div class="input-apply-2">
                    <p>Email *</p>
                    <input type="email" name="email" required="" />
                </div>
                <div class="input-apply-2">
                    <p>Phone *</p>
                    <input type="tel" name="phone" required="" />
                </div>
                <div class="input-apply-2">
                    <p>Upload CV *</p>
                    <input type="file" name="cv" />
                </div>
            </form>
        </div>
        <div class="form-btn-2">
            <button class="wc-btn-primary btn-hover" id="back_form1">
                <span></span> back <i class="fa-solid fa-arrow-right"></i>
            </button>
            <button type="submit" class="wc-btn-primary btn-hover">
                <span></span> Submit <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>
