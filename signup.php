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
        <h3>Create Account</h3>
        <hr style="margin-left: 26px; margin-right: 26px;">
        <form action="register.php" method="post">
         <h3>
            <?php
             if(isset($_SESSION['userTaken'])){
                echo $_SESSION['userTaken'];
                unset($_SESSION['userTaken']);
                session_destroy();
             }

            ?>
         </h3>
    	<div class="row">
    		<div class="col">
    			<input type="text"  name="username" class="form-control" placeholder="Enter Username" required="">
               

            </div>
            <div class="col">
                 <input type="email" class="form-control" name="emailSignUp" placeholder="Enter Email Address" required="">
            </div>
            <div class="col"> 
                <select class="form-control" name="role" id="role" style="margin-top: 20px;">
                    <option value="">Select User role</option>
                    <option value="student">students</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>

        </div>

           <div class="row">
            <div class="col">
                   <input onkeyup="check();" id="password" type="password" class="form-control" name="passReg" placeholder="password" required="">
            </div>

            <div class="col">
                   <input onkeyup="check();" id="conpass" type="password" class="form-control" name="conpass" placeholder="Confirm Password" required="">
                   <span id="message"></span>



            </div>
               <div class="col">
                    <a href="login.php"><p style="text-align: center; margin-top: 20px;">Already have an account login here.</p></a>
            </div> 
</div>
             <div class="row">
                          <div class="col">
                  <button id="save" name="save" class="btn btn-success btn-block">
                         Create Account                 
                  </button> 
            </div>

         
             </div>
  
             
            


    
    	</div>
   </form>


    </div>
     <script type="text/javascript">
        let check = function (){
            if (document.getElementById('password').value === document.getElementById('conpass').value) {
                 
                 
                 document.getElementById('message').style.color = 'green';
                 document.getElementById('message').innerHTML = 'Passwords Match';
                 document.getElementById('save').disabled = false;

            } else {
                  
                 document.getElementById('message').style.color = 'red';
                 document.getElementById('message').innerHTML = 'Passwords do not Match';
                 document.getElementById('save').disabled = true;
            }
        }    
     




     </script>
   s
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
