<?php 
session_start();
include "config.php";


if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
   
   

    $query=mysqli_query($conn,"SELECT * FROM users where user_id='$user_id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);


}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Yeild Mart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link href="profile.css" rel="stylesheet">

	
</head>
<style>

a{
color:black;
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
<body>
<?php include 'wnavigation.php'; ?>
<?php

if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
        	$get_data = "SELECT * FROM users WHERE user_id=$user_id";
        	$run_data = mysqli_query($conn,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				
				$id = $row['user_id'];
				$fname = $row['f_name'];
				$lname= $row['l_name'];
				$phone = $row['phone'];
				$lane_1 = $row['lane_1'];
				$lane_2 = $row['lane_2'];
				$city = $row['city'];
				$email = $row['email'];
				$role = $row['role'];
                
        		$gender = $row['gender'];
				
			}
		}
        	?>
			<?php





      if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $gender = $_POST['gender'];
        $lname= $_POST['lastname'];
		$lane1 = $_POST['lane1'];
		$lane2 = $_POST['lane2'];	
        $role= $_POST['role'];
        $phone = $_POST['phone'];
		$email = $_POST['email'];
		$city = $_POST['city'];
			
        $password = $_POST['password'];
      $query = "UPDATE users SET f_name = '$fname',
                      gender = '$gender', l_name = '$lname', lane_1 = '$lane1' , gender='$gender' ,lane_2 = '$lane2',role = '$role',phone = '$phone' ,email = '$email'
					  ,city = '$city'  WHERE user_id = '$user_id'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile-edit.php";
        </script>
        <?php
             }  
			
			            
?>

			<div class ="box">
				<h2>Edit Profile</h2><hr><br>

				<form method='POST' action="profile-edit.php">
					<table class='table table-striped'>
						<tr><th colspan='2'>User Details:<br><br></th></tr>
						
						<tr><th><i class='bi bi-person-circle'></i> First name</th>
							<td>
								<input value='<?php echo $fname?>' type='text' class='form-control' name='firstname' placeholder='First name'>
								<div><small class='js-error js-error-firstname text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class="bi bi-person-square"></i> Last name</th>
							<td>
								<input value="<?php echo $lname?>" type="text" class="form-control" name='lastname' placeholder="Last name">
								<div><small class="js-error js-error-lastname text-danger"></small></div>
							</td>
						</tr>
						
						<tr><th><i class='bi bi-envelope'></i> Email</th>
							<td>
								<input value='<?php echo $email?>' type='text' class='form-control' name='email' placeholder='Email'>
								<div><small class='js-error js-error-email text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-telephone'></i> Phone Number</th>
							<td>
							<input value='<?php echo $phone?>' type='text' class='form-control' name='phone' placeholder='Phone Number'>
							<div><small class='js-error js-error-Phone Number text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-house-door-fill'></i> Lane 1</th>
							<td>
							<input value='<?php echo $lane_1?>' type='text' class='form-control' name='lane1' placeholder='Lane 1'>
							<div><small class='js-error js-error-lane1 text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-house-door-fill'></i> Lane 2</th>
							<td>
							<input value='<?php echo $lane_2?>' type='text' class='form-control' name='lane2' placeholder='Lane 2'>
							<div><small class='js-error js-error-lane2 text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-house-door-fill'></i> City</th>
							<td>
							<input value='<?php echo $city?>' type='text' class='form-control' name='city' placeholder='City'>
							<div><small class='js-error js-error-city text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-house-door-fill'></i> Role</th>
							<td>
							<input value='<?php echo $role?>' type='text' class='form-control' name='role' placeholder='Role'>
							<div><small class='js-error js-errorrole text-danger'></small></div>
							</td>
						</tr>
						<tr><th><i class='bi bi-house-door-fill'></i> Gender</th>
							<td>
							<input value='<?php echo $gender?>' type='text' class='form-control' name='gender' placeholder='Gender'>
							<div><small class='js-error js-error-gender text-danger'></small></div>
							</td>
						</tr>
						<tr><th> Password</th>
							<td>
							<input type="password" name="password" autocomplete="current-password" required="" id="id_password">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;margin-top: -5px; "></i>
							</td>
							   
    
							<script>
 const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});</script>
						</tr>
					

					</table>

        <br>
		 <button ><a href="profile.php">Back </a></button>
					<button class="save" type ="submit" name="submit">Save</button>
					
						

					</div>
				</form>

			</div>
		</div>
		
		<?php
    
    include "uploadimg.php";
    ?>
		
	
	
</body>
</html>


