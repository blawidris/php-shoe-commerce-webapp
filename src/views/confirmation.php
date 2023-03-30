	<?php

	include_once dirname(__DIR__) . '/config/bootstrap.php';

	?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?= ASSETS_PATH; ?>img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Karma Shop</title>


		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/linearicons.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/themify-icons.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/nice-select.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/nouislider.min.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/ion.rangeSlider.css" />
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/ion.rangeSlider.skinFlat.css" />
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/magnific-popup.css">
		<link rel="stylesheet" href="<?= ASSETS_PATH; ?>css/main.css">
	</head>

	<body>
		<!-- start header Area -->
		<?php include_once './partials/header.php'; ?>
		<!-- End header Area -->

		<!-- Start Banner Area -->
		<section class="banner-area organic-breadcrumb">
			<div class="container">
				<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
					<div class="col-first">
						<h1>Confirmation</h1>
						<nav class="d-flex align-items-center">
							<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
							<a href="category.html">Confirmation</a>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

		<!--================Order Details Area =================-->
		<section class="order_details section_gap">
			<div class="container">
				<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
				<div class="row order_d_inner">
					<div class="col-lg-4">
						<div class="details_item">
							<h4>Order Info</h4>
							<ul class="list">
								<li><a href="#"><span>Order number</span> : 60235</a></li>
								<li><a href="#"><span>Date</span> : Los Angeles</a></li>
								<li><a href="#"><span>Total</span> : USD 2210</a></li>
								<li><a href="#"><span>Payment method</span> : Check payments</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="details_item">
							<h4>Billing Address</h4>
							<ul class="list">
								<li><a href="#"><span>Street</span> : 56/8</a></li>
								<li><a href="#"><span>City</span> : Los Angeles</a></li>
								<li><a href="#"><span>Country</span> : United States</a></li>
								<li><a href="#"><span>Postcode </span> : 36952</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="details_item">
							<h4>Shipping Address</h4>
							<ul class="list">
								<li><a href="#"><span>Street</span> : 56/8</a></li>
								<li><a href="#"><span>City</span> : Los Angeles</a></li>
								<li><a href="#"><span>Country</span> : United States</a></li>
								<li><a href="#"><span>Postcode </span> : 36952</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="order_details_table">
					<h2>Order Details</h2>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Product</th>
									<th scope="col">Quantity</th>
									<th scope="col">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<p>Pixelstore fresh Blackberry</p>
									</td>
									<td>
										<h5>x 02</h5>
									</td>
									<td>
										<p>$720.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Pixelstore fresh Blackberry</p>
									</td>
									<td>
										<h5>x 02</h5>
									</td>
									<td>
										<p>$720.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Pixelstore fresh Blackberry</p>
									</td>
									<td>
										<h5>x 02</h5>
									</td>
									<td>
										<p>$720.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Subtotal</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>$2160.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Shipping</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>Flat rate: $50.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Total</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>$2210.00</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<!--================End Order Details Area =================-->

		<!-- start footer Area -->
		<?php include_once './partials/footer.php'; ?>
		<!-- End footer Area -->

	</body>

	</html>