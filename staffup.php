<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinny";


$conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "connection successfuly";s
if (isset($_POST["accept"])) {
   $search = $_POST["search"];
   $query = "SELECT * FROM staff WHERE firstname = '$search'";
   $data = $conn->query($query);
    $result=mysql_query($query);
   if (isset($data)) {
    echo "<table class='table table-dark table-hover'>
   
        <tr>
          <th>NAME</th>

          <th>EMAIL</th>
          <th>PHONE</th>
          <th>GENDER</th>
             <th>staffphoto</th>
          <th>ACTION</th>
          <th>ACTION</th>
        </tr><tr>";
      
        
          
              while ($row = mysqli_fetch_assoc($data)) {
                extract($row);
                echo "<tr>
                  <td>$firstname</td>
                  <td>$email</td>
                  <td>$phone_number</td>
                  <td>$gender</td>
                   <td>$staffphoto</td>
                  <td><a href='#' class='btn btn-danger'>Delete</a></td>
                  <td><a href='staff.php?edit=$id' class='btn btn-primary'>Edit</a></td>
                  <td>
                
                </tr>";

              }

        $conn->close();
        echo "</tr>
      </table>";
    
   }

}
  if ( isset($_POST['edit'])){
            $firstname = $_POST['firstname'];
            $lastname = md5($_POST['lastname']);
            $staffphoto = $_POST['staffphoto'];
            $connection = mysqli_connect("localhost","root","","vinny");
            $query = "UPDATE staff SET firstname='$lastname', staffphoto'$staffphoto' WHERE lfirstname LIKE '$firstname'";
            mysqli_query($connection,$query);
            echo mysqli_error($connection);
            mysqli_close($connection);
        }

?> 