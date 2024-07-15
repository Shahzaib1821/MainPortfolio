@extends('layouts.layout1')

@section('title', 'Contact - The Ridgeline Marketing')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Contact area start -->
        <section class="">
            <div class="custom-container">
                <img src="img/shape.png" class="square" alt="" />
                <div class="form">
                  <div class="contact-info">
                    <h3 class="sec-title text-white animation__char_come">Let's get in touch</h3>
                    <p class="text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                      dolorum adipisci recusandae praesentium dicta!
                    </p>

                    <div class="info">
                      <div class="information">
                        <i class="fas fa-map-marker-alt"></i> &nbsp; &nbsp;

                        <p class="text-white animation__char_come">Karachi, Pakistan </p>
                      </div>
                      <div class="information">
                        <i class="fas fa-envelope"></i> &nbsp; &nbsp;
                        <p class=" animation__char_come"><a href="mailto:shahzaib1821@gmail.com" class="text-white" >shahzaib1821@gmail.com</a></p>
                      </div>
                      <div class="information">
                        <i class="fas fa-phone"></i>&nbsp;&nbsp;
                        <p class="animation__char_come"><a href="tel:+923202495995" class="text-white">923202495995</a></p>
                      </div>
                    </div>

                    <div class="social-media">
                      <p class="animation__char_come text-white">Connect with us :</p>
                      <div class="social-icons">
                        <a href="#">
                          <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-whatsapp"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="index.html" autocomplete="off">
                      <h3 class="title animation__char_come">Contact us</h3>
                      <div class="custom-input-custom-container">
                        <input type="text" name="name" class="custom-input" />
                        <label for="">Name</label>
                        <span>Name</span>
                      </div>
                      <div class="custom-input-custom-container">
                        <input type="email" name="email" class="custom-input" />
                        <label for="">Email</label>
                        <span>Email</span>
                      </div>
                      <div class="custom-input-custom-container">
                        <input type="tel" name="phone" class="custom-input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                      </div>
                      <div class="custom-input-custom-container">
                        <select name="services" class="form-select bg-transparent text-white p-2 ps-4" id="">
                            <option value="" class="bg-black">Select Service</option>
                            <option value="service1" class="bg-black">Website Development</option>
                            <option value="service2" class="bg-black">Custom Software Development</option>
                            <option value="service3" class="bg-black">Wordpress Development</option>
                            <option value="service3" class="bg-black">Website Revamping & Bugs Fixex</option>
                            <option value="service3" class="bg-black">Single Page Application</option>
                            <option value="service3" class="bg-black">Web Application Development</option>
                            <option value="service3" class="bg-black">Others</option>
                          </select>
                        </select>
                        {{-- <label for="">Select Service</label> --}}
                      </div>
                      <div class="custom-input-custom-container textarea">
                        <textarea name="message" class="custom-input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                      </div>
                      <input type="submit" value="Send" class="btn" />
                    </form>
                  </div>
                </div>
              </div>
        </section>
        <!-- Contact area end -->

      </main>

@endsection
