<html>
<style>
.box{
  padding:35px;
  margin-right:15px;
  border: 1px solid;
  border-spacing: 30px;
}
.greenbox{
  background-color:MediumSeaGreen;
  padding:35px;
  margin-right:15px;
  border: 1px solid;
  border-spacing: 30px;
}
.yellowbox{
  background-color:gold;
  padding:35px;
  margin-right:15px;
  border: 1px solid;
   border-spacing: 30px;
}
</style>

<?php
	session_start();
	if (isset($_POST)) {
    if ($_POST['call']=='api1') {		
			$dbhost = "localhost"; //127.0.0.1 defaults to localhost
			$dbuser = "root"; //the user is set in phpmyadmin
			$dbpass = ""; //the password for that user to gain access to the db
			$db = "test"; //the name of the database we are trying to access
			$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
			
			$result = $conn->query("SELECT Word FROM wordle order by RAND() LIMIT 1");
			$random = mysqli_fetch_array($result);
			
			$_SESSION["winner"] = $random['Word'];
			echo $_SESSION["winner"];
			
    }
    else if($_POST['call']=='api2') {
      $guess = $_POST['word'];
      $guessarray = str_split($guess);
      $correctarray = str_split($_SESSION["winner"]);

      for ($x = 0; $x<=4; $x++) {
        if ($guessarray[$x] == $correctarray[$x]) {
          $correct[$x] = "greenbox";
        } 
				if ((in_array($guessarray[$x], $correctarray)) && $guessarray[$x] != $correctarray[$x]) {
          $correct[$x] = "yellowbox";
        }
				if ((!in_array($guessarray[$x], $correctarray))) {
          $correct[$x] = "box";
        }
      }
      echo "<table>";
      echo "<tr>";
      echo "<td class=$correct[0]>".$guessarray[0]."</td>";
      echo "<td class=$correct[1]>".$guessarray[1]."</td>";
      echo "<td class=$correct[2]>".$guessarray[2]."</td>";
      echo "<td class=$correct[3]>".$guessarray[3]."</td>";
      echo "<td class=$correct[4]>".$guessarray[4]."</td>";
      echo "</tr>";
      echo "</table><br><br>";

			$y=0;
			for ($x=0; $x<=4; $x++) {
				if($correct[$x]=="greenbox"){
				  $y++;
				}
			}
			if ($y==5) {
				echo"YOU WON!";
				echo"<br>";
				echo"Please refresh the page to start again.";
			}
    }
    else {
      echo"API unsucessful";	
    }
	}	
?>
<html>