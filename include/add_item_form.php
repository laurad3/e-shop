<div class="product-page-title">Add New Item</div>

<?php
	echo $_GET['uploadSuccess'];
	echo $_GET['typeError'];
	echo $_GET['existsError'];
?>

<form method="post" class="add-item-form" action="db/add_item.php" enctype="multipart/form-data">
	<input type="text" placeholder="Product Name" name="product-name">
	<input type="text" placeholder="8 Word Description" name="short-description">
	<div class="text-area-container">
		<textarea type="text" rows="5" placeholder="Full Description" name="full-description"></textarea>
	</div>
	<input type="text" placeholder="Year" name="product-year">
	<input type="text" placeholder="Price" name="product-price">

	<div class="product-page-subtitle">Category</div>
	<select name="product-category">
		<option value="books">Books</option>
		<option value="cases">Cases</option>
		<option value="mugs">Mugs</option>
	</select>

	<!-- image -->
	<div class="product-page-subtitle">Image</div>
	
	<input type="file" class="image-input" name="product-image">

	<button type="submit" class="add-item-btn" name="add-item">Add</a>
</form>