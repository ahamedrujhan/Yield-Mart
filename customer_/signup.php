<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
</head>

<style>
	.col-md-8 {
		background: rgba(159, 157, 157, 0.5);
		position: relative;
		left: 200px;
	}

	body {
		background-image: url('https://img.freepik.com/premium-photo/border-fresh-vegetables-wooden-background-with-copy-space_116547-609.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;

	}

	.h2 {
		color: black;
		text-align: center;

	}

	.m-2 {
		color: white;

	}

	a {
		color: black;

	}
</style>

<body>
	<?php
	include "./conn.php";
	$fnameErr = $lnameErr = $emailErr =  $numErr = $addErr = $pwErr = $cpwErr = ""; ?>

	<form method="post" action="signup_bak.php">
		<div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">

			<div class="h2">Signup</div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
				<input name="fname" type="text" class="form-control p-3" placeholder="First name">
			</div>
			<div><small class="js-error js-error-firstname text-danger"></small></div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-person-square"></i></span>
				<input name="lname" type="text" class="form-control p-3" placeholder="Last name">
			</div>
			<div><small class="js-error js-error-lastname text-danger"></small></div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-house-door-fill"></i></span>
				<input name="add1" type="text" class="form-control p-3" placeholder="Street name 1">
			</div>
			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-house-door-fill"></i></span>
				<input name="add2" type="text" class="form-control p-3" placeholder="Street name 2">
			</div>
			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-house-door"></i></span>
				<input name="city" type="text" class="form-control p-3" placeholder="City">
			</div>
			<div><small class="js-error js-error-lastname text-danger"></small></div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
				<input name="phone" type="text" class="form-control p-3" placeholder="Phone Number">
			</div>
			<div><small class="js-error js-error-lastname text-danger"></small></div>


			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
				<select class="form-select" name="gender">
					<option selected value="">--Select Gender--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div><small class="js-error js-error-gender text-danger"></small></div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
				<input name="email" type="text" class="form-control p-3" placeholder="Email">
			</div>
			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-basket"></i></span>
				<select class="form-select" name="role">
					<option selected value="">--Select Role--</option>
					<option value="Farmer">Farmer</option>
					<option value="Customer">Customer</option>
				</select>
			</div>
			<div><small class="js-error js-error-gender text-danger"></small></div>
			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
				<input name="pwd" type="password" class="form-control p-3" placeholder="Password">
			</div>
			<div><small class="js-error js-error-password text-danger"></small></div>

			<div class="input-group mt-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
				<input name="rpwd" type="password" class="form-control p-3" placeholder="Retype Password">
			</div>
			<!--
			<div class="progress mt-3 d-none">
				<div class="progress-bar" role="progressbar" style="width: 50%;">Working... 25%</div>
			</div>
-->

			<button class="mt-3 btn btn-primary col-12" type="submit">Signup</button>
			<div class="m-2">
				Already have an account? <a href="index.php">login here</a>
			</div>

		</div>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Empty checking....
		if (empty($_POST["fname"])) {
			$fnameErr = "First Name is required";
		}
		if (empty($_POST["lname"])) {
			$lnameErr = "Last Name is required";
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		}
		if (empty($_POST["number"])) {
			$numErr = "Phone Number is required";
		}
		if (empty($_POST["address"])) {
			$addErr = "Address is required";
		}
		if (empty($_POST["pass"])) {
			$pwErr = "Password is required";
		}
		if (empty($_POST["c_pass"])) {
			$cpwErr = "Confirm Password is required";
		}
	}
	?>
</body>

</html>

<script>
	/*
	var myaction = {
		collect_data: function(e, data_type) {
			e.preventDefault();
			e.stopPropagation();

			var inputs = document.querySelectorAll("form input, form select");
			let myform = new FormData();
			myform.append('data_type', data_type);

			for (var i = 0; i < inputs.length; i++) {

				myform.append(inputs[i].name, inputs[i].value);
			}

			myaction.send_data(myform);
		},

		send_data: function(form) {

			var ajax = new XMLHttpRequest();

			document.querySelector(".progress").classList.remove("d-none");

			//reset the prog bar
			document.querySelector(".progress-bar").style.width = "0%";
			document.querySelector(".progress-bar").innerHTML = "Working... 0%";

			ajax.addEventListener('readystatechange', function() {

				if (ajax.readyState == 4) {
					if (ajax.status == 200) {
						//all good
						myaction.handle_result(ajax.responseText);
					} else {
						console.log(ajax);
						alert("An error occurred");
					}
				}
			});

			ajax.upload.addEventListener('progress', function(e) {

				let percent = Math.round((e.loaded / e.total) * 100);
				document.querySelector(".progress-bar").style.width = percent + "%";
				document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
			});

			ajax.open('post', 'ajax.php', true);
			ajax.send(form);
		},

		handle_result: function(result) {
			console.log(result);
			var obj = JSON.parse(result);
			if (obj.success) {
				alert("Profile created successfully");
				window.location.href = 'index.php';
			} else {

				//show errors
				let error_inputs = document.querySelectorAll(".js-error");

				//empty all errors
				for (var i = 0; i < error_inputs.length; i++) {
					error_inputs[i].innerHTML = "";
				}

				//display errors
				for (key in obj.errors) {
					document.querySelector(".js-error-" + key).innerHTML = obj.errors[key];
				}
			}
		}
	};
	*/
</script>