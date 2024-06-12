<?php


 






if(isset($_POST['save'])){
	if(count($_POST)>0) {
		mysqli_query($conn,"UPDATE users set  f_name='" . $_POST['firstname'] . "', l_name='" . $_POST['lastname'] . "', city='" . $_POST['city'] . "' ,email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',lane_1='" . $_POST['lane1'] . "',lane_2='" . $_POST['lane2'] . "',password='" . $_POST['password'] . "',gender='" . $_POST['gender'] . "',role='" . $_POST['role'] . "' WHERE user_id =$user_id");
		$message = "Updated succesfully";
		}

  
}


?>