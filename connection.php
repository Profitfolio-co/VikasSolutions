<?php

/* $servername = "localhost";
$username = "rounavza_vikassolutions";
$password = "rounavza_vikassolutions";
$dbname = "rounavza_vikassolutions"; */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rounavza_vikassolutions";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
