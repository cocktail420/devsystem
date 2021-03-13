<?php

session_start();

$db=mysqli_connect("localhost","root","","vinny");
$emailSignup = "";
$passReg ="";

if (isset($_POST['save'])) {

    if(empty($_POST['emaillog'])&&empty($_POST['passlog'])) {
        $error="Fields are Mandatory";
    } else {

        $emaillog = mysqli_real_escape_string($db,$_POST['emaillog']);

       
        $passlog = mysqli_real_escape_string($db,$_POST['passlog']);

        
        // $passlog=md5($passlog);

     
        $sql="SELECT * FROM users WHERE emailSignUp='$emaillog' AND passReg='$passlog'";

    
        $result=mysqli_query($db,$sql);

       
        if(mysqli_num_rows($result) > 0){
            $row=mysqli_fetch_array($result);
            $_SESSION['id']=$row['id'];
            $_SESSION['role']=$row['role'];

          
            switch ($_SESSION['role']) {
                case "Staff":
              
                    header("Location: http://localhost/projects/movie/moto/staff.php"); 
                    break;
                default:                 
                  header("Location: http://localhost/projects/movie/moto/student.php"); 
                    break;
            }
        }else{
            session_destroy();
                  header("Location: http://localhost/projects/movie/moto/login.php");
            $error='Customer_name/password combination incorrect';

        }
    }
}
    ?>