<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Pharma C | Reviews</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
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
                <h2>User Reviews</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <br>
    <!-- Banner Ends Here -->
    <section class="about-us">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="down-contact">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="sidebar-item contact-form">
                      <div class="sidebar-heading">
                        <label class="review-header" for="review-header">Send us a review</label>
                      </div>
                      <div class="content">
                        <form method="post" action="Reviews.php">
                          <div class="col-md-12 col-sm-12">
                            <input type="text" id="FirstName" name="FirstName" placeholder="FIRST NAME" value="">
                            <input type="text" id="LastName" name="LastName" placeholder="LAST NAME" value="">
                            <input type="text" id="Rating" name="Rating" placeholder="RATE OUR SERVICE OUT OF 5 STARS" value="">
                          </div>
                          <div class="col-lg-12">
                            <textarea name="Review" rows="6" id="Review" placeholder="YOUR REVIEW" required=""></textarea>
                          </div>
                          <br>
                          <button type="submit" id="form-submit" name="submit">Submit</button><br>
                        </form>
                        <br><br>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <label class="review-header" for="review-header">Contact Us</label>
                    </div>
                    <div class="sidebar-content">
                      <ul>
                        <li>
                          <h5>+501 501-420-6969</h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>PharmaCSupport@gmail.com</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>212 Northeastern St Belize City</h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            <!--PHP-->
            <div class="php-container">
              <?php
                
                $conn = new mysqli("localhost","root","","shop1") or die("Connect failed : %s\n". $conn ->error);

                //isset submit 
                if(isset($_POST['submit'])) {
                  if(($_POST['Rating'] <= 5) && ($_POST['Rating'] > 0)) {

                    $FirstName = $_POST["FirstName"];
                    $LastName = $_POST["LastName"];
                    $Rating = $_POST["Rating"];
                    $Review = $_POST["Review"];

                    //Insert into db
                    $sql = $conn->query("INSERT INTO userreview (FirstName, LastName, Rating, Review ) 
                    VALUES ('".$FirstName."', '".$LastName."','".$Rating."','".$Review."');");

                    if ($sql == TRUE){
                      echo "<h4>Thank you for sending a review!</h4>";
                    }else{
                      echo "<h4>Review NOT sent</h4>";
                      echo "<br>".$conn->error;
                    }

                  } else {
                    echo "<h4>Review NOT sent: Invalid Rating</h4>";
                  }
                }

                echo "<br><br>";
                echo "<h2>All reviews</h2><br>";

                //Show all reviews
                $result = $conn->query("SELECT * FROM userreview order by shop1ID DESC;");

                //Array to HTML Table
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                  echo "<br>";
                  echo "<div class='userreview'>";
                  echo "<h4>". $row['FirstName']. " ". $row['LastName'][0]. "<span> Rating: ". $row['Rating']. " out of 5</span></h4>";
                  echo "<p>". $row['Review']. "</p>";
                  echo "</div>";
                }

                $conn->close();
              ?>
            </div>
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
      .php-container{
        position: relative;
        text-align: left;
      }
      .php-container table{
        width: 200%;
        text-align: left;
      }
      .php-container th{
        padding: 5px;
      }
      .php-container td{
        padding: 5px;
      }
      .php-container h2{
        color: #f48840 !important;
        font-size: 30px !important;
        text-transform: uppercase !important;
        text-align: left !important;
        font-weight: 900 !important;
        letter-spacing: 0.5px !important;
        margin-top: 8px!important; 
        margin-bottom: 15px!important;
        padding-bottom: 15px!important;
        border-bottom: 1px solid #eee;
      }
      .userreview p{
        border-bottom: 1px solid #eee;
        position: relative;
        bottom: 30px;
        padding-bottom: 15px;
        margin-bottom: 10px;
      }
      .userreview h4{
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.5px;
        color: #20232e;
      }
      .userreview span{
        margin-left: 5px;
        font-size: 17px;
        color: #7a7a7a;
        font-weight: 500;
        transition: all 0.3s;
      }
      .review-header{
        color: #f48840 !important;
        font-size: 30px !important;
        text-transform: uppercase !important;
        text-align: left !important;
        font-weight: 900 !important;
        letter-spacing: 0.5px !important;
        margin-top: 8px!important; 
        margin-bottom: 15px!important;
        padding-bottom: 15px!important;
      }
      
      .sidebar-content ul li h5 {
        font-size: 19px;
        font-weight: 900;
        color: #20232e;
        line-height: 30px;
      }

      .sidebar-content span {
        display: block;
        font-size: 14px;
        color: #aaa;
        margin-top: 8px;
      }
      .about-us ul li {	
        display: block!important;
        font-size: 14px!important;
        margin-top: 8px!important; 
        margin-bottom: 15px!important;
        padding-bottom: 15px!important;
        border-bottom: 1px solid #eee!important;
      }
      .about-us {
        text-align: left !important;
      }
      .about-us .contact-form input {
        width: 100%;
        height: 46px;
        border: 1px solid #eee;
        font-size: 13px;
        font-weight: 500;
        color: #7a7a7a;
        outline: none;
        padding: 0px 15px;
        margin-bottom: 30px;
      }
      .about-us .contact-form button {
        display: inline-block!important;
        background-color: #f48840!important;
        color: #fff!important;
        font-size: 13px!important;
        font-weight: 500!important;
        padding: 12px 20px!important;
        text-transform: uppercase!important;
        transition: all .3s!important;
        border: none!important;
        outline: none!important;
      }
      .about-us .contact-form textarea {
        width: 100%;
        height: 46px;
        border: 1px solid #eee;
        font-size: 13px;
        font-weight: 500;
        color: #7a7a7a;
        outline: none;
        padding: 10px 15px;
        margin-bottom: 30px;
        height: 180px;
        max-height: 220px;
        max-width: 100%;
        min-width: 160px;
      }
      .about-us .contact-form button:hover {
        background-color: #fb9857!important;
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