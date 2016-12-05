<?php
	require 'db.php';
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	if(isset($_POST['buy-item'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$product = $_POST['product'];

		$placeOrder = placeOrder($name, $email, $product);

		if($placeOrder) {
			$orderSuccess = '<div class="success">Thank you for your purchase</div>';
			header('Location: ../buy.php?orderSuccess=' . $orderSuccess);
		}
	}
?>