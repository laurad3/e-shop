<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);
	
	session_start();
	require 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Shop</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php include_once 'include/header.php'; ?>

		<a href="db/admin_logout.php"><div class="back">Logout</div></a>

		<?php
			if(isset($_SESSION['admin'])) {
				include_once 'include/orders.php';
				include_once 'include/add_item_form.php';
			} else {
				header('Location: admin.php');
			}
		?>
	</div>
</body>
</html>