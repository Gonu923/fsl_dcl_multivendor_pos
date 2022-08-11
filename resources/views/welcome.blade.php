@extends('layouts.landing')
@section('context')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/slider-4.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets//img/slider-3.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets//img/slider-2.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Install App & Enjoy the Big Discount</h1>
            <h2>Dhaka Choice এর দুর্দান্ত সব অফার পেতে আপনার অ্যাপটি ডাউনলোড বা আপডেট করুন। আপনার সকল কেনাকাটার জন্য সেরা প্ল্যাটফর্ম।</h2>
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/add_img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>App Features</h2>
          <p>অ্যাপটি ইনস্টল করুন এবং সর্বোচ্চ ছাড়ে আপনার প্রয়োজনীয় পণ্যটি কিনুন। এছাড়াও, আপনি আমাদের অ্যাপের মাধ্যমে সব ধরনের হোম পরিষেবা পাবেন।</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-5 f-box icon-box" data-aos="fade-up">
                  <i class="bx bxl-shopify"></i>
                  <h4>E-commerce</h4>
                  <p>You can get attractive discounts by ordering any product</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 f-box icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bxs-shopping-bags"></i>
                  <h4>Buy and Selling</h4>
                  <p>You can sell or buy your products at home with just one app</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 f-box icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bxs-home-circle"></i>
                  <h4>Home Service</h4>
                  <p>You can get any of your home services with the lowest fee through our app</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 f-box icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-cycling"></i>
                  <h4>Ride Share</h4>
                  <p>Save time and reach your destination on time at an affordable price</p>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-5 f-box icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-plus-medical"></i>
                  <h4>Doctor Services</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
                 <div class="col-md-1"></div>
                <div class="col-md-5 f-box icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-food-menu"></i>
                  <h4>Food</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/mibile font.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>All the benefits that you will get with the help of Dhaka Choice Ltd app. Some of its features and samples of our services.</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/img/gallery/1. Customer Language select.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/1. Customer Language select.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/2. sign in or registration.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/2. sign in or registration.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/3. sign in.png"><img src="assets/img/gallery/3. sign in.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/4. registration.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/4. registration.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/5. Customer Dashboard daily.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/5. Customer Dashboard daily.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/6. Customer's Side menubar.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/6. Customer's Side menubar.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/7. QR Code.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/7. QR Code.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/9. search by Shop Location.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/9. search by Shop Location.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/10. search by disount shop.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/10. search by disount shop.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/12. Shop owner connected grocery.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/12. Shop owner connected grocery.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/13. after discount grocery.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/13. after discount grocery.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/14. Payment done.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/14. Payment done.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

   <!-- ======= content Section ========= -->
   <section class="Content_section">
    <div class="row text-center">
      <div class="col-md"></div>
       <div class="col-md-3 content">
        <div class="card">
          <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
          <div class="card-title">
            <h4>Enhance Productivity</h4>
          </div>
          <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
          </div>
        </div>
       </div>
       <div class="col-md"></div>
       <div class="col-md-3 ">
        <div class="card">
          <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
          <div class="card-title">
            <h4>Enhance Productivity</h4>
          </div>
          <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
          </div>
        </div>
       </div>
       <div class="col-md"></div>
       <div class="col-md-3 ">
        <div class="card">
          <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
          <div class="card-title">
            <h4>Enhance Productivity</h4>
          </div>
          <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
          </div>
        </div>
       </div>
       <div class="col-md"></div>
    </div>
    <br>
    <div class="row text-center">
      <div class="col-md"></div>

       <div class="col-md-3">
          <div class="card">
            <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
            <div class="card-title">
            <h4>Enhance Productivity</h4>
            </div>
            <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
            </div>
          </div>
       </div>
       <div class="col-md"></div>
       <div class="col-md-3 ">
          <div class="card">
           <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
           <div class="card-title">
            <h4>Enhance Productivity</h4>
           </div>
           <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
           </div>
          </div>
        </div>
       <div class="col-md"></div>
       <div class="col-md-3 ">
          <div class="card">
            <div class="icon mx-auto rounded-circle"><i class="fas fa-hand-holding-usd "></i></div>
            <div class="card-title">
            <h4>Enhance Productivity</h4>
            </div>
            <div class="card-body">
            <p>The four of functions of management included planning deciding upon on business goals the methods</p>
            </div>
          </div>
        </div>
       <div class="col-md"></div>
    </div>
   </section>
   <!-- ======= End content Section ========= -->

 
  
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>contact@example.com<br>info@example.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection