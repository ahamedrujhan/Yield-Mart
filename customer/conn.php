<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mart";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
if (!$con) {
    echo "Can't Connect to database";
}
