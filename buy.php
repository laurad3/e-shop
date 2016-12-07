<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

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
		 ?>

		 <a href="index.php"><div class="back">< Home</div></a>

		 <?php echo $_GET['orderSuccess']; ?>

		 <form method="post" class="buy-item-form" action="db/order.php">
			<input type="text" placeholder="What do they call you?" name="name">
			<input type="text" placeholder="Email" name="email">
			<input type="text" value="<?php echo $_GET['product']; ?>" name="product">

			<button type="submit" class="add-item-btn" name="buy-item">Buy</a>
		</form>
	</div>
</body>
</html>