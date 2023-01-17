<!doctype html>
<html lang="hu">
  <head>
      <meta charset="utf-8">
      <link rel="icon" href="legoicon.png">
      <link rel="stylesheet" href="style/bootstrap.min.css">
      <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
      <script src="JS/bootstrap.min.js"></script>

    <title>LEGO Raktár</title>

      <style>
          * {box-sizing: border-box;}
          body {font-family: Verdana, sans-serif;}
          .mySlides {display: none;}
          img {vertical-align: middle;}

          .slideshow-container {
              max-width: 1000px;
              position: relative;
              margin: auto;
          }

          .dot {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
          }

          .fade {
              animation-name: fade;
              animation-duration: 2.5s;
          }

          @keyframes fade {
              from {opacity: .4}
              to {opacity: 1}
          }

          @media only screen and (max-width: 300px) {
              .text {font-size: 11px}
          }
      </style>
  </head>
  <body>
    <?php
       require "menu.php";
       require "connect.php";
    ?>
    <div style="text-align:center">

        <b><h1 style="font-weight: bold; margin-top: 15px">Üdvözöljük a LEGO raktár oldalán!</h1></b>

        <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="legoicon.png" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="babyyoda.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="mclaren.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="harrypotter.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="stranger.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="frozen.jpeg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="10297.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="ninjago.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="75291.jpg" style="height:500px">
        </div>

        <div class="mySlides fade">
            <img src="legok.jpg" style="height:500px">
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

  </body>
</html>
