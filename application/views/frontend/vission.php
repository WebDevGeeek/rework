<?php $this->load->view('layout/header'); ?>
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

<style>
    <style>

    /* Global styles */
    body {
        background-color: #fff;
        /* Set the body background to white */
        font-family: 'Russo One', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Vision and Mission Section */
    .vision-mission {
        /* align-items: center; */
        display: flex;
        justify-content: center;
        gap: 30px;
        margin: 50px 0;
        padding: 20px;
    }

    .vision,
    .mission {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        width: 45%;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        text-align: center;
        background-image: url('uploads/cta.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        /* Ensure text is readable on ocean background */
    }

    .vision:hover,
    .mission:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .section-title {
        font-size: 30px;
        font-weight: bold;
        color: black;
        margin-bottom: 20px;
        text-transform: uppercase;
        text-shadow: 2px 2px white;
        /* Heading shadow */
    }

    .vision p,
    .mission p {
        font-size: 24px;
        /* Increased font size */
        line-height: 1.6;
        color: #fff;
        /* Set text color to white for better visibility on the ocean background */
    }

    /* .vision .section-title span,
    .mission .section-title span {
        color: #FC1921; 
    } */

    /* Core Values Section */
    .core-values {
        background-image: url('uploads/cta.jpg');
        /* Add ocean image background */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        border: 3px solid #ffff;
        border-radius: 15px;
        margin: 40px auto;
        width: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        /* Soft shadow for depth */
    }

    .core-values .section-title {
        text-align: center;
        width: 100%;
        font-size: 30px;
        color: black;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: bold;
        background: linear-gradient(135deg, #FC1921, #FC1921);
        -webkit-background-clip: text;
        /* Apply gradient to text */
    }

    /* Larger Circular Value Cards */
    .value {
        background: linear-gradient(135deg, #0d3692, #4f97b5);
        /* Gradient background */
        padding: 30px;
        /* Increased padding */
        border-radius: 50%;
        /* Full circular cards */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        width: 400px;
        /* Increased card size to 350px */
        height: 320px;
        /* Increased card size to 350px */
        margin-bottom: 20px;
        /* Reduced margin between circular cards */
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
        color: #ffffff;
        /* White text color */
        text-align: center;
        position: relative;
        border: 3px solid #ffffff;
        /* Circular border */
        background-clip: padding-box;
        overflow: hidden;
        /* Prevents content from overflowing */
        cursor: pointer;
    }

    .value:hover {
        transform: translateY(-15px) rotateY(10deg);
        /* Rotate on hover for 3D effect */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        background-color: #fc1921;
        /* Background changes to red on hover */
        border-color: #fc1921;
        /* Border color matches the hover background */
    }

    .value-title {
        font-size: 30px;
        /* Adjusted font size for better fit */
        font-weight: bold;
        margin-bottom: 15px;
        color: #000000;
        /* Rest of the text is black */
        text-transform: capitalize;
        /* Title starts with capital letter */
    }


    .value p {
        font-size: 16px;
        /* Adjusted font size for better readability */
        line-height: 1.6;
        color: #ffffff;
        margin: 0;
        /* Ensures text fits within the circle */
    }

    /* Icons for core values */
    .value i {
        font-size: 40px;
        /* Increased icon size */
        margin-bottom: 20px;
        /* Reduced margin for better fit */
        color: #ffffff;
        /* Icon color */
        transition: color 0.3s ease;
    }

    .value:hover i {
        color: #ffffff;
        /* Keeps icon color the same on hover */
    }

    /* Updated icons for Integrity, Empowered, and Care */
    .fa-heart {
        color: #ff5733;
        /* Updated icon color for Care */
    }

    .fa-bolt {
        color: #ffcc00;
        /* Updated icon color for Empowered */
    }

    .fa-shield-check {
        color: #008000;
        /* Updated icon color for Integrity */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        /* .vision-mission {
            flex-direction: column;
            gap: 20px;
            align-items: center;
            margin: 0 0 !important;
        } */

        .vision,
        .mission {
            width: 100%;
            padding: 10px;

        }

        .section-title {
            font-size: 22px !important;
            margin-bottom: 10px;
        }

        .vision p,
        .mission p {
            font-size: 16px !important;
        }

        .value p {
            font-size: 16px !important;
        }

        .core-values {
            flex-direction: column;
            align-items: center;
            width: 100%;
        }



        @media (max-width: 600px) {
            .vision-mission {
                flex-direction: column;
                gap: 20px;
                align-items: center;
                margin: 0 0 !important;
            }

            .value {
                height: auto;
                margin-bottom: 20px !important;
            }
        }
    }
</style>
</style>

<section class="vision-mission">
    <div class="vision">
        <h3 class="section-title"><span>V</span>ision</h3>
        <p>Pioneering a world
            where the ocean and humanity co-exist in harmony.</p>
    </div>
    <div class="mission">
        <h3 class="section-title"><span>M</span>ission</h3>
        <p>Unlocking the ocean's potential
            by supplying unique floating solutions for a sustainable future.</p>
    </div>
</section>

<section class="core-values ">
    <h2 class="section-title">Core <span>V</span>alues</h2>
    <div class="value col-12 col-md-3 m-1">
        <i class="fa fa-users"></i>
        <h3 class="value-title" style="text-transform:none"><span>O</span>ne team</h3>
        <p>Unifying a diverse MODEC through inclusion, equality, trust, collaboration and open communication to cultivate true value creation</p>
    </div>
    <div class="value col-12 col-md-3 m-1">
        <i class="fa fa-handshake-o"></i> <!-- Updated icon for Care -->
        <h3 class="value-title"><span>C</span>are</h3>
        <p>Prioritizing safety in all we do and nurturing our people, our assets, our environment and our legacy</p>
    </div>
    <div class="value col-12 col-md-3 m-1">
        <i class="fa fa-building"></i> <!-- Updated icon for Empowered -->
        <h3 class="value-title"><span>E</span>mpowered</h3>
        <p>Harnessing our pioneering spirit, taking ownership of our decisions and empowering our people to go beyond, together</p>
    </div>
    <div class="value col-12 col-md-3 m-1">
        <i class="fa fa-refresh"></i>
        <h3 class="value-title"><span>A</span>gile</h3>
        <p>Responding swiftly to change with a results-oriented mindset and pursuing continuous improvement</p>
    </div>
    <div class="value col-12 col-md-3 m-1">
        <i class="fa fa-check-circle"></i> <!-- Updated icon for Integrity -->
        <h3 class="value-title" style="text-transform:none">iNtegrity</h3>
        <p>Conducting business in the right way, every day through our compliance and ethics culture, by upholding human rights and acting with professionalism</p>
    </div>
</section>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
<!-- Add FontAwesome 4.7.0 CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>