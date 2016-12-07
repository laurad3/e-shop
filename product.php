<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	require 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Shop</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php include_once 'include/header.php'; ?>

		<a href="index.php"><div class="back">< Back</div></a>

		<?php
			$product = $_GET['product'];
			$productArray = getProductData($product);
			// echo '<pre>', print_r($productArray), '</pre>';

			foreach($productArray as $key => $value) {
				$productName = $value['product_name'];
				$productFull= $value['full_description'];
				$productImage = $value['image_path'];
				$productYear = $value['product_year'];
				$productPrice = $value['product_price'];
				?>
				
				<div class="product-page-title"><?php echo $productName; ?></div>

				<div class="product-page-image">
					<img src="db/<?php echo $productImage; ?>" alt="">
				</div>

				<div class="product-page-info">
					<div class="product-page-info-container">
						<div class="product-page-description"><?php echo $productFull; ?></div>

						<div class="product-page-details">
							<div>
								<p class="product-page-details-title">Seller:</p>
								<p class="product-page-details-subtitle">Laura</p>
							</div>

							<div>
								<p class="product-page-details-title">Year</p>
								<p class="product-page-details-subtitle"><?php echo $productYear; ?></p>
							</div>
						</div>
					</div>

					<div class="buy-container">
						<a href="buy.php?product=<?php echo $productName; ?>" class="buy-btn">Buy Now!</a>

						<div class="product-page-price">€<?php echo $productPrice; ?>.00</div>
					</div>
				</div>

				<?php
			}
		?>
	</div>

	<footer><a href="admin.php">Admin</a></footer>
</body>
</html>