<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.ico" />
    <title>C3 - Physics Calculator</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
  </head>

  <body>
    <!-- page header -->
    <div class="container" id="home">
      <div class="col-12 text-center">
        <div class="tm-page-header">
          <img src="Logo.png" 
          id="Logo"
          alt="Physics Calculator Logo"
          width="112"
          height="100">
          <h1 class="d-inline-block text-uppercase"><a rel="nofollow opener" href="index.html" id="logotitle">C3 - Physics Calculator</a></h1>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="tm-nav-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#tmMainNav"
                aria-controls="tmMainNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="tmMainNav">
                <ul class="navbar-nav mx-auto tm-navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#home"
                      >Home<span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#features">Calculator</a>
                  </li>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    
    <!-- Calculator -->
    <div class="container tm-features-section" id="features">
      <div class="row tm-features-row">
        <section class="col-md-6 col-sm-12 tm-feature-block">
          <header class="tm-feature-header">
            <h3 class="tm-feature-h">Unit Converter</h3>
          </header>
          <div class="calculator">
            <form method="post">
              <h4>Meter to Kilometer:</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Meter</option>
                <option value="g" name="g">Gram</option>
                <option value="l" name="l">Liter</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc1" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc1'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m/1000;
                  echo " k".$unit;
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Kilometer to Meter:</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Kilometer</option>
                <option value="g" name="g">Kilogram</option>
                <option value="l" name="l">Kiloliter</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc2" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc2'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m*1000;
                  echo " ".$unit;
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Meter to Centimeter:</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Meter</option>
                <option value="g" name="g">Gram</option>
                <option value="l" name="l">Liter</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc3" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc3'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m*100;
                  echo " c".$unit;
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Centimeter to Meter:</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Centimeter</option>
                <option value="g" name="g">Centigram</option>
                <option value="l" name="l">Centiliter</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc4" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc4'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m/100;
                  echo " ".$unit;
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Square Meters (m²) to Square Centimeters (cm²):</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Meter²</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc5" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc5'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m*10000;
                  echo " c".$unit."²";
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Square Centimeters (cm²) to Square Meters (m²):</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Centimeter²</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc6" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc6'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m/10000;
                  echo " ".$unit."²";
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Cubic Meters (m³) to Cubic Centimeters (cm³):</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Meter³</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc7" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc7'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m*1000000;
                  echo " c".$unit."³";
                }
              ?>     
            </div>
          </div>
          <br>
          <div class="calculator">
            <form method="post">
              <h4>Cubic Centimeters (cm³) to Cubic Meters (m³):</h4><br>
              <select type="text" name="Select">
                <option value="m" name="m">Centieter³</option>
              </select>
              <input type="text" id="meter" name="meter" value="" placeholder="0">
              <br>
              <br>
              <input type="submit" name="calc8" value="Calculate" id="btn-calculate">
            </form>
            <br>
            <div class="php-container">
              <?php
                if(isset($_POST['calc8'])) {
                  $m = $_POST['meter'];
                  $unit = $_POST['Select'];
                  echo"The value is: ";
                  echo $m/1000000;
                  echo " ".$unit."³";
                }
              ?>     
            </div>
          </div>
          <br>
          
          <br>
          <p>
            Back to <a rel="nofollow opener" href="index.html">Home</a>.
          </p>
          <p>
            This website is still a prototype. If you have any suggestions please send us some
            <a rel="nofollow opener" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">feedback</a>. All feedback is appreciated :)
          </p>
        </section>
      </div>
    </div>

    <style>
      #btn-calculate {
        background-color: #084075 !important; 
        border: none !important;
        color: white !important;
        padding: 8px 16px !important;
        text-decoration: none !important;
        margin: 4px 2px !important;
        cursor: pointer !important;
        border: 2px solid #44444 !important;
        border-radius: 4px !important;
      }
      .php-container{
        padding: 30x !important;
        border-radius: 5px !important;
        font-size: 1.6rem !important;
      } 
      .calculator{
        margin-top: 8px!important; 
        margin-bottom: 15px!important;
        padding-bottom: 15px!important;
        border-bottom: 2px solid #eee;
      }
    </style>

    <!-- JS Logic -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- Single Page Nav plugin works with this version of jQuery -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      /**
       * detect IE
       * returns version of IE or false, if browser is not Internet Explorer
       */
      function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf("MSIE ");
        if (msie > 0) {
          // IE 10 or older => return version number
          return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
        }

        var trident = ua.indexOf("Trident/");
        if (trident > 0) {
          // IE 11 => return version number
          var rv = ua.indexOf("rv:");
          return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
        }

        // var edge = ua.indexOf('Edge/');
        // if (edge > 0) {
        //     // Edge (IE 12+) => return version number
        //     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        // }

        // other browser
        return false;
      }

      $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $(".scrolltop:hidden").stop(true, true).fadeIn();
        } else {
          $(".scrolltop").stop(true, true).fadeOut();
        }

        // Make sticky header
        if ($(this).scrollTop() > 158) {
          $(".tm-nav-section").addClass("sticky");
        } else {
          $(".tm-nav-section").removeClass("sticky");
        }
      });

      let videoSec;

      $(function () {
        if (detectIE()) {
          alert(
            "Please use the latest version of Edge, Chrome, or Firefox for best browsing experience."
          );
        }

        const mainNav = $("#tmMainNav");
        mainNav.singlePageNav({
          filter: ":not(.external)",
          offset: $(".tm-nav-section").outerHeight(),
          updateHash: true,
          beforeStart: function () {
            mainNav.removeClass("show");
          },
        });

        videoSec = $("#tmVideoSection");

        // Adjust height of video when window is resized
        $(window).resize(function () {
          setVideoHeight();
        });

        setVideoHeight();

        $(window).on("load scroll resize", function () {
          var scrolled = $(this).scrollTop();
          var vidHeight = $("#hero-vid").height();
          var offset = vidHeight * 0.6;
          var scrollSpeed = 0.25;
          var windowWidth = window.innerWidth;

          if (windowWidth < 768) {
            scrollSpeed = 0.1;
            offset = vidHeight * 0.5;
          }

          $("#hero-vid").css(
            "transform",
            "translate3d(-50%, " + -(offset + scrolled * scrollSpeed) + "px, 0)"
          ); // parallax (25% scroll rate)
        });

        // Parallax image background
        background_image_parallax($(".tm-parallax"), 0.4);

        // Back to top
        $(".scroll").click(function () {
          $("html,body").animate(
            { scrollTop: $("#home").offset().top },
            "1000"
          );
          return false;
        });
      });
    </script>
  </body>
</html>
