<?php

// Params to connect to db
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "register-login";

// connect to db
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($conn){

} else{
  die("database connection failed");
}