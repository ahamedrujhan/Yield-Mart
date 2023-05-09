<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	<?php if (isset($_GET['error'])) { ?>
		<div class="error">
			<?php echo $_GET['error']; ?>




		</div>
	<?php } ?>

	<form method="post" action="./auth.php">
		<div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">

			<div class="h2">Login</div>



			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">
					<i class="fa-solid fa-envelope"></i>
				</span>
				<input type="text" class="form-control p-3" name="username" maxlength="25" required>
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
				<input type="password" name="password" maxlength="25" class="form-control p-3" required>
			</div>
			<div class="m-3">
				<a href="forgot.php">Forgot Password</a>
			</div>
			<button class="btn btn-primary col-12">Login</button>

			<div class="m-2">
				Dont have an account? <a href="signup.php">signup here</a>
			</div>
		</div>
	</form>

</body>
<?php
session_start();
?>

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
	*/
</script>