<?php

session_start(); 

include "connection.php";

$regno = $_POST["regno"];
$passwd = $_POST["passwd"];

$regno = stripcslashes($regno);
$password = stripcslashes($passwd);

$regno = mysqli_real_escape_string($conn,$regno);  
$password = mysqli_real_escape_string($conn,$password);

$sql = "SELECT * FROM student WHERE reg_no='$regno' and passwd='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  $row = mysqli_fetch_assoc($result);

  // Set login session data
  $_SESSION['user_id'] = $row['id']; 
  $_SESSION['username'] = $row['name'];

  // Check registration status
  if($row["is_registered"] == 1){
    
    // Redirect to Dashboard HTML
    header('Location: /Website/Code/HTML/dashboard.html'); 
    exit;

  } else {

    // Redirect to Registration HTML
    header('Location: /Website/Code/HTML/Registration.html');
    exit;
  
  }

} else {  

  // Invalid login  
  echo "Invalid username or password";

}
