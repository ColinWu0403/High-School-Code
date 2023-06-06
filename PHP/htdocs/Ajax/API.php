<?php
	if(isset($_POST['call'])){
		if ($_POST['call'] == 'api1'){

			$conn = new mysqli("localhost","root","","test") or die("Connect failed : %s\n". $conn ->error);

			echo "<div class = 'userinfo'>";

				$name = $_POST["name"];
				$country = $_POST["country"];
				$address = $_POST["address"];
				$birthday = $_POST["birthday"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$ecryptedpass = md5($password);

				//Insert into db
				$sql = $conn->query("INSERT INTO account (Name, Country, Address, DateOfBirth, Username, Password) 
				VALUES ('".$name."', '".$country."','".$address."','".$birthday."','".$username."','".$ecryptedpass."');");

				$result = $conn->query($sql);

				$result = $conn->query("SELECT AccountID, Name, Country, Address, DateOfBirth, Username FROM account;");

				$rows = [];

				while($row = $result->fetch_array(MYSQLI_ASSOC)){
				  $rows[] = $row;
				}

				echo "<h3>Registration Info Table</h3><br>";
				
				echo "<table class='registrationInfotable'>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Country</th>
					<th>Address</th>
					<th>Date of Birth</th>
					<th>Username</th>
				</tr>";

				foreach($rows as $row){
					echo "<tr>";
					foreach($row as $result){
					echo "<td>{$result}</td>";
					}
					echo "<tr>";
				}

				if ($sql == TRUE){
					echo "<div class='alert alert-success'>Account Registered!</div>";
					}else{
					echo "<div class='alert alert-danger'>Account NOT Registered</div>";
					echo "<br>".$conn->error;
				}
			echo "</div>";

			$conn->close();
		} elseif ($_POST['call'] == 'api2'){ //update exisitng account

			$conn = new mysqli("localhost","root","","test") or die("Connect failed : %s\n". $conn ->error);

			echo "<div class = 'userinfo'>";

				//Insert into db
				$sql = "UPDATE account SET";

				$name = $_POST["name"];
				$country = $_POST["country"];
				$address = $_POST["address"];
				$birthday = $_POST["birthday"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$ecryptedpass = md5($password);

				//Name
				if(!empty($name)){
					if(empty($country) and empty($address) and empty($birthday)){
						$sql = $sql . " Name = '$name' ";
					} else {
						$sql = $sql . " Name = '$name', ";
					}
				}
				
				//Country
				if(!empty($country)){
					if(empty($name) and empty($address) and empty($birthday)){
						$sql = $sql . " Country = '$country' ";
					} elseif(empty($address) and empty($birthday)){
						$sql = $sql . " Country = '$country' ";
					}
					else {
						$sql = $sql . " Country = '$country', ";
					}
				}

				//Address
				if(!empty($address)){
					if(empty($name) and empty($country) and empty($birthday)){
						$sql = $sql . " Address = '$address' ";
					} elseif (empty($birthday)){
						$sql = $sql . " Address = '$address' ";
					} 
					else {
						$sql = $sql . " Address = '$address', ";
					}
				}

				//Birthday
				if(!empty($birthday)){
					$sql = $sql . " DateOfBirth = '$birthday' ";
				}

				$sql = $sql . "WHERE Username = '$username' AND Password = '$password';";

				echo $sql;
				
				$result = $conn->query($sql);

				//Show Table
				$result = $conn->query("SELECT AccountID, Name, Country, Address, DateOfBirth, Username FROM account;");

				$rows = [];

				while($row = $result->fetch_array(MYSQLI_ASSOC)){
				  $rows[] = $row;
				}

				echo "<h3>Registration Info Table</h3><br>";
				
				echo "<table class='registrationInfotable'>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Country</th>
					<th>Address</th>
					<th>Date of Birth</th>
					<th>Username</th>	
				</tr>";

				foreach($rows as $row){
					echo "<tr>";
					foreach($row as $result){
					echo "<td>{$result}</td>";
					}
					echo "<tr>";
				}

				if ($sql == TRUE){
					echo "<div class='alert alert-success'>Account Updated!</div>";
					}else{
					echo "<div class='alert alert-danger'>Account NOT Updated</div>";
					echo "<br>".$conn->error;
				}
			echo "</div>";

			$conn->close();
		} elseif ($_POST['call'] == 'api3'){ //database page
			if(isset($_POST["pagenum"])){
				$conn = new mysqli("localhost","root","","test") or die("Connect failed : %s\n". $conn ->error);

				$pagenum = $_POST["pagenum"];

				$start = ($pagenum - 1) * 10;
				
				$sql = "SELECT AccountID, Name, Country, Address, DateOfBirth, Username FROM account LIMIT ";

				$sql = $sql . "$start,10";
				$sql = $sql . " ;";
	
				echo "<div class = 'pagetable'>";
	
					//Show Table
					$result = $conn->query($sql);
	
					$rows = [];
	
					while($row = $result->fetch_array(MYSQLI_ASSOC)){
					  $rows[] = $row;
					}
	
					echo "<br><h3>Page $pagenum</h3><br>";
					
					echo "<table class='registrationInfotable'>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Country</th>
						<th>Address</th>
						<th>Date of Birth</th>
						<th>Username</th>	
					</tr>";
	
					foreach($rows as $row){
						echo "<tr>";
						foreach($row as $result){
						echo "<td>{$result}</td>";
						}
						echo "<tr>";
					}
				echo "</div>";
	
				$conn->close();
			} else {
				echo "Error Page Number not Set";
			}

		} else {
			echo "Invalid API";
		}
    }
?>