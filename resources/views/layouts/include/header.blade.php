  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>



  <!-- Preloader -->
  <div class="preloader">
      <div class="loading">
          <div class="bar bar1"></div>
          <div class="bar bar2"></div>
          <div class="bar bar3"></div>
          <div class="bar bar4"></div>
          <div class="bar bar5"></div>
          <div class="bar bar6"></div>
          <div class="bar bar7"></div>
          <div class="bar bar8"></div>
      </div>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
      <div class="switcher__icon">
          <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
          <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
      </div>

      <div class="switcher__items">
          <div class="switcher__item">
              <div class="switch__title-wrap">
                  <h2 class="switcher__title">Cursor</h2>
              </div>
              <div class="switcher__btn">
                  <select name="cursor-style" id="cursor_style">
                      <option value="1">default</option>
                      <option selected="" value="2">animated</option>
                  </select>
              </div>
          </div>

          <div class="switcher__item">
              <div class="switch__title-wrap">
                  <h2 class="switcher__title">mode</h2>
              </div>
              <div class="switcher__btn mode-type wc-col-2">
                  <button data-mode="light">light</button>
                  <button class="active" data-mode="dark">dark</button>
              </div>
          </div>

          <div class="switcher__item">
              <div class="switch__title-wrap">
                  <h2 class="switcher__title">Language Support</h2>
              </div>
              <div class="switcher__btn lang_dir wc-col-2">
                  <button class="active" data-mode="ltr">LTR</button>
                  <button data-mode="rtl">RTL</button>
              </div>
          </div>
      </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

  <!-- Header area start -->
  <header class="header__area">
      <div class="header__inner">
          <div class="header__logo">
              <a href="{{ url('/') }}">
                  {{-- <img class="logo-primary" src="{{ asset('/frontend/assets/imgs/logo/site-logo-white.png') }}"
                      alt="Site Logo" />
                  <img class="logo-secondary" src="{{ asset('/frontend/assets/imgs/logo/site-logo-white-2.png') }}"
                      alt="Mobile Logo" /> --}}
                      <div class="logo-primary text-white">Shahzaib</div>
                      <div class="logo-secondary text-black">Shahzaib</div>
              </a>
          </div>
          <div class="header__nav-icon">
              <button id="open_offcanvas">
                  <img src="{{ asset('/frontend/assets/imgs/icon/menu-white.png') }}" alt="Menubar Icon" />
              </button>
          </div>

          <div class="header__support">
              <p>Support center <a href="tel:+9587325902">+9 587 325 902</a></p>
          </div>
      </div>
  </header>
  <!-- Header area end -->
