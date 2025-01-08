 <!-- New Location Section -->
      <style>
        .location-header {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          padding: 80px 0;
          text-align: center;
          margin-bottom: 40px;
        }

        .location-image {
          width: 100%;
          height: 350px;
          object-fit: cover;
          transition: transform 0.3s ease;
          cursor: pointer;
          border-radius: 10px;
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .location-image:hover {
          transform: scale(1.05);
        }

        .image-container {
          margin-bottom: 30px;
        }
      </style>
      </head>

      <body>
        <div class="container-fluid location-header" style="background: linear-gradient(45deg, #fc1921 0%, #ffffff 50%, #0d3692 100%); padding: 3rem 0;">
          <div class="container">
            <h1 class="display-4 fw-bold mb-4" style="color: black; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Our Office Location</h1>
          </div>
        </div>
        <div class="container">
          <div class="portfolio-carousel">
            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="2" data-slide-sm="1"
              data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true"
              data-speed="800">
            
             
            
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/loader/slider/Godrej Centre 06.png" alt="portfolio img img-fluid">
                </div>
                <!-- <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="#">Highway Energy Station</a></h4>
                    <div class="portfolio__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div>
                  </div> -->
              </div><!-- /.portfolio-item -->
             
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/loader/slider/Godrej Centre 08.png" alt="portfolio img img-fluid">
                </div>
                <!-- <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="#">Highway Energy Station</a></h4>
                    <div class="portfolio__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div>
                  </div> -->
              </div><!-- /.portfolio-item -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/loader/slider/Godrej Centre 09.png" alt="portfolio img img-fluid">
                </div>
                <!-- <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="#">Highway Energy Station</a></h4>
                    <div class="portfolio__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div>
                  </div> -->
              </div><!-- /.portfolio-item -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/loader/slider/Godrej Centre 10.png" alt="portfolio img img-fluid">
                </div>
                <!-- <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="#">Highway Energy Station</a></h4>
                    <div class="portfolio__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div>
                  </div> -->
              </div><!-- /.portfolio-item -->
             
             
            </div><!-- /.carousel -->
          </div>
        </div>


        <!-- <div class="container">
          <div class="row">
            <div class="col-md-6 image-container">
              <img src="assets/images/loader/l1.jpg" alt="Location 1" class="location-image">
            </div>
            <div class="col-md-6 image-container">
              <img src="assets/images/loader/slider/Godrej Centre 00.png" alt="Location 2" class="location-image">
            </div>
            <div class="col-md-6 image-container">
              <img src="assets/images/loader/l3.jpg" alt="Location 3" class="location-image">
            </div>
            <div class="col-md-6 image-container">
              <img src="assets/images/loader/l4.jpg" alt="Location 4" class="location-image">
            </div>
          </div>
        </div> -->

        <!-- New location Section Ends -->
        <!-- CTA SECTION ENDED -->
        <!-- ========================
      About Layout 2
    =========================== -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <style>
          /* Full-width section styles */
          .business-section {
            text-align: center;
            padding: 60px 0;
            background: linear-gradient(135deg, #4f97b5, #0d3692);
            color: #fff;
            width: 100%;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-top: 65px;
          }

          .business-section h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
          }

          .business-section p {
            font-size: 18px;
            color: #d3d3d3;
            margin-bottom: 40px;
          }

          /* Card styles */
          .card {
            position: relative;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            cursor: pointer;
            background-color: #fff;
          }

          /* Card Image */
          .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
          }

          .card:hover img {
            transform: scale(1.1);
          }

          /* Card Overlay */
          .card h4 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
          }





          /* Responsive Design */
          @media (max-width: 768px) {
            .business-section p {
              font-size: 16px;
            }
          }


        </style>

        <section class="business-section">
          <h2>FPSO Business</h2>
          <!-- <p>Global Leading Player in Connecting Ocean and Humanity</p> -->

          <div class="">
            <div class="row">
              <!-- Card 1 -->
              <div class="col-12 col-md-4 mb-4">
                <div class="card">
                  <img src="uploads/FPSO_Guanabara_MV31.jpg" alt="FPSO">
                  <h4>FEED Execution</h4>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-12 col-md-4 mb-4">
                <div class="card">
                  <img src="uploads/center.png" alt="Floating Offshore Wind">
                  <h4>Detailed Engineering</h4>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-12 col-md-4 mb-4">
                <div class="card">
                  <img src="uploads/MV34.jpg" alt="Digital & Analytics">
                  <h4>Procurement Support</h4>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Add Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Footer CODe -->
        <footer id="footer" class="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 footer__widget footer__widget-about">
                  <h6 class="footer__widget-title">Quick Contact</h6>
                  <div class="footer__widget-content">
                    <p class="color-gray">If you have any questions or need help, feel free to contact with our team.</p>
                    <p class="footer__contact-phone">
                      <i class="icon-phone"></i>
                    </p>
                    <ul class="social__icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.col-xl-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 offset-xl-1 footer__widget footer__widget-nav">
                  <h6 class="footer__widget-title">Company</h6>
                  <div class="footer__widget-content">
                    <!-- <nav>
                      <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Meet Our Team</a></li>
                        <li><a href="#">News & Media</a></li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Careers</a></li>
                      </ul>
                    </nav> -->
                  </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 footer__widget footer__widget-nav">
                  <h6 class="footer__widget-title">Industries</h6>
                  <div class="footer__widget-content">
                    <!-- <nav>
                      <ul class="list-unstyled">
                        <li><a href="#">Retail & Consumer</a></li>
                        <li><a href="#">Sciences & Healthcare</a></li>
                        <li><a href="#">Industrial & Chemical</a></li>
                        <li><a href="#">Power Generation</a></li>
                        <li><a href="#">Food & Beverage</a></li>
                        <li><a href="#">Oil & Gas</a></li>
                      </ul>
                    </nav> -->
                  </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-12 col-md-10 col-lg-6 col-xl-4 footer__widget footer__widget-newsletter">
                  <div class="footer__widget-content">
                    <p>Sign up for industry alerts, our latest news, thoughts, and insights from OFS India.</p>
                    <form class="widget__newsletter-form">
                      <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Your Email Address">
                        <button type="submit" class="btn btn__primary btn__hover2">
                          <i class="icon-arrow-right"></i>
                        </button>
                      </div>
                    </form>
                  </div><!-- /.footer-widget-content -->
                  <!-- <p class="text-right fz-13 mt-20 mb-0">You may withdraw your consent at any time!</p> -->
                </div><!-- /.col-xl-4 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.footer-top -->
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                  <img src="assets/images/loader/both.jpg" alt="logo">
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-sm-12 col-md-9 col-lg-9 text-right">
                  <div class="footer__copyright">
                    <nav>
                      <ul class="footer__copyright-links list-unstyled d-flex flex-wrap justify-content-end">
                        <li><a href="#">Terms & Conditions </a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                      </ul>
                    </nav>

                  </div><!-- /.Footer-copyright -->
                </div><!-- /.col-lg-9 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.Footer-bottom -->
        </footer><!-- /.Footer -->