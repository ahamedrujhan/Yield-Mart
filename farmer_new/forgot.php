<?php
//password reset option using phpmailer
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
	header("Location: index.php");
	die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$code = mysqli_real_escape_string($conn, md5(rand()));

	if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
		$query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

		if ($query) {
			echo "<div style='display: none;'>";
			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'YOUR_EMAIL_HERE';                     //SMTP username
				$mail->Password   = 'YOUR_PASSWORD_HERE';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('YOUR_EMAIL_HERE');
				$mail->addAddress($email);

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'no reply';
				$mail->Body    = 'Here is the verification link <b><a href="http://localhost/login/change-password.php?reset=' . $code . '">http://localhost/login/change-password.php?reset=' . $code . '</a></b>';

				$mail->send();
				echo 'Message has been sent';
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			echo "</div>";
			$msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
		}
	} else {
		$msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
	}
}

?>




<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
</head>
<style>
	.m-3 {
		text-align: right;

	}

	.col-md-4 {
		background: rgba(159, 157, 157, 0.5);
		position: relative;
		left: 150px;
		top: 100px;

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

	<form method="post" onsubmit="myaction.collect_data(event, 'login')">
		<div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">

			<div class="h2">Forgot Password</div>

			<div><small class="my-1 js-error js-error-email text-danger"></small></div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
				<input name="email" type="text" class="form-control p-3" placeholder="Email">
			</div>


			<div class="progress my-3 d-none">
				<div class="progress-bar" role="progressbar" style="width: 50%;">Working... 25%</div>
			</div>

			<button class="btn btn-primary col-12">Send Reset Link</button>

			<div class="m-2">
				Back to! <a href="index.php">Login </a>
			</div>
		</div>
	</form>

</body>

</html>

<script>
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

			document.querySelector(".progress").classList.sell("d-none");

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
				alert("Login successfull!");
				window.location.href = 'profile.php';
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
	$(document).ready(function(c) {
		$('.alert-close').on('click', function(c) {
			$('.main-mockup').fadeOut('slow', function(c) {
				$('.main-mockup').sell();
			});
		});
	});
</script>