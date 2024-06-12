<?php

session_start();
include "config.php";

$id = $_SESSION['user_id'];
$delete = "DELETE FROM users WHERE user_id = $id";
$run_data = mysqli_query($conn,$delete);

if($run_data){
	header('location:login_.php');
}else{
	echo "Donot Delete";
}
?>



