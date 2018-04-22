@extends('layouts.master')

@section('head')
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template |Men's :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
@endsection

@section('body')
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
		<h3>Men's <span>Wear  </span></h3>
		<!--/w3_short-->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">

				<ul class="w3_short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Men's Wear</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
	</div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Filter By <span>Price</span></h3>
				<ul class="dropdown-menu6">
					<li>                
						<div id="slider-range"></div>							
						<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
					</li>			
				</ul>
			</div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Product </h5>
			<div class="sort-grid">
				<form action="{{ url('products') }}" method="GET">
					<input type="hidden" name="gender" value="{{ $gender }}">
				<div class="sorting">
					<h6>Sort By</h6>
					<select name="sortBy" id="sortBy" class="frm-field required sect">
						<option value="">Default</option>
						<option value="name_asc">Name(A - Z)</option> 
						<option value="name_desc">Name(Z - A)</option>
						<option value="price_desc">Price(High - Low)</option>
						<option value="price_asc">Price(Low - High)</option>	
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select name="show" id="show" class="frm-field required sect">
						<option value="12">12</option>
						<option value="24">24</option> 
						<option value="36">36</option>					
						<option value="48">48</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<button type="submit" class="label label-primary">Submit</button>
				</form>
				<div class="clearfix"></div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="single-pro">
			@foreach($products as $product)
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{ asset('images/').'/'.$product->image_name }}" alt="" class="pro-image-front">
						<img src="{{ asset('images/').'/'.$product->image_name }}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">{{ $product->name }}</a></h4>
						<div class="info-product-price">
							<span class="item_price">Rs. {{ $product->price}}</span>
							@if($product->discount)
							<del>${{ $product->price+$product->discount }}</del>
							@endif
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Formal Blue Shirt" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<!--/grids-->
<div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE SHIPPING</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>24/7 SUPPORT</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MONEY BACK GUARANTEE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE GIFT COUPONS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
@endsection

@section('js')
@parent
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
// Slideshow 4
$("#slider3").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 500,
	namespace: "callbacks",
	before: function () {
		$('.events').append("<li>before event fired.</li>");
	},
	after: function () {
		$('.events').append("<li>after event fired.</li>");
	}
});
});
</script>

<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

<!-- //cart-js --> 
<!---->
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 9000,
		values: [ 1000, 7000 ],
		slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	}
});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
@endsection