<div class="product-page-title">Orders</div>

<table class="orders-table">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Product</th>
	</tr>
	<?php
		$getOrders = getOrders();
		
		if($getOrders) {
			foreach($getOrders as $key => $value) {
				$name = $value['name'];
				$email = $value['email'];
				$product = $value['product'];

				?>

				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $product; ?></td>
				</tr>

				<?php
			}
		}
	?>
</table>