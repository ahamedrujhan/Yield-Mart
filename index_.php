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
		left: 250px;
		top: 200px;

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

	<form method="post">
		<?php if (isset($_GET['error'])) {
			$error = $_GET['error'];
		} ?>

		<form action="./auth.php" method="POST">
			<?php if (isset($_GET['error'])) { ?>
				<div class="error">
					<?php echo $error; ?>




				</div>
			<?php } ?>
			<div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">

				<div class="h2">Login</div>

				<div><small class="my-1 js-error js-error-email text-danger"></small></div>

				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
					<input name="email" type="text" class="form-control p-3" placeholder="Email">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
					<input name="password" type="password" class="form-control p-3" placeholder="Password">
				</div>


				<a href="forgot.php">Forgot Password</a>
			</div>
			<button class="btn btn-primary col-12" type="submit">Login</button>

			<div class="m-2">
				Dont have an account? <a href="signup.php">signup here</a>
			</div>
			</div>
		</form>

</body>
<?php
session_start();
include "./conn.php";
if (isset($_POST['submit'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		function validate($txt)
		{
			$txt = trim($txt);
			$txt = stripslashes($txt);
			$txt = htmlspecialchars($txt);
			return $txt;
		}
	}
	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
		exit();
	} elseif (empty($pass)) {
		header("Location: login.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE email= '$uname' AND password= '$pass'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);




			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['id'] = $row['id'];
			if ($row["role"] == "Manager") {
				$url = "./manager/mdash.php";
				header("Location: $url");
			}
			if ($row["role"] == "Farmer") {
				$url = "./Farmer/stocks.php";
				header("Location: $url");
			}
			if ($row["role"] == "Farmer") {
				$url = "./farmer/stocks.php";
				header("Location: $url");
			}
			if ($row["role"] == "Admin") {
				$url = "./admin/admin_home.php";
				header("Location: $url");
			}
			if ($row["role"] == "Customer") {
				$url = "./customer/home.php";
				header("Location: $url");
			}
			/*$url = "./admin_home.php";
			header("Location: $url");
			*/
		} else {
			header("Location: login.php?error=Incorrect User Name or Password");
			exit();
		}
	}
}
?>

</html>

<!--
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
				alert("Login successfull!");
				window.location.href = 'home.php';
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
</script>
-->