<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/OFS India/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 07:14:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="TOYO MODEC OFS INDIA PRIVATE LIMITED">
  <!-- <link href="assets/images/favicon/favicon.png" rel="icon"> -->
  <title>TOYO MODEC OFS INDIA PRIVATE LIMITED</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&amp;display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-page="home">


  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->

    <?php $this->load->view('layout/header'); ?>

    <!-- ============================
    Slider
============================== -->
    <div class="video-container" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
      <video autoplay muted loop style="position: absolute; width: 100%; height: 100%; object-fit: fill;">
        <source src="assets/video/twv.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <div class="text-overlay" style="position: absolute; bottom:9px; right: 50px; text-align: right; color: white; width: auto; max-width: 1000px; background: transparent;">
        <h3 class="animate-text my-4 coloringWhite" style="opacity: 0;">Streamlining FPSO Projects with End-to-End Expertise</h3>
        <h3 class="animate-text coloringWhite" style="opacity: 0;">Empowering Excellence in FPSO Services</h3>
        <div class="services animate-text" style="opacity: 0;">
          <h4 class="mt-4 coloringWhite">Our Core Services Include:</h4>
          <ul style="list-style: none; padding: 0;">
            <li class="resizing oneR">FEED Execution</li>
            <li class="resizing oneRR">Detail Engineering</li>
            <li class="resizing">Procurement Support</li>
          </ul>
        </div>
      </div>
    </div>

    <style>
      .video-container {
        background: transparent;
      }

      .text-overlay {
        background: transparent !important;
      }

      .animate-text {
        transition: opacity 1s ease-in-out;
        /* margin: 20px 0; */
        font-size: 2em;
        background: transparent;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }

      .services {
        transition: opacity 1s ease-in-out;
        background: transparent;
      }

      .services h3 {
        font-size: 1.8em;
        /* margin-bottom: 15px; */
        background: transparent;
      }

      .services li {
        font-size: 1.4em;
        margin: 10px 0;
        text-align: right;
        background: transparent;
      }

      @keyframes fadeInOut {
        0% {
          opacity: 0;
        }

        20% {
          opacity: 1;
        }

        80% {
          opacity: 1;
        }

        100% {
          opacity: 0;
        }
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const texts = document.querySelectorAll('.animate-text');
        let currentIndex = 0;

        function showNextText() {
          // Hide all texts
          texts.forEach(text => text.style.opacity = '0');

          // Show current text
          if (currentIndex < texts.length) {
            texts[currentIndex].style.opacity = '1';
            currentIndex++;

            // Wait before showing next text
            setTimeout(showNextText, 4000); // 4 seconds delay between texts
          } else {
            // Reset animation
            currentIndex = 0;
            setTimeout(showNextText, 2000); // 2 seconds delay before restarting
          }
        }

        // Start the animation
        showNextText();
      });
    </script>
    


    <!-- New Added -->
    <section class="py-5 bg-light">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="text-center">
            <div class="col">
              <hr class="w-25 mx-auto hu">
              <h2 class="titlestyling removingMB text-center">About Us</h2>
              <hr class="w-25 mx-auto hd">
            </div>
            <div class="container my-4">
              <div class="about-description">
                <p class="lead mb-3 text-justify">
                  TOYO MODEC OFS India Private Limited (OFS India) is a joint venture company of Toyo Engineering India Private Limited (Toyo India), a subsidiary of Toyo Engineering Corporation, Japan and Offshore Frontier Solutions Pte. Ltd. (OFS), a MODEC Group company.
                  <br><br>OFS India is established as a Global Capability Centre in Bengaluru as a Captive Unit of OFS Singapore, to execute FEED, Detail Engineering and to provide Procurement Support for the Topsides of Floating Production, Storage and Offloading (FPSO) projects, among its primary business activities.<br><br>
                  OFS India is scheduled to commence operations from April 2025.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- New Added Section  -->

    <!-- CTA SECTION -->
    <!-- CTA SECTION -->

    </head>

    <body>
    <div class="cta-section">
        <div class="cta-overlay"></div>
        <div class="cta-content">
          <h1 class="fontsizing coloringWhite mb-0">
            Our <span>V</span>ision, <span>M</span>ission, and <span>C</span>ore Values
          </h1>

          <p class="ocean">OFS India is committed to OCEAN</p>

          <a href="<?php echo base_url(); ?>vision" class="cta-button">Learn More</a>
        </div>
      </div>




      <div class="container my-5 mg99">
        <div class="col">
          <hr class="w-25 mx-auto hu">
          <h2 class="titlestyling removingMB text-center">MD Message</h2>
          <hr class="w-25 mx-auto hd">
        </div>
        <div class="row align-items-center g-5">
          <div class="col-lg-5">
            <div class="position-relative">
              <img
                src="assets/images/22.png"
                alt="Managing Director"
                class="img-fluid rounded shadow-lg" />
              <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                <h5 class="mb-0 coloringWhite">Mr. Nilesh Shirode</h5>
                <p class="small mb-0">TOYO MODEC OFS INDIA PRIVATE LIMITED (OFS India)</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="ps-lg-5">
              <h3 class="display-6 fw-bold mb-4">Driving Innovation Through Values</h3>
              <p class="lead text-muted mb-4">
                At OFS India, our commitment to excellence is guided by our OCEAN values. We believe in creating an environment where innovation thrives, people grow, and success is measured not just by numbers, but by the positive impact we create...
              </p>
              <div class="d-flex gap-3">
              <div className="space-y-2">
          <a href="#" className="inline-block bg-gray-800 text-white font-semibold px-4 py-2 rounded hover:bg-gray-900 transition-colors">
            Read Message →
          </a>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New sectoin from old code -->
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

        <section class="business-section mt-5">
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
      <!-- JOB SECTION -->
      <section class="related-fields py-5">
        <div class="container">
          <div class="row text-center mb-4">
            <div class="col">
              <hr class="w-25 mx-auto hu">
              <h2 class="titlestyling removingMB">Related Fields</h2>
              <hr class="w-25 mx-auto hd">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 ">
              <div class="card border-0 removingShadows ">
                <div class="shadowss">
                  <img src="assets/images/placeholder/31343C.svg" class="card-img-top" alt="Diversity and Inclusion">
                </div>
                <div class="card-body">
                  <a href="<?php echo base_url(); ?>recruitment" class="hoverUnderLine">
                    <h5 class="card-title secondaryTitles mb-0 addingCopy">Recruitment Policy</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="card border-0 removingShadows">
                <div class="shadowss">
                  <img src="assets/images/placeholder/31343C.svg" class="card-img-top" alt="Diversity and Inclusion">
                </div>
                <div class="card-body">
                  <a href="<?php echo base_url(); ?>diversity" class="hoverUnderLine">
                    <h5 class="card-title secondaryTitles mb-0 addingCopy">Diversity and Inclusion</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="card border-0 removingShadows">
                <div class="shadowss">
                  <img src="assets/images/placeholder/31343C.svg" class="card-img-top" alt="Recruitment Scam">
                </div>
                <div class="card-body">
                  <a href="<?php echo base_url(); ?>recruit" class="hoverUnderLine">
                    <h5 class="card-title secondaryTitles mb-0 addingCopy">Recruitment Scam</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- HEre sould be adding the removed code -->


      <!-- till here removed code will be Added -->
      <!-- ========================
      Footer
    ========================== -->
      <?php $this->load->view('layout/footer'); ?>

      <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

      <div class="module__search-container">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
          <input type="text" class="search__input" placeholder="Type Words Then Enter">
          <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/OFS India/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 07:14:22 GMT -->

</html>

<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100">
                    <defs>
                      <linearGradient id="letterGradient" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#fc1921" />
                        <stop offset="45%" stop-color="#fc1921" />
                        <stop offset="45%" stop-color="#ffffff" />
                        <stop offset="55%" stop-color="#ffffff" />
                        <stop offset="55%" stop-color="#0d3692" />
                        <stop offset="100%" stop-color="#0d3692" />
                      </linearGradient>
                    </defs>

                    <text x="20" y="70"
                      font-family="Arial"
                      font-size="42"
                      font-weight="bold"
                      fill="url(#letterGradient)"
                      class="slide__title">
                      Key Operations Starting April 2025
                    </text>
                  </svg> -->

<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100">
                    <defs>
                      <linearGradient id="letterGradient" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#fc1921" />
                        <stop offset="45%" stop-color="#fc1921" />
                        <stop offset="45%" stop-color="#ffffff" />
                        <stop offset="55%" stop-color="#ffffff" />
                        <stop offset="55%" stop-color="#0d3692" />
                        <stop offset="100%" stop-color="#0d3692" />
                      </linearGradient>
                    </defs>

                    <text x="20" y="70"
                      font-family="Arial"
                      font-size="42"
                      font-weight="bold"
                      fill="url(#letterGradient)"
                      class="slide__title">
                      TOYO MODEC OFS India Private Limited
                    </text>
                  </svg> -->

<!-- 
                  FOOTER CODE
                  
                  
                  
                  
                  
                  -->