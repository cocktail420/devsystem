<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/movie.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container container-fluid">
	<div class="aler alert-success">
	<form class="form-horizontal" method="post" action="student.php">
		<u>
		<h2>Students Form</h2>
		</u>
		<div class="form-group col-lg-6">
			<label>firstname:</label>
			<input type="text" placeholder="firtsname" class="form-control" name="firstname">
		</div>
	<div class="form-group col-lg-6">
			<label>lastname:</label>
			<input type="text" placeholder="lastname" class="form-control" name="lastname">
		</div>
	<div class="form-group col-lg-6">
			<label>email:</label>
			<input type="text" placeholder="email" class="form-control" name="email">
		</div>
	<div class="form-group col-lg-6">
			<label>admissionnumber:</label>
			<input type="text" placeholder="admissionnumber" class="form-control" name="admission_number">
		</div>


<input type="submit" class="btn btn-primary" name="submit" value="submit">
<a href="fee.html">
	<input type="text" class="btn btn-warning" value="Fee Balance">
	</a>
	<a href="app.html">
	<p style="text-align: right;">Submit as a contuing student</p>
	</a>
	</div>
</div>
<footer>
	<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
	</form>
	</div>
</div>
</body>
</html>











<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinny";


$conn = new mysqli($servername, $username, $password, $dbname);


// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "connection successfuly";
// //create a database
// $sql = 'CREATE DATABASE vinny';
// if ($conn->query($sql)=== true) {
// 	# code...
// 	echo "database created";
// }
// else{
// 	echo "failed :" .$conn->error;
// }
//creating a table
// $sql = "CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// admission_number INT(22),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//  if ($conn->query($sql)===true) {
//  	# code...
//  	echo "table created";
//  }
//  else{
//  	echo "error";
//  }

// $sql = "CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// gender VARCHAR (50),
// phone_number INT(20),
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//  if ($conn->query($sql)===true) {
//  	# code...
//  	echo "table created";
//  }
//  else{
//  	echo "error";
//  }
if (isset($_POST["submit"])) {
	
	$firstname = $_POST["firstname"];
	
	$lastname = $_POST["lastname"];
	
	$email = $_POST["email"];
	

	$admission_number= $_POST["admission_number"];
	
	if (isset($_POST['submit'])) {
	
if (empty($_POST['firstnamename'])) {
		# code...
		echo "an email is required";
	}else{
		$email = $_POST['lastname'];
		if (!preg_match('/^[a-zA-Z\s]+$', $lastname)) {
			# code...
			echo "name must be letters";
		}
		
	}

if (empty($_POST['lastname'])) {
		# code...
		echo "an email is required";
	}else{
		$email = $_POST['lastname'];
		if (!preg_match('/^[a-zA-Z\s]+$', $lastname)) {
			# code...
			echo "name must be letters";
		}
		
	}
	if (empty($_POST['email'])) {
		# code...
		echo "an email is required";
	}else{
		$email = $_POST['email'];
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			# code...
			echo "email must be valid";
		}
		
	}








if (empty($_POST['admission_number'])) {
		# code...
		echo "an email is required";
	}else{
		$email = $_POST['admission_number'];
		if (!preg_match('/^[a-zA-Z\s]+$', $admission_number)) {
			# code...
			echo "name must be letters";
		}
		
	}



















}




	
	


$sql = "INSERT INTO students ( firstname, lastname, email, admission_number)
VALUES ('$firstname', '$lastname', '$email', $admission_number)";

 if ($conn->query($sql)===true) {

  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$conn->close();
}

?>