<?php

// Check POST access 
header("Access-Control-Allow-Methods: POST");

// Debugging 
error_reporting(E_ALL);
ini_set('display_errors', 1); 

// TEST POST access
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "POST received";
  die;
}
else {
  echo "ERROR: " . $_SERVER['REQUEST_METHOD'] . " request not allowed";
  die; 
}

// Rest of code
include "connection.php"; 

session_start();

// Get post data
$regno = $_POST["regno"];  
$passwd = $_POST["passwd"];

// Process login logic...
