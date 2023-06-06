<html>
<style>
	.gray {
		font-size: 2em;
		color: white;
		text-transform: uppercase;
		font-weight: bold;
		display: flex;
		justify-content: center;
		align-items: center;
		user-select: none;
		transition: transform 250ms linear;

		border: none;
		background-color: hsl(240, 2%, 23%);
	}

	.yellow {
		font-size: 2em;
		color: white;
		text-transform: uppercase;
		font-weight: bold;
		display: flex;
		justify-content: center;
		align-items: center;
		user-select: none;
		transition: transform 250ms linear;

		border: none;
		background-color: hsl(49, 51%, 47%);
	}

	.green {
		font-size: 2em;
		color: white;
		text-transform: uppercase;
		font-weight: bold;
		display: flex;
		justify-content: center;
		align-items: center;
		user-select: none;
		transition: transform 250ms linear;

		border: none;
		background-color: hsl(115, 29%, 43%);
	}
</style>

<?php
	//Start Session
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
  if (isset($_POST)) {

		//Reset session
		if ($_POST['call'] == 'reset-call') { //Unset session and close database
			echo "Game reset";
			session_unset();
			session_destroy();
			$conn->close();
		}
    elseif ($_POST['call'] == 'api1') { //Select random word from db
			$conn = new mysqli("localhost","root","","test") or die("Connect failed : %s\n". $conn ->error);
			$sql = $conn->query("SELECT Word FROM wordle ORDER BY rand() LIMIT 1;");
			$answer = mysqli_fetch_array($sql);
			$_SESSION["answer"] = $answer['Word'];
		}
    elseif ($_POST['call'] = 'api2') { //fill grid
	
			$guess = $_POST["guess"];

			$g_array = str_split($guess);
      $a_array = str_split($_SESSION["answer"]);

			$correct = 0;

			for ($x = 0; $x<=4; $x++) {
				//correct position
				if($a_array[$x] == $g_array[$x]){
					$tile[$x] = 'green';
				}
				if((in_array($g_array[$x], $a_array)) && $g_array[$x] != $a_array[$x]){
					$tile[$x] = 'yellow';
				} 
				if ((!in_array($g_array[$x], $a_array))) {
					$tile[$x] = 'gray';
				}
			}

			echo '<div class='.$tile[0].'>'.$g_array[0].'</div>';
			echo '<div class='.$tile[1].'>'.$g_array[1].'</div>';
			echo '<div class='.$tile[2].'>'.$g_array[2].'</div>';
			echo '<div class='.$tile[3].'>'.$g_array[3].'</div>';
			echo '<div class='.$tile[4].'>'.$g_array[4].'</div>';

			for ($i = 0; $i <= 4; $i++) {
				if ($tile[$i]=="green") {
				  $correct++;
				}
			}
			if ($correct==5) {
				echo"YOU WIN!";
			}
		}
    else {
			echo "Error";
		}
  }
?>