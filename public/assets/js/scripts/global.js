function AddToCart(product_id) {
    $.ajax({
        dataType: 'json',
        url: "/main/ajax/cart/add",
        type: "POST",
        data: {
        	product_id: product_id,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            if(data['status'] == true) {
           		$(".dropdown-cart-products, .cart-count, .cart-price-total").html('');
           		$(".cart-count").append(data['CartQuantity']);
           		$(".cart-price-total").append(data['CartTotal'].toFixed(2)+' ₾');
       			$.each(data['CartData'], function(key, value) {
       				console.log(value);
       				$(".dropdown-cart-products").append(`
	           			<div class="product">
                            <div class="product-details">
                                <h4 class="product-title">
                                    <a href="/products/`+value['id']+`">`+value['name']+`</a>
                                </h4>
                                <span class="cart-product-info">
                                    <span class="cart-product-qty">`+value['quantity']+`</span> × `+value['price'].toFixed(2)+`
                                </span>
                            </div>
                            <figure class="product-image-container">
                                <a href="/products/`+value['id']+`" class="product-image">
                                    <img src="`+value['attributes']['photo']+`" alt="product" width="80" height="80">
                                </a>
                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                            </figure>
                        </div>
	           		`);
   				});
            }
        }
    });
}