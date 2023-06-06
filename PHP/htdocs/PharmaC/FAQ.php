<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Pharma C | FAQ</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="Index.php"><h2>Pharma C<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="Index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="Products.php">Shop Products</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Reviews.php">Reviews</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="FAQ.php">FAQ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Contacts.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Pharma C</h4>
                <h2>Frequently Asked Questions</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="FAQ.php">
                        <label class="FAQ" for="FAQ">Frequently Asked Questions:</label><br>
                        <select type="text" name="FAQ-Select">
                            <option value="A" name="A">Do we accept credit/debit cards?</option>
                            <option value="B" name="B">Which medications can be bought without a doctor's perscription?</option>
                            <option value="C" name="C">Does it really matter what time of day you take medications?</option>
                            <option value="D" name="D">Which insurance plans does Pharma C accept?</option>
                            <option value="E" name="E">How to contact Pharma C?</option>
                        </select>
                        <input type="submit" name="submit" value="Submit" ><br>
                    </form>
                </div>
            </div>
    
            <!--PHP-->
            <?php
            //isset submit
            if(isset($_POST['submit'])) {
                echo"<br>";
                //logic for dropdown forms 
                if ($_POST["FAQ-Select"] == "A"){
                    echo "<br>";
                    echo "<h4>Yes, we accept Mastercard, Visa, American Express, PayPal, Apple Pay, and Google Pay.</h4>";
                }
                if ($_POST["FAQ-Select"] == "B"){
                    echo "<br>";
                    echo "<h4>Certain medications require a doctor's perscription, 
                    please ask our pharmacists if a medicine is perscribed or can be bought without perscription.</h4>";
                }
                if ($_POST["FAQ-Select"] == "C"){
                    echo "<br>";
                    echo "<h4>Yes, a dosing schedule is important, because every medication that you take has a specific dosing schedule
                    - once a day, three times a day, etc..</h4>";
                }
                if ($_POST["FAQ-Select"] == "D"){
                    echo "<br>";
                    echo "<h4>Pharma C accepts health insurance from RF&G, Atlantic, and Home Protector Insurance</h4>";
                }
                if ($_POST["FAQ-Select"] == "E"){
                    echo "<br>";
                    echo "<h4>Contact us at +501-420-6969 or email us at PharmaCSupport@gmail.com</h4>";
                }
            }
            ?>
            <br>
            <br>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2022 Pharma C
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Extra Styles -->
    <style>
        .page-heading:after {
            background-color: #121212!important;
        }
        select  {
            width: 80%;
            padding: 12px 25px;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f1f1f1;
        }
        select[type=text]:focus{
            border: 3px solid #555;
        }
        option{
            background-color: #f1f1f1; 
        }
        option:focus{
            background-color: #f48440; 
        }
        input[type=submit]{
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f1f1f1;
        }
        .FAQ {
          color: #f48840 !important;
          font-size: 30px !important;
          text-transform: uppercase !important;
          text-align: left !important;
          font-weight: 900 !important;
          letter-spacing: 0.5px !important;
          margin-bottom: 15px;
        }
        .FAQ-Dropdown{
            position: relative;
        }
        .select-selected {
            background-color: #f48840 !important;
        }
        .select-selected:after {
            position: absolute !important;
            content: "" !important;
            top: 14px !important;
            right: 10px !important;
            width: 0 !important;
            height: 0 !important;
            border: 6px solid transparent !important;
            border-color: #fff transparent transparent transparent !important;
        }

    </style>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>