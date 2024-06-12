<?php
//farmer profile view site using function.php

require 'functions.php';

if (!is_logged_in()) {
	redirect('index.php');
}

$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

$row = db_query("select * from users where id = :id limit 1", ['id' => $id]);

if ($row) {
	$row = $row[0];
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yeild Mart</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
</head>
<style>
	table {
		font-size: 15px;


	}

	.col-md-8 {
		position: relative;
		left: 10px;

	}

	.row {
		background: rgba(172, 230, 181, 0.5);
		position: relative;
		left: 50px;
		width: 1100px;
		height: 450px;
	}

	.table-striped tr {
		width: 50%;
		padding: 5px 15px;
	}
</style>

<body>


	<?php if (!empty($row)) : ?>
		<?php include 'header.php'; ?>
		<div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
			<div class="col-md-4 text-center">
				<img src="<?= get_image($row['image']) ?>" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
				<div>

					<?php if (user('id') == $row['id']) : ?>

						<a href="profile-edit.php">
							<button class="mx-auto m-1 btn-sm btn btn-primary" style="height:30px;width:150px">Edit</button><br />
						</a>
						<a href="profile-delete.php">
							<button class="mx-auto m-1 btn-sm btn btn-warning text-white" style="height:30px;width:150px;background-color:#942929">Delete</button><br />
						</a>
						<a href="index.php">
							<button class="mx-auto m-1 btn-sm btn btn-info text-white" style="height:30px;width:150px; background-color:#206b44">Logout</button>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="h2">User Profile</div>
				<table class="table table-striped"><br><br>
					<tr>
						<th colspan="2">User Details:</th>
					</tr>
					<tr>
						<th style="padding:5px"><i class="bi bi-envelope"></i> Email</th>
						<td><?= esc($row['email']) ?></td>
					</tr>
					<tr>
						<th><i class="bi bi-person-circle"></i> First name</th>
						<td><?= esc($row['firstname']) ?></td>
					</tr>
					<tr>
						<th><i class="bi bi-person-square"></i> Last name</th>
						<td><?= esc($row['lastname']) ?></td>
					</tr>
					<tr>
						<th><i class="bi bi-house-door-fill"></i> Address</th>
						<td><?= esc($row['address']) ?></td>
					</tr>
					<tr>
						<th><i class="bi bi-telephone"></i> Phone Number</th>
						<td><?= esc($row['phone']) ?></td>
					</tr>
					<tr>
						<th><i class="bi bi-gender-ambiguous"></i> Gender</th>
						<td><?= esc($row['gender']) ?></td>
					</tr>
				</table>
			</div>
		</div>
	<?php else : ?>
		<div class="text-center alert alert-danger">That profile was not found</div>
		<a href="index.php">
			<button class="btn btn-primary m-4">Home</button>
		</a>
	<?php endif; ?>

</body>

</html>