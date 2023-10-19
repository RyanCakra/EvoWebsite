<?php
if (!$this->session->has_userdata('USERNAME')) {
  redirect(base_url() . 'index.php/dashboard');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EVO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.7.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="#">EVO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Events</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li> &nbsp; &nbsp; &nbsp; &nbsp;</li>
          <?php
          if ($this->session->has_userdata('USERNAME')) {
            echo $this->session->userdata('USERNAME');
            echo '<li?><a class="nav-link scrollto" href="' . base_url('index.php/') . '">Logout</a></li>';
          } else {
          ?>
            <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/login') ?>">Login</a></li>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>EVO</span></h1>
      <h2>Hello we are EVO Unique concept and Client satisfaction is our top priority !</h2>
      <?php
      if ($this->session->userdata('ROLE') == 'administrator') {
      ?>
        <a href="<?php echo base_url('index.php/kegiatan') ?>" class="btn-get-started scrollto bg-danger">Backend</a>
      <?php
      }
      ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-trophy"></i></div>
              <h4><a href="">Event Promotion Support</a></h4>
              <ul class="text-start">
                <li>Poster, Flyer and Banner Production</li>
                <li>Photo and Video Documentation</li>
                <li>Event Permits</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-headphone"></i></div>
              <h4><a href="">Technical Event Production</a></h4>
              <ul class="text-start">
                <li>Exhibition Construction and Equipment</li>
                <li>Audio, Visual and Lighting Equipments</li>
                <li>Stage Construction and Equipment</li>
                <li>Multimedia Broadcasting System</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-laptop"></i></div>
              <h4><a href="">Event Organizing</a></h4>
              <ul class="text-start">
                <li>Concept & Creative Development</li>
                <li>Production Plan</li>
                <li>Event Management</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

     <!-- ======= About Section ======= -->
		 <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo base_url('assets/img/abouts.jpg')?>" class="img-fluid " alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p>
						EVO, an event organizer formed by performers and content creators, offers advantages such as passion for performances and event strategy preparation. Their experience in the show world helps them save expenses for clients. With a team of creative young people with imagination and high work capacity, EVO is trusted by various products and institutions to hold their events. They have a PT. in event organizer and film making, and through PT Suara Sanara Champion, they demonstrate their seriousness in the event industry.
					</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <br>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-clipboard"></i>
              <h4><a href="#">Pelatihan</a></h4>
              <p>Kami siap membantu menangani acara pelatihan anda berjalan hingga sukses berjalan dengan lancar</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-people"></i>
              <h4><a href="#">Seminar</a></h4>
              <p>Kami siap membantu menangani acara seminar anda berjalan hingga sukses berjalan dengan lancar</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-award"></i>
              <h4><a href="#">Event Olahraga</a></h4>
              <p>Kami siap membantu menangani acara event olahraga anda berjalan hingga sukses berjalan dengan lancar</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-shop"></i>
              <h4><a href="#">Bazaar</a></h4>
              <p>Kami siap membantu menangani acara bazaar anda berjalan hingga sukses berjalan dengan lancar</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Workshop</a></h4>
              <p>Kami siap membantu anda untuk menangani event workshop anda sampai acara berjalan dengan lancar dan semua materi tersampaikan.</p>
            </div>
          </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Events</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php
            foreach ($list_kegiatan as $obj) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="<?php echo base_url('uploads/'.$obj->foto_flyer) ?>" class="img-fluid" alt="">
                  <a href="<?php echo base_url('uploads/'.$obj->foto_flyer) ?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h6><?= $obj->judul?></h6>
                  <p>
                    <a href="<?php echo base_url('/index.php/home/view?id='. $obj->id)?>" role="button">Daftar</a>
                  </p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Layanan, suara, sistem cahaya yang hebat yang disediakan oleh EVO, penanggung jawab yang sangat baik dan profesional
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo base_url('assets/img/testimonials/testimonials-1.jpg')?>" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kru yang ramah dengan layanan yang luar biasa! Sangat direkomendasikan untuk Anda semua!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo base_url('assets/img/testimonials/testimonials-2.jpg')?>" class="testimonial-img" alt="">
                <h3>Clara Willsmith</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tim teknis yang sangat berpengalaman. Sangat membantu dan fleksibel. Terima kasih karena sangat detail dalam acara saya. Sangat dianjurkan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo base_url('assets/img/testimonials/testimonials-3.jpg')?>" class="testimonial-img" alt="">
                <h3>Carla Johansson</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Layanan yang diberikan luar biasa dan semua permintaan terpenuhi seperti yang diminta. Pasti akan melibatkan mereka lagi untuk acara mendatang.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo base_url('assets/img/testimonials/testimonials-4.jpg')?>" class="testimonial-img" alt="">
                <h3>Michael Owen</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Layanan, suara, sistem cahaya yang hebat yang disediakan oleh EVO, penanggung jawab yang sangat baik dan profesional
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo base_url('assets/img/testimonials/testimonials-5.jpg')?>" class="testimonial-img" alt="">
                <h3>Brie Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
        </div>

				<div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team/brandon.jpeg')?>" alt="">
              <h4>Brandon Lucy</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team/tomas.jpeg')?>" alt="">
              <h4>Thomas ludwig</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team/edward.jpg')?>" alt="">
              <h4>Edward</h4>
              <span>Executive Producer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team/luthfi.jpg')?>" alt="">
              <h4>luthfi hartanto</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jalan Ki hajar joko susanto 29<br>Palembang 19220</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>infoio@event.io.id<br>evo@event.io.id</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>(021) 7863191<br>(021) 7865631</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

				<div class="col-lg-3 col-md-6 footer-contact">
            <h3>EVO</h3>
            <p>
              Jalan Ki hajar joko susanto 29<br>
              Palembang 19220 <br>
              <strong>Phone:</strong> (021) 7863191<br>
              <strong>Email:</strong> evo@event.io.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelatihan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Event olah Raga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Seminar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Workshop</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Bazaar</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

		<div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>EVO</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>
