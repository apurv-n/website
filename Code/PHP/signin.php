<?php

session_start();

$hardcoded_regno = "1234";
$hardcoded_passwd = "abcd";

$regno = $_POST["regno"];
$passwd = $_POST["passwd"];

if($regno === $hardcoded_regno && $passwd === $hardcoded_passwd) {

  // Valid credentials
  $_SESSION['user_id'] = $hardcoded_regno;
  $_SESSION['username'] = 'Hardcoded User';
  
  header('Location: /Website/Code/HTML/dashboard.html'); 
  exit;

} else {

  // Invalid credentials
  echo "Invalid username or password";

}
