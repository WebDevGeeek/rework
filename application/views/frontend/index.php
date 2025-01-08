<?php
// Save this file as index.php or any desired name
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OFS India</title>

  <style>
    /* Modal Styling */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black background with opacity */
      padding-top: 60px;
    }

    /* Modal Content */
    .modal-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
      max-width: 600px;
      text-align: center;
    }
    @media screen and (max-width:678px) {
      .modal-content {
      padding: 49px 10px;
      }

    }

    /* .modal-header,
    .modal-footer {
      padding: 10px;
    } */

    .modal-header {
      font-size: 20px;
      font-weight: bold;
    }

    .modal-footer {
      display: flex;
      justify-content: space-around;
    }

    .modal-footer button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .modal-footer .cancel {
      background-color: #ccc;
    }

    .modal-footer .ok {
      background-color: #fc1921;
      color: white;
    }
  </style>



  <style>
    /* ------- Osmo [https://osmo.supply/] ------- */
    /* Osmo UI: https://slater.app/10324/23333.css */

    body {
      background-color: var(--color-neutral-900);
      color: var(--color-light);
      font-size: var(--size-font);
      margin: 0;
      padding: 0;
    }

    .cloneable {
      padding: var(--container-padding);
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      display: flex;
      position: relative;
    }

    .parallax__fade {
      --color-dark-rgb: 0, 0, 0;
      background: linear-gradient(to top,
          rgba(var(--color-dark-rgb), 1) 0%,
          rgba(var(--color-dark-rgb), 0.738) 19%,
          rgba(var(--color-dark-rgb), 0.541) 34%,
          rgba(var(--color-dark-rgb), 0.382) 47%,
          rgba(var(--color-dark-rgb), 0.278) 56.5%,
          rgba(var(--color-dark-rgb), 0.194) 65%,
          rgba(var(--color-dark-rgb), 0.126) 73%,
          rgba(var(--color-dark-rgb), 0.075) 80.2%,
          rgba(var(--color-dark-rgb), 0.042) 86.1%,
          rgba(var(--color-dark-rgb), 0.021) 91%,
          rgba(var(--color-dark-rgb), 0.008) 95.2%,
          rgba(var(--color-dark-rgb), 0.002) 98.2%,
          transparent 100%);
    }

    .osmo-icon-svg {
      width: 8em;
      position: relative;
    }

    .parallax__header {
      z-index: 2;
      padding: var(--section-padding) var(--container-padding);
      justify-content: center;
      align-items: center;
      min-height: 100svh;
      display: flex;
      position: relative;
    }

    .parallax {
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .parallax__content {
      padding: var(--section-padding) var(--container-padding);
      justify-content: center;
      align-items: center;
      min-height: 100svh;
      display: flex;
      position: relative;
    }

    .cover {
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .parallax__visuals {
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 120%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .parallax__placeholder {
      z-index: 0;
      opacity: 0;
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .parallax__layers {
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      overflow: hidden;
    }

    .cover-copy {
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .parallax__fade {
      z-index: 30;
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 20%;
      position: absolute;
      bottom: 0;
      left: 0;
    }

    /* styles.css */
    .toyo-apply-btn {
      background-color: #fc1921;
      border: 2px solid transparent;
      font-size: clamp(0.75rem, 2.5vw, 1rem);
      color: white;
      text-transform: uppercase;
      padding: 10px;
      text-decoration: none;
      border-radius: 50px;
      /* equivalent to rounded-pill */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .toyo-apply-btn:hover {
      background-color: transparent;
      border-color: #fc1921;
      color: #fc1921;
    }
    }

    .parallax__black-line-overflow {
      z-index: 20;
      background-color: var(--color-black);
      width: 100%;
      height: 2px;
      position: absolute;
      bottom: -1px;
      left: 0;
    }

    .parallax__title {
      pointer-events: auto;
      text-align: center;
      text-transform: none;
      margin-top: 0;
      margin-bottom: 0.1em;
      margin-right: 0.075em;
      font-family: 'Russo One', sans-serif;
      font-size: 10vw;
      font-weight: 800;
      line-height: 1;
      position: relative;
      color: white;
    }

    .parallax__title_second {
      pointer-events: auto;
      text-align: center;
      text-transform: none;
      margin-top: 0;
      margin-bottom: 0.1em;
      margin-right: 0.075em;
      font-family: 'Russo One', sans-serif;
      font-size: 9vw;
      font-weight: 800;
      line-height: 1;
      position: relative;
      color: white;
    }

    .texting {
      font-family: 'Russo One', sans-serif;
    }

    @media (min-width: 768px) {
      .parallax__title {
        pointer-events: auto;
        text-align: center;
        text-transform: none;
        margin-top: 0;
        margin-bottom: 0.1em;
        margin-right: 0.075em;
        font-family: 'Russo One', sans-serif;
        font-size: 5vw;
        font-weight: 800;
        line-height: 1;
        position: relative;
        color: white;
      }

      .parallax__title_second {
        pointer-events: auto;
        text-align: center;
        text-transform: none;
        margin-top: 0;
        margin-bottom: 0.1em;
        margin-right: 0.075em;
        font-family: 'Russo One', sans-serif;
        font-size: 5vw;
        font-weight: 800;
        line-height: 1;
        position: relative;
        color: white;
      }

    }

    .parallax__radial-gradient {
      z-index: 10;
      background-image: radial-gradient(circle farthest-corner at 50% 50%,
          transparent,
          var(--color-black));
      opacity: 0.5;
      pointer-events: none;
      mix-blend-mode: multiply;
      position: fixed;
      inset: 0;
    }

    .parallax__layer-title {
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100svh;
      display: flex;
      flex-direction: column;
      position: absolute;
      top: 0;
      left: 0;
    }

    .parallax__layer-img {
      pointer-events: none;
      object-fit: cover;
      width: 100%;
      max-width: none;
      height: 117.5%;
      position: absolute;
      top: -17.5%;
      left: 0;
    }

    .removewidth {
      width: none !important;
    }

    .parallax__layer-img.is-third {
      top: -20%;
    }

    @font-face {
      font-family: 'Russo One', sans-serif;
      src: url("https://cdn.prod.website-files.com/671752cd4027f01b1b8f1c7f/6717e399d30a606fed425914_PPNeueCorp-WideUltrabold.woff2") format("woff2");
      font-weight: 800;
      font-style: normal;
      font-display: swap;
    }

    .wrapper,
    .content {
      position: relative;
      width: 100%;
      z-index: 1;
      overflow: hidden;
    }

    .content {
      overflow-x: hidden;
    }

    .content .section {
      width: 100%;
      height: 100vh;
    }

    .content .section.hero {
      background-image: url("assets/images/loader/02.png");
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .center-it {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .image-container {
      width: 100%;
      height: 100vh;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 2;
      perspective: 500px;
      overflow: hidden;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-position: center center;
    }

    .for-mobile {
      display: none;
    }

    .for-desktop {
      display: block;
    }

    @media screen and (max-width:600px) {

      .for-mobile {
        display: block !important;
      }

      .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
      }

      .for-desktop {
        display: none !important;
      }


    }

    .toyo-color {
      color: white;
      ;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <section class="section hero"></section>
    </div>
    <div class="image-container">
      <img src="assets/images/loader/mb2.png" alt="image" class="for-mobile img-fluid">
      <img src="assets/images/loader/finalbanner.png" alt="image" class="for-desktop img-fluid">

    </div>
  </div>

  <div class="parallax">
    <section class="parallax__header">
      <div class="parallax__visuals">
        <div class="parallax__black-line-overflow"></div>
        <div data-parallax-layers class="parallax__layers">
          <img src="assets/images/comingsoon/sea.png"
            loading="eager" width="800" data-parallax-layer="1" alt="" class="parallax__layer-img removewidth">
          <img src="assets/images/loader/03.png"
            loading="eager" width="800" data-parallax-layer="2" alt="" class="parallax__layer-img">
          <div data-parallax-layer="3" class="parallax__layer-title">
          <h2
  class="parallax__title_second toyo-color texting responsive-padding"
  style="
    font-size: clamp(1.5rem, 4vw, 4.5rem);
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Dark shadow */
    font-weight: bold;
  ">
  TOYO MODEC OFS INDIA PRIVATE LIMITED
</h2>

          </div>
          <img src="assets/images/comingsoon/boat3.png"
            loading="eager" width="800" data-parallax-layer="4" alt="" class="parallax__layer-img">
        </div>
        <div class="parallax__fade"></div>
      </div>
    </section>
    <section class="parallax__content">
      <section
        class="coming-soon d-flex align-items-center justify-content-center text-center"
        style="
    height: 100vh;
    width: 100vw;
    position: relative;
    background: url('assets/images/loader/water.jpg') no-repeat center center/cover;
    color: white;
  ">
        <div
          class="container center-it"
          style="
      position: relative;
      text-align: center;
      margin-top: 10%;
      padding:0 20px;
    ">
          <p
            class="lead mt-4"
            style="color: #f1f1f1; font-size: clamp(1rem, 2vw, 1.5rem); ">
            <span style="font-size: clamp(2rem, 2vw, 1.5rem);">Are you ready to take your career to the next level?</span>
            <br>
          <p class="ofs" style="padding:10px; font-size: clamp(14px, 2vw, 1.5rem);"> At OFS India, we offer exciting opportunities with a collaborative work environment, where innovation and teamwork drive our success.
           <br><span style="font-size: clamp(2rem, 2vw, 1.5rem); ">  Explore Multiple Career Opportunities and Apply from the link below </span></p>
          </p>
          <a href="javascript:void(0)" id="applyBtn" class="btn btn-primary btn-lg mt-5 px-5 py-3 toyo-apply-btn ">
            <i class="fas fa-users mr-2"></i> APPLY NOW
          </a>
        </div>
      </section>

    </section>


    </section>
  </div>





  <!-- Modal -->
  <div id="applyModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Important Notice</h2>
      </div>
      <div class="modal-body">
        <p>OFS India is temporarily using the Toyo India website for recruitment. By clicking the button below, you will be redirected to the Toyo India recruitment portal. Please note that the positions listed for Bangalore are for OFS India, even though the organization name displayed is "Toyo Engineering India Private Limited".</p>
      </div>
      <div class="modal-footer">
        <button class="cancel">Cancel</button>
        <button class="ok">OK</button>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
  <script>
    // Ensure GSAP and ScrollTrigger are loaded
    gsap.registerPlugin(ScrollTrigger);

    // Wait until the DOM is ready
    document.addEventListener("DOMContentLoaded", () => {
      gsap.timeline({
          scrollTrigger: {
            trigger: ".wrapper",
            start: "top top",
            end: "+=150%",
            pin: true,
            scrub: true,
            markers: false
          }
        })
        .to("img", {
          scale: 2,
          z: 350,
          transformOrigin: "center center",
          ease: "power1.inOut"
        })
        .to(".section.hero", {
          scale: 1.1,
          transformOrigin: "center center",
          ease: "power1.inOut"
        }, "<");

      document.querySelectorAll("[data-parallax-layers]").forEach((triggerElement) => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: triggerElement,
            start: "0% 0%",
            end: "100% 0%",
            scrub: 1,
            markers: false
          }
        });

        const layers = [{
            layer: "1",
            yPercent: 70
          },
          {
            layer: "2",
            yPercent: 55
          },
          {
            layer: "3",
            yPercent: 40
          },
          {
            layer: "4",
            yPercent: 10
          }
        ];

        layers.forEach((layerObj, idx) => {
          tl.to(
            triggerElement.querySelectorAll(`[data-parallax-layer="${layerObj.layer}"]`), {
              yPercent: layerObj.yPercent,
              ease: "none"
            },
            idx === 0 ? undefined : "<"
          );
        });
      });

      const lenis = new Lenis({
        smoothScroll: true,
        smoothWheel: true,
        touch: true
      });
      lenis.on("scroll", ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      ScrollTrigger.addEventListener("refresh", () => lenis.update());
      ScrollTrigger.refresh();
    });
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById("applyModal");

    // Get the button that opens the modal
    var btn = document.getElementById("applyBtn");

    // Get the <span> element that closes the modal
    var cancelBtn = document.querySelector(".cancel");
    var okBtn = document.querySelector(".ok");

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on "Cancel", close the modal
    cancelBtn.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks on "OK", redirect to the recruitment portal
    okBtn.onclick = function() {
      window.location.href = "https://career.toyoindia.com:503/rvw/PortalCalling.aspx?username=CANDIDATES";
    }

    // When the user clicks anywhere outside the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>