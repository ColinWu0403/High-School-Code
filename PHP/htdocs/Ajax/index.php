<!--This program was written by C Wu on 8/3/2022-->
<!doctype html>
<html lang="en">
	<head>
		<!-- Bootstrap Stylesheet -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- Bootstrap Library  -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
		<!-- Bootstrap Library  -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
		<!-- JQUERY Library  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<meta charset="utf-8">
		<title>Coderunner</title>
	</head>

	<div id="alertTop" role="alert"> </div>
	
	<body style="background: gray;">
		<div style="background-color: #FEFFEB; margin-left:auto; margin-right: auto; width: 60%; padding:25px;"> 
		
		<center><label for="option"><p><h2>Jquery testing</h2></p></label></center>
		
		<!-- Manually created RESET button -->
		<div id='registrationInfo'>	</div>
		
		<div id='section1'>	
			<h2>SECTION 1</h2>
			<div>
			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" value="" ><br>
			
			<label for="country">Country:</label><br>
			<input type="text" id="country" name="country" value="" ><br>
			
			<label for="address">Address:</label><br>
			<input type="text" id="address" name="address" value="" ><br>
			
			<label for="birthday">Date of Birth:</label><br>
			<input type="date" id="birthday" name="birthday" value="" ><br>
			
			</div>

			<br>
			
			<button class="btn btn-info" id="next" >Next</button>
		</div>
		
		<div id='section2'>	
			<h2>SECTION 2</h2>			
			<div>
			<label for="username">User Name:</label><br>
			<input type="text" id="username" name="username" value="" ><br>
			
			<label for="password">Password:</label><br>
			<input type="password" id="password" name="password" value="" ><br>
			
			<label for="password2">Retype Password:</label><br>
			<input type="password" id="password2" name="password2" value="" ><br>

			<br>
			</div>
			<button class="btn btn-info" id="back" >Back</button>
			<br><br><br>
			<button class="btn btn-primary" id="register" >REGISTER</button>
			<button class="btn btn-secondary" id="update" >UPDATE</button>		
			<br><br>
			<button class="btn btn-primary" id="dbshow" >SHOW TABLE</button>
		</div>
		<div id='section3'>
			<h2>SECTION 3</h2>
			<div id='dbtable'></div>
			<br><br>
			<button class="btn btn-secondary" id="dbback" >BACK</button>
			<input type="text" id="pagenum" name="pagenum" value="1" disabled>
			<button class="btn btn-secondary" id="dbnext" >NEXT</button>
		</div>
		<br><br>
		<div class="mainpage">
			<button class='btn btn-primary' id='back2' onclick='window.location.reload();'>Back to Main Page</button>
		</div>
		</div>
	</body>
	
<style>
	.addedClass{
		font-family: Arial;
		padding:25px;
		border: 2px solid;
	}
	.registrationInfotable, tr, th, td{
		border: 1px solid;
		position: center;
		text-align: center;
	}

	#section3 input{
		width: 10%;
	}
	h3{
		text-align: center;
	}
	tr{
		width: 100%;
		padding: 15px;
	}
	th{
		background-color: #0028CF;
		color: white;
		padding: 15px;
	}

	td{
		background-color: #FFFFCB;
		padding: 15px;
	}
</style>
</html>

<script>

let x = 0;

$('#section1').show();

$("#section2").hide();

$("#section3").hide();

$("#back2").hide();

$("#next").click(function(){
	
	$('#section1').hide();

	$('#section2').show();
	
});

$("#back").click(function(){
	
	$('#section1').show();
	
	$('#section2').hide();

	$("#section3").hide();

});

$("#register").click(function(){//register record
	
	if($('#password').val() == $('#password2').val()){
		$('#section1').hide();

		$('#section2').hide();

		$("#section3").hide();

		$.ajax('API.php', {//name of php file data will be sent
			type: 'POST',  // http method POST
			data: {call: 'api1', name: $('#name').val(), country: $('#country').val(), address: $('#address').val(), 
				birthday: $('#birthday').val(), username: $('#username').val(), password: $('#password').val()},  // Data submitted to php file as POST
			success: function (data, status, xhr) {//success attribute, if ajax call was successful do this
				$('#registrationInfo').append(data);//+ sign used in js and strings concatenates. Append response in the div with id = test
			},
			error: function (jqXhr, textStatus, errorMessage) {//error attribute, if ajax call failed do this
				$('#test').append('Error' + errorMessage);
			}
		});

		$("#back2").show();
	} else {
		$('#alertTop').append('<div class="alert alert-danger" >Passwords must be the same</div>');
	}
});

$("#update").click(function(){//update record

	$('#section1').hide();

	$('#section2').hide();

	$("#section3").hide();

	$.ajax('API.php', {//name of php file data will be sent
		type: 'POST',  // http method POST
		data: {call: 'api2', name: $('#name').val(), country: $('#country').val(), address: $('#address').val(), 
			birthday: $('#birthday').val(), username: $('#username').val(), password: $('#password').val()},  // Data submitted to php file as POST
		success: function (data, status, xhr) {//success attribute, if ajax call was successful do this
			$('#registrationInfo').append(data);//+ sign used in js and strings concatenates. Append response in the div with id = test
		},
		error: function (jqXhr, textStatus, errorMessage) {//error attribute, if ajax call failed do this
			$('#test').append('Error' + errorMessage);
		}
	});

	$("#back2").show();
	
});

$("#dbnext").click(function(){//database pagination - next 
	if (x < 5){
		x = x + 1;
		$('#pagenum').val(x);

		$.ajax('API.php', {//name of php file data will be sent
			type: 'POST',  // http method POST
			data: {call: 'api3', pagenum: $('#pagenum').val() },  // Data submitted to php file as POST
			success: function (data, status, xhr) {//success attribute, if ajax call was successful do this
				$('#dbtable').html(data);//+ sign used in js and strings concatenates. Append response in the div with id = test
			},
			error: function (jqXhr, textStatus, errorMessage) {//error attribute, if ajax call failed do this
				$('#test').html('Error' + errorMessage);
			}
		});

		$("#pagetable").hide();
	}
});

$("#dbback").click(function(){//database pagination - back 
	if(x > 1){
		x = x - 1;
		$('#pagenum').val(x);

		$.ajax('API.php', {//name of php file data will be sent
			type: 'POST',  // http method POST
			data: {call: 'api3', pagenum: $('#pagenum').val() },  // Data submitted to php file as POST
			success: function (data, status, xhr) {//success attribute, if ajax call was successful do this
				$('#dbtable').html(data);//+ sign used in js and strings concatenates. Append response in the div with id = test
			},
			error: function (jqXhr, textStatus, errorMessage) {//error attribute, if ajax call failed do this
				$('#test').html('Error' + errorMessage);
			}
		});

		$("#pagetable").hide();
	}
});

$("#dbshow").click(function(){//show database table with pages

	$('#section1').hide();

	$('#section2').hide();

	$("#section3").show();

	$("#pagetable").show();

	$.ajax('API.php', {//name of php file data will be sent
		type: 'POST',  // http method POST
		data: {call: 'api3', pagenum: $('#pagenum').val(), },  // Data submitted to php file as POST
		success: function (data, status, xhr) {//success attribute, if ajax call was successful do this
			$('#dbtable').append(data);//+ sign used in js and strings concatenates. Append response in the div with id = test
		},
		error: function (jqXhr, textStatus, errorMessage) {//error attribute, if ajax call failed do this
			$('#test').append('Error' + errorMessage);
		}
	});
	
	$("#back2").show();

});
</script>