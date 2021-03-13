<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
    <style type="text/css">
    	a {
    		display: block;
    		margin: auto;
    	}

        input {
            margin: 20px;
        }
    </style>
  </head>
  <body>
    <div class="container jumbotron">
        <h3>Login</h3>
         <hr style="margin-left: 26px; margin-right: 26px;">
        <form action="roles.php" method="post">
            <h3 >
                <!-- <?php
                    if ($_GET['registered'] == 'true') {
                        # code...
                        // echo "Your account has been created";
                          if(isset($_SESSION['userRegistered'])){
                            echo $_SESSION['userRegistered'];
                            unset($_SESSION['userRegistered']);
                            session_destroy();
             } 
                    } else {
                        echo "Login in here";
                    }
                ?> -->
            </h3>

    <h3 style="font-family: 'Comfortaa', cursive">
            <?php
            if (isset($_SESSION['userUnavailable']))
            {
                echo $_SESSION['userUnavailable'];
                unset($_SESSION['userUnavailable']);
                session_destroy();
            }
            ?>
        </h3>

    	<div class="row">
    		<div class="col">
    			<input type="email"  name="emaillog" class="form-control" placeholder="Enter Email Address" required="">
                <input type="password" class="form-control" name="passlog" placeholder="password" required="">
                <button  name="save" id="save"  class="btn btn-success btn-block" >Login</button>
                <a href="signup.php"><p style="text-align: center;">Dont have an account signUp here</p></a>
    		</div>


    
    	</div>
   </form>


    </div>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>