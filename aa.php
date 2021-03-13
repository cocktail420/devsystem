<?php
if (isset($_POST['submit'])) {
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

if (empty($_POST['name'])) {
		# code...
		echo "an email is required";
	}else{
		$email = $_POST['name'];
		if (!preg_match('/^[a-zA-Z\s]+$', $name)) {
			# code...
			echo "name must be letters";
		}
		
	}

}
?>