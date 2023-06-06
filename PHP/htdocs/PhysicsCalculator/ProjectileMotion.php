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
    <!-- Banner -->
    <div class="container" id="activities">
      <div class="row">
        <div class="col-12">
          <div class="tm-parallax2">
            <header class="tm-parallax-header">
              <h2 class="">Projectile Motion Calculator</h2>
            </header>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Calculator -->
    <div class="container tm-features-section" id="features">
      <div class="row tm-features-row">
        <section class="col-md-6 col-sm-12 tm-feature-block">
          <header class="tm-feature-header">
            <h3 class="tm-feature-h">Projectile Motion Calculator</h3>
          </header>
          <div class="row">
            <!-- Projectile Motion Flight Time -->
            <div class="col-lg-6">
            <div class="tm-calculator-block">
              <div class="tm-calculator-block-text">
                <a rel="nofollow noopener" href="Flight_Time.php" class="tm-text-calculator">Time of Flight</a>
                <p>
                  Calculates the time of flight an object
                  <br>
                  Formula:
                  <br>
                  t = 2 * Vy / g
                </p>
              </div>
            </div>
            </div>
            <!-- Range of Projectile -->
            <div class="col-lg-6">
              <div class="tm-calculator-block">
                <div class="tm-calculator-block-text">
                  <a rel="nofollow noopener" href="Projectile_Range.php" class="tm-text-calculator">Projectile Range</a>
                  <p>
                    Calculates the range of a projectile
                    <br>
                    Formula:
                    <br>
                    R = (2 * Vx * Vy) / g
                  </p>
                </div>
              </div>
            </div>
          </div>
            <br>
          <p>
            Back to <a rel="nofollow opener" href="index.html">Main Page</a>.

          </p>
          <p>
            This website is still a prototype. If you have any suggestions please send us some
            <a rel="nofollow opener" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">feedback</a>. All feedback is appreciated :)
          </p>
        </section>
      </div>
    </div>

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
