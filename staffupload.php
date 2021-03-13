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

	$gender = $_POST["gender"];
		
	$phone_number= $_POST["phone_number"];
	
	$email= $_POST["email"];


	  $staffphoto = $_FILES['staffphoto']['name'];
    # code...
    // this variable is for the path of the image storage
	  function staff_upload_file() {
 

 // call the function
  $target = "staff/" .basename($_FILES['staffphoto']['name']);
  $staff_image_temp = $_FILES['staffphoto']['tmp_name'];
  move_uploaded_file($staff_image_temp,$target);

 
 
 

}
 // $stmt->close();
 }	
$firstname = $_POST["firstname"];
	
	$lastname =  $_POST["lastname"];
	$gender = $_POST["gender"];
		
	$phone_number=  $_POST["phone_number"];
	$email=  $_POST["email"];	


$sql = "INSERT INTO staff ( firstname, lastname, gender, phone_number, email,staffphoto)
VALUES ('$firstname', '$lastname', '$gender', '$phone_number','$email','$staffphoto')";

 if ($conn->query($sql)===true) {
staff_upload_file();
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// $conn->close();


// if (isset($_POST["accept"])) {
// 	 $search = $_POST["search"];
// 	 $query = "SELECT * FROM staff WHERE firstname = '$search'";
// 	 $data = $conn->query($query);
// 	 if (isset($data)) {
// 	 	echo "<table class='table table-dark table-hover'>
	 
// 	 			<tr>
// 		 			<th>NAME</th>

// 		 			<th>EMAIL</th>
// 		 			<th>PHONE</th>
// 		 			<th>GENDER</th>
// 		 			<th>ACTION</th>
// 		 			<th>ACTION</th>
// 	 			</tr><tr>";
	 		
	 			
		 			
// 		 					while ($row = mysqli_fetch_assoc($data)) {
// 						 		extract($row);
// 						 		echo "<tr>
// 						 			<td>$firstname</td>
// 						 			<td>$email</td>
// 						 			<td>$phone_number</td>
// 						 			<td>$gender</td>
// 						 			<td><a href='#' class='btn btn-danger'>Delete</a></td>
// 						 			<td><a href='staff.php?edit=$id' class='btn btn-primary'>Edit</a></td>
// 						 			<td>
								
// 						 		</tr>";

// 						 	}
// 		 		$conn->close();
// 	 			echo "</tr>
// 	 		</table>";
	 	
// 	 }

// }
  // $stmt = $conn->prepare("INSERT INTO staff (firstname,lastname,email,gender,email,phone_number,staffphoto) VALUES (?,?,?,?)");
  // $stmt->bind_param("ssss",$firstname,$lastname,$gender,$email,$phone_number,$staffphoto);
  //  $stmt->execute();
  //  $query = $stmt->execute();
  //  if ($query === TRUE) {
  //    # code...
  //      echo "new records inserted";

  //  }  else {
  //     echo "upload failed";
  //  }
  
  // $stmt->close();
 // $conn->close();



?>