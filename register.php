<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinny";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$_SESSION['userTaken'] = "Username is already taken";
$_SESSION['userRegistered'] = "registration successful";


$username = '';
$passreg = '';
$email = '';
$role = '';

if (isset($_POST['save'])) {
	
	$username = $_POST['username'];
    $email = $_POST['emailSignUp'];
	$password = $_POST['passReg'];
	$role = $_POST['role'];




$encrypted_pass = md5($password);

$regsql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$regsql);
$num = mysqli_num_rows($result);

 
 if ($num==1) {
 	# code...
 	$_SESSION['userTaken'];
 	header('location: signup.php');
 } else {
 	$sql = "INSERT INTO users (username,emailSignUp,passReg,role) VALUES ('$username','$email','$password','$role')";
 	/*$sql = "INSERT INTO `users`(`id`, `username`, `emailSignUp`, `role`, `passReg`, `reg_date`) VALUES (null,'$username','$emailSignUp','','','')";*/
 	if ($conn->query($sql)===true) {

  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . 



 	mysqli_query($conn,$sql);
 	
 	$_SESSION['userRegistered'];

 	header('location: login.php?registered=true');
 }
 

}
}
?>