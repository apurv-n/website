<?php

// Allow POST method
header("Access-Control-Allow-Methods: POST");  

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    session_start();

    $hardcoded_regno = "1234";
    $hardcoded_passwd = "abcd";

    $regno = $_POST["regno"];
    $passwd = $_POST["passwd"];

    if($regno === $hardcoded_regno && $passwd === $hardcoded_passwd) {

        $_SESSION['user_id'] = $hardcoded_regno;
        $_SESSION['username'] = 'Hardcoded User';

        // Use absolute URL for redirect
        $url = "https://apurv-n.github.io//website/Code/HTML/dashboard.html"; 
        header("Location: $url"); 
        exit();

    } else {  

        echo "Invalid credentials";
    
    }

}

?>
