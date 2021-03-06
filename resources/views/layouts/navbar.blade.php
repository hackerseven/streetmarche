<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			@guest
			<li> <a href="#" data-toggle="modal" data-target="#myModal" onclick="$('#signUp').hide();$('#signIn').show();"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal" onclick="$('#signIn').hide();$('#signUp').show();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			@else
			<li>{{ Auth::user()->name }}</li>
			<li> <a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
			</li>

			@endguest
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@streetmarche.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
				<input type="search" name="search" placeholder="Search here..." required="">
				<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
		<div class="col-md-4 logo_agile">
			<h1><a href="{{ url('/') }}"><span>S</span>treet Marche</a></h1>
		</div>
		<!-- header-bot -->
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu__list">
							<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
							<li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="agile_inner_drop_nav_info">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="{{ url('products', ['gender' => 'men']) }}">Clothing</a></li>
												<li><a href="mens.html">Wallets</a></li>
												<li><a href="mens.html">Footwear</a></li>
												<li><a href="mens.html">Watches</a></li>
												<li><a href="mens.html">Accessories</a></li>
												<li><a href="mens.html">Bags</a></li>
												<li><a href="mens.html">Caps & Hats</a></li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="mens.html">Jewellery</a></li>
												<li><a href="mens.html">Sunglasses</a></li>
												<li><a href="mens.html">Perfumes</a></li>
												<li><a href="mens.html">Beauty</a></li>
												<li><a href="mens.html">Shirts</a></li>
												<li><a href="mens.html">Sunglasses</a></li>
												<li><a href="mens.html">Swimwear</a></li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="agile_inner_drop_nav_info">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="womens.html">Clothing</a></li>
												<li><a href="womens.html">Wallets</a></li>
												<li><a href="womens.html">Footwear</a></li>
												<li><a href="womens.html">Watches</a></li>
												<li><a href="womens.html">Accessories</a></li>
												<li><a href="womens.html">Bags</a></li>
												<li><a href="womens.html">Caps & Hats</a></li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="womens.html">Jewellery</a></li>
												<li><a href="womens.html">Sunglasses</a></li>
												<li><a href="womens.html">Perfumes</a></li>
												<li><a href="womens.html">Beauty</a></li>
												<li><a href="womens.html">Shirts</a></li>
												<li><a href="womens.html">Sunglasses</a></li>
												<li><a href="womens.html">Swimwear</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->