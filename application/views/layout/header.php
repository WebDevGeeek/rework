<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="OFS INDIA- Factory and Manufacturing Html Template">
  <!-- <link href="assets/images/favicon/favicon.png" rel="icon"> -->
  <title>OFS INDIA- Factory and Manufacturing Html Template</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&amp;display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap" rel="stylesheet">

<style>
  .nav__item-link {
    position: relative;
    text-decoration: none;
    color: inherit;
  }

  .nav__item-link::after {
    content: attr(data-popover);
    /* Use the data-popover attribute for content */
    position: absolute;
    top: 100%;
    /* Position below the link */
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.8);
    /* Background color */
    color: white;
    /* Text color */
    padding: 5px 10px;
    /* Padding for the popover */
    border-radius: 5px;
    /* Rounded corners */
    white-space: nowrap;
    /* Prevent text wrapping */
    opacity: 0;
    /* Initially hidden */
    visibility: hidden;
    /* Make sure it's not interactive */
    transition: opacity 0.3s ease, visibility 0.3s ease;
    /* Smooth transition */
    z-index: 10;
    /* Ensure it appears above other elements */
    pointer-events: none;
    /* Prevent interaction */
  }

  .nav__item-link:hover::after {
    opacity: 1;
    /* Show the popover */
    visibility: visible;
  }
</style>
<header id="header" class="header header-transparent">
  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <!-- <img src="assets/images/loader/both.jpg" class="logo-dark" alt="logo"> -->
        <img src="assets/images/loader/toynew.png" class="logo-light" alt="logo" style="max-width:16%;">
        <img src="assets/images/loader/modec_dark.png" class="logo-light" alt="logo" style="max-width:42%;">

        <img src="assets/images/loader/toyo.jpg" class="logo-dark" alt="logo">
        <!-- new -->
        <!-- <img src="assets/images/loader/both.jpg" class="logo-dark" alt="logo"> -->

        <img src="assets/images/loader/modec_dark.png" class="logo-dark" alt="logo" style="max-width:42%;">

      </a>
      <button class="navbar-toggler" type="button">


        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav__item with-dropdown">
            <a href="<?php echo base_url(); ?>" class="dropdown-toggle nav__item-link active">Home</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <!-- <ul class="dropdown-menu">
                  <li class="nav__item"><a href="index.html" class="nav__item-link">Home Moderm</a></li>
                  <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home classic</a></li>
                </ul> -->
          </li>
          <li class="nav__item with-dropdown">
            <a href="<?php echo base_url(); ?>careers" class="dropdown-toggle nav__item-link">Careers</a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <!-- <ul class="dropdown-menu">
                  <li class="nav__item"><a href="about-us.html" class="nav__item-link">About Us</a></li>
                  <li class="nav__item"><a href="why-us.html" class="nav__item-link">Why Choose Us</a></li>
                  <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">Leadership Team</a></li>
                  <li class="nav__item"><a href="pricing.html" class="nav__item-link">Pricing & Plans</a></li>
                  <li class="nav__item"><a href="faqs.html" class="nav__item-link">Help & FAQs</a></li>
                  <li class="nav__item"><a href="careers.html" class="nav__item-link">careers</a></li>
                </ul> -->
          </li>
          <!-- <li class="nav__item">
            <a href="#" class="nav__item-link" data-popover="Coming Soon">News</a>
          </li> -->
          <li class="nav__item">
            <a href="#" class="nav__item-link" data-popover="Coming Soon">Projects</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__item-link" data-popover="Coming Soon">Sustainability</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__item-link" data-popover="Coming Soon">Contacts</a>
          </li>

        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <div class="navbar-modules">
        <ul class="list-unstyled d-flex align-items-center modules__btns-list">
          <!-- <li><a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a></li> -->
          <!-- <li class="d-none d-lg-block"><a href="request-quote.html"
                  class="btn btn__primary btn__bordered module__btn-request">
                  <span>Get A Quote</span><i class="icon-arrow-right"></i>
                </a></li> -->
          <li class="d-none d-lg-block">
            <!-- <div class="module__btn module__btn-phone d-flex align-items-center">
                  <i class="icon-phone"></i>
                  <a href="tel:5565454117">55 654 541 17</a>
                </div> -->
          </li>
        </ul><!-- /.modules-wrapper -->
      </div><!-- /.navbar-modules -->
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
</header><!-- /.Header -->