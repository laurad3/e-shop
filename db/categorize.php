<?php
	require 'db.php';

	if(isset($_POST['category'])) {
		$category = $_POST['category'];

		if($category == "all") {
			$getItems = getAllItems();
		} else {
			$getItems = getItemsByCategory($category);
		}

		echo json_encode($getItems);
	}
?>