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

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php include_once 'include/header.php'; ?>

		<nav class="categories">
			<ul>
				<li class="selected"><a href="#" id="all">All</a></li>
				<li><a href="#" id="books">Books</a></li>
				<li><a href="#" id="cases">Cases</a></li>
				<li><a href="#" id="mugs">Mugs</a></li>
			</ul>
		</nav>

		<div class="products">
			<?php
				$itemsArray = getAllItems();
				// echo '<pre>', print_r($itemsArray), '</pre>';

				foreach($itemsArray as $key => $value) {
					$productName = $value['product_name'];
					$productShort = $value['short_description'];
					$productImage = $value['image_path'];
					$productId = $value['id'];
					?>
					
					<a href="product.php?product=<?php echo $productId; ?>">
						<div class="product">
							<div class="overlay">
								<div class="product-title"><?php echo $productName; ?></div>
								<div class="product-short"><?php echo $productShort; ?></div>
							</div>
							<img src="db/<?php echo $productImage; ?>" alt="">
						</div>
					</a>

					<?php
				}
			?>
		</div>
	</div>

	<footer><a href="admin.php">Admin</a></footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>