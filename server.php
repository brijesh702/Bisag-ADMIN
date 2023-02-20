<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
$firstname="";
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  // Connect to the database
  $conn = new mysqli("localhost", "root", "", "style_sanctuary");
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  // Select the user from the database
  $sql = "SELECT * FROM admin_user WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($password==$row['PASSWORD']) {
              $_SESSION['email'] = $email;  
              $_SESSION['first_name'] = $row['first_name'];
			  $_SESSION["loggedin"] = true;
              header("Location: index.php");
              exit();
          } else {
              echo "Invalid email or password";
          }
      }
  } else {
      echo "Invalid email  password";
  }
  $conn->close();
}
?>
