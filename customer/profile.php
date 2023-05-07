<?php

session_start();
include "config.php";
include "./conn.php";
if(isset($_SESSION['User_id'])) {
  $User_id = $_SESSION['User_id'];
}

?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Yeild Mart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link href="profile.css" rel="stylesheet">

	
</head>
<style>
  table{
text-align:center;


  }

tr{
height: 40px;
position: relative;
left:100px;
}

a{

  text-decoration: none;
}
.form{
  position: relative;

    margin-left: 11%;
    
    margin-right: 60%;

    margin-top:-900px;

}
  
</style>
<body>


  <?php
  include 'wnavigation.php';

 
?>


  
     
    <div class="box">
    
      <h2>Wholesaler Profile </h2><hr><br>
    	<div class="col-md-8">
        <?php
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];

			$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE user_id= $user_id  ");
  if (mysqli_num_rows($select_user) > 0) {
     while ($fetch_user = mysqli_fetch_assoc($select_user)) {
  ?>
				<table class="table table-striped">
					<tr><th colspan="2">User Details:<br><br><br></th></tr>
          <tr><th><i class="fa fa-user-circle"></i>&nbsp; &nbsp; First name : </th><td><?php echo $fetch_user['f_name']?></td></tr>
          
					<tr><th><i class="fa fa-user"></i> &nbsp; &nbsp; Last name :</th><td><?php echo$fetch_user['l_name']?></td></tr>
					<tr><th><i class="fa fa-envelope"></i>&nbsp; &nbsp;  Email :</th><td><?php echo $fetch_user['email']?></td></tr>
					
          <tr><th><i class="fa fa-address-book"></i>&nbsp; &nbsp;  Lane 1 :</th><td><?php echo $fetch_user['lane_1']?></td></tr>
          <tr><th><i class="fa fa-address-card"></i>&nbsp; &nbsp;  Lane 2 :</th><td><?php echo$fetch_user['lane_2']?></td></tr>
					<tr><th><i class="fa fa-home"></i>&nbsp; &nbsp;  City :</th><td><?php echo$fetch_user['city']?></td></tr>

					<tr><th><i class="fa fa-phone"></i>&nbsp; &nbsp;  Phone Number :</th><td><?php echo$fetch_user['phone']?></td></tr>
					<tr><th><i class="fa fa-intersex"></i>&nbsp; &nbsp;  Gender :</th><td><?php echo $fetch_user['gender']?></td></tr>
          <tr><th><i class="fa fa-user"></i>&nbsp; &nbsp;  Role :</th><td><?php echo $fetch_user['role']?></td></tr>
          
				</table>
			</div>

  <br><br>  
  <?php
               };
            };
          };
            ?>
            

    <a href="profile-edit.php"><button class="edit" type ="submit" name="edit" >Edit</button></a>
    
    <a href="profile-delete.php"> <button class="delete" onclick="return confirm('Are you sure you want to delete your account?');">Delete</button></a><br>
    </form>
    </div>
    
    <?php
    
    include "uploadimg.php";
    ?>
    
   <script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
</script>


</body>
</html>

