<?php


// Database connection For Local Session
$servername = "localhost";
$username = "root";
$password = "";
$database = "alefba";



// Database connection For Live Session
// $servername = "localhost";
// $username = "u624290640_alefbauser";
// $password = "AlefbaDb123!@#";
// $database = "u624290640_alefbadb";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}