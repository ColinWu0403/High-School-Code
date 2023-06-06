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
		<title>Wurdle</title>
	</head>

	<div id="alertTop" role="alert"> </div>
	
	<body style="background: #010B17;">
      <header class="header">WURDLE</header>
      <center>
        <h5>By Colin Wu</h5>
        <div style=" margin-left:auto; margin-right: auto; width: 80%;"> 
          <div class="alert-container" data-alert-container></div>
            <div id='main-container'>	
              <h2></h2>
              <div id='grid'>
              <!--30 Tiles (6x6 grid)-->
              <!--Grid End-->
              </div>
              <div id = "error-message"></div>
              <br>
              <input type="text" id="guess" name="guess" value="" placeholder="Enter a 5 letter word">
              <button id='enter'>Enter</button>
              <button class='btn btn-danger' id='reset' onclick='window.location.reload();'>New Game</button>
              <br>
            </div>
        </div>
      </center>
	</body>
	
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
  *,
  *::after,
  *::before {
    box-sizing: border-box;
  }
  body{
    color: white;
    font-family: 'Clear Sans', 'Helvetica Neue', Arial, sans-serif;
    background-color: hsl(240, 3%, 7%);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    padding: 1em;
    font-size: clamp(.5rem, 2.5vmin, 1.5rem);
    overflow-y: scroll;
  }
  h5{
    color: lightgray;
  }
  .header{
    font-size: 40px;
    font-weight: bold;
    text-align: center;
  }
  #guess{
    width: 40%; 
    color: white;
    background-color: #010B17;
    border-radius: 2px;
    box-sizing: border-box;
    padding: 5px;
  }
  #guess:focus{
    border: 2px solid white;
  }
  #error-message{
    font-size: 25px;
    color: #F12F2F;
  }
  #enter{
    background-color: #00BFFF;
    border: none;
    border-radius: 4px;
    color: white;
    padding: 6px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
  }
  ::placeholder{
    color: white;
  }
  #grid{
    font-family: Arial;
    display: grid;
    justify-content: center;
    align-content: center;
    flex-grow: 1;
    -ms-grid-columns: repeat(5, 4em);
    grid-template-columns: repeat(5, 4em);
    -ms-grid-rows: repeat(6, 4em);
    grid-template-rows: repeat(6, 4em);
    gap: 0.20em;
    position: relative;
    top: 10px;
  }
  .tile{
    font-size: 2em;
    color: white;
    border: .05em solid hsl(240, 2%, 23%);
    text-transform: uppercase;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    user-select: none;
    transition: transform 250ms linear;
  }
</style>
</html>

<script>
    // $("#reset").hide();

    //get random word from db list
    // $.ajax('API.php', {
    //     type: 'POST',  
    //     data: {call: 'api1'}, 
    //     success: function (data, status, xhr) {
    //         $('#grid').append(data);
    //     },
    //     error: function (jqXhr, textStatus, errorMessage) {
    //         $('#grid').append('Error' + errorMessage);
    //     }
    // });

    //Send API call for random word
    $.ajax('API.php', {
        type: 'POST',  
        data: {call: 'api1'}, 
        success: function (data, status, xhr) {
            $('#grid').append(data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#grid').append('Error' + errorMessage);
        }
    });

    $("#enter").click(function(){
        //fill in grid with guessed word
        function fillgrid() { 
            //Check if guess length is 5 characters
            if ($('#guess').val().length == 5){
                $.ajax('API.php', {
                    type: 'POST',  
                    data: {call: 'api2', guess: $('#guess').val()}, 
                    success: function (data, status, xhr) {
                        $('#grid').append(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('#grid').append('Error' + errorMessage);
                    }
                });
                
            } else {
                $('#error-message').html('Please enter a 5 letter word');
                // $('#error-message').hide();
            }
        }

        fillgrid();
        
    });
    $("#reset").click(function(){
        $.ajax('API.php', {
            type: 'POST',  
            data: {call: 'reset-call'},  
            success: function (data, status, xhr) {
                $('#reset').html(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#reset').html('Error' + errorMessage);
            }
        });
    });
</script>