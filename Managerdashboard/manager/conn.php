<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Can't Connect to database";
}
