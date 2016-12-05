<?php
	session_start();
	require 'db.php';

	if(isset($_POST['add-item'])) {
		$productName = $_POST['product-name'];
		$productShort = $_POST['short-description'];
		$productFull = $_POST['full-description'];
		$productYear = $_POST['product-year'];
		$productPrice = $_POST['product-price'];
		$productCategory = $_POST['product-category'];

		// upload image to uploads
		$targetDir = 'uploads/';
		$targetFile = $targetDir . basename($_FILES['product-image']['name']);
		$imageName = 'db/' . $targetFile;

		$uploadOK = 1;
		$fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

		// allow certain file formats
		if($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'gif') {
			$typeError = '<div class="type-error">Only jpg, png, jpeg and gif images are allowed</div>';
			$uploadOK = 0;
		}

		// check if file already exists
		if(file_exists($targetFile)) {
			$existsError = '<div class="exists-error">The image file already exists. Give another name</div>';
			$uploadOK = 0;
		}

		if($uploadOK == 1) {
			$addProduct = addProduct($productName, $productShort, $productFull, $targetFile, $productYear, $productPrice, $productCategory);

			if($addProduct) {
				move_uploaded_file($_FILES['product-image']['tmp_name'], $targetFile);
				$uploadSuccess = '<div class="success">Product Added</div>';
				header('Location: ../admin-index.php?uploadSuccess=' . $uploadSuccess);
			}
		} else {
			header('Location: ../admin-index.php?typeError=' . $typeError . '&existsError=' . $existsError);
		}
	}
?>