<?php
	require 'config.php';

	function connect() {
		try {
			$db = new PDO('mysql:host='.db_hostname.';dbname='.db_database, db_username, db_password);

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die($e->getMessage());
		}

		return $db;
	}

	function getAllItems() {
		$db = connect();

		$query = 'SELECT * FROM items';

		$getItems = $db->prepare($query);

		$getItems->execute();

		if($getItems) {
			return $getItems->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function getProductData($product) {
		$db = connect();

		$query = 'SELECT * FROM items WHERE id= :productId';

		$getProductData = $db->prepare($query);

		$getProductData->execute(array(
			'productId'=>$product
		));

		if($getProductData) {
			return $getProductData->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function getItemsByCategory($category) {
		$db = connect();

		$query = 'SELECT * FROM items WHERE product_category = :category';

		$getItemsByCategory = $db->prepare($query);

		$getItemsByCategory->execute(array(
			'category'=>$category
		));

		if($getItemsByCategory) {
			return $getItemsByCategory->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function adminCheckLogin($name, $password) {
		$db = connect();

		$adminName = $name;
		$adminPassword = $password;

		$query = 'SELECT admin_name, admin_password FROM admin WHERE admin_name = :name AND admin_password = :password';

		$adminLogin = $db->prepare($query);

		$adminLogin->execute(array(
			':name'=>$adminName,
			':password'=>$adminPassword
		));

		if($adminLogin->rowCount()) {
			$adminLogin->closeCursor();
			return TRUE;
		} else {
			$adminLogin->closeCursor();
			return FALSE;
		}
	}

	function addProduct($name, $shortDescription, $fullDescription, $image, $year, $price, $category) {
		$db = connect();

		$query = 'INSERT INTO items(product_name, short_description, full_description, image_path, product_year, product_price, product_category) VALUES(:name, :shortdescription, :fulldescription, :image, :year, :price, :category)';

		$addProduct = $db->prepare($query);

		$addProduct->execute(array(
			':name'=>$name,
			':shortdescription'=>$shortDescription,
			':fulldescription'=>$fullDescription,
			':image'=>$image,
			':year'=>$year,
			':price'=>$price,
			':category'=>$category
		));

		return $addProduct;
	}

	function placeOrder($name, $email, $product) {
		$db = connect();

		$query = 'INSERT INTO orders(name, email, product) VALUES(:name, :email, :product)';

		$placeOrder = $db->prepare($query);

		$placeOrder->execute(array(
			':name'=>$name,
			':email'=>$email,
			':product'=>$product
		));

		return $placeOrder;
	}

	function getOrders() {
		$db = connect();

		$query = 'SELECT * FROM orders';

		$getOrders = $db->prepare($query);

		$getOrders->execute();

		return $getOrders->fetchAll(PDO::FETCH_ASSOC);
	}
?>