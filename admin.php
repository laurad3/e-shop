<?php
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
		<?php 
			include_once 'include/header.php';

			if(isset($_SESSION['admin'])) {
				header('Location: admin-index.php');
			} else {
				include_once 'include/login_form.php';
			}
		 ?>
	</div>
</body>
</html>