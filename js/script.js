$(document).ready(function() {
	$('.categories ul li a').on('click', function() {
		$('.categories ul li').each(function(i) {
			$(this).removeClass('selected');
		});

		$(this).parent().addClass('selected');

		var category = $(this).attr('id');

		$.post('db/categorize.php', {category: category}, function(data) {
			$getItems = $.parseJSON(data);
			$('.products').empty();

			$.each($getItems, function(key, value) {
				$productName = value['product_name'];
				$productShort = value['short_description'];
				$productImage = value['image_path'];
				$productId = value['id'];

				$product = '<a href="product.php?product='+$productId+'">'+
								'<div class="product">'+
									'<div class="overlay">'+
										'<div class="product-title">'+$productName+'</div>'+
										'<div class="product-short">'+$productShort+'</div>'+
									'</div>'+
									'<img src="db/'+$productImage+'" alt="">'+
								'</div>'+
							'</a>';

				$('.products').append($product);

				if($getItems.length < 3) {
					$('.products').css('justify-content', 'flex-start');
					$('.product').css('margin-right', '20px');
				} else {
					$('.products').css('justify-content', 'space-between');
				}
			});
		});
	});
});