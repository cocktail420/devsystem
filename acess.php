<?php
session_start()
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinny";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();

$_SESSION["userunavailable"]= "please try again,incorrect"
 if(isset($_post["save"])){
 	$emaillog=$_POST['emaillog'];
	$passlog=$_POST['passlog'];

 
$sql= "SELECT  * FROM users WHERE email = '$emaillog' and $password ='"+md5($passlog)+"'";

$result=mysql_query($conn,$sql);
$num = mysql_num_rows($result)


if($num==1){
	$_SESSION['activeuser'] = $emaillog



	header(location: index)
}else{
	$_SESSION[userunavailable]
}
}

?>