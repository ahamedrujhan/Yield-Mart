<?php
//mart db config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mart";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Can't Connect to database";
}
