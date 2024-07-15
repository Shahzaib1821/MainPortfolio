<!-- Offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__body">
        <div class="offcanvas__left">
            <div class="offcanvas__logo">
                <a href="index.php"><img src="frontend/assets/imgs/logo/site-logo-white-2.png" alt="Offcanvas Logo" /></a>
            </div>
            <div class="offcanvas__social">
                <h3 class="social-title">Follow Us</h3>
                <ul>
                    <li><a href="#">Dribbble</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
            <div class="offcanvas__links">
                <ul>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="career.php">Career</a></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__mid">
            <div class="offcanvas__menu-wrapper">
                <nav class="offcanvas__menu">
                    <ul class="menu-anim">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href='{{ route('about') }}'>About Me</a>
                        </li>
                       <li>
                            <a href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                         <li>
                            <a href="{{ route('services') }}">Services</a>
                     {{--    </li>
                        <li>
                            <a href="{{ route('careers') }}">Career</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="offcanvas__right">
            <div class="offcanvas__search">
                <form action="#">
                    <input type="text" name="search" placeholder="Search keyword" />
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="offcanvas__contact">
                <h3>Get in touch</h3>
                <ul>
                    <li><a href="tel:0301-1115648">0301-1115648</a></li>
                    <li><a href="tel:021-34551555">021-34551555</a></li>
                    <li>
                        <a href="mailto:careers@theridgelinemarketing.com">careers@theridgelinemarketing.com</a>
                    </li>
                    <li>Plot # 209-C/210-C, Block 2 PECHS, Karachi</li>
                </ul>
            </div>
            <img src="frontend/assets/imgs/shape/11.png" alt="shape" class="shape-1" />
            <img src="frontend/assets/imgs/shape/12.png" alt="shape" class="shape-2" />
        </div>
        <div class="offcanvas__close">
            <button type="button" id="close_offcanvas">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
</div>
<!-- Offcanvas area end -->
