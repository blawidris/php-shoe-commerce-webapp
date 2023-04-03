<?php

declare(strict_types=1);

session_start();

include_once dirname(__DIR__) . '/config/bootstrap.php';

$prodId = $_GET['id'];

$singleProduct = getById($prodId);

var_dump($_SESSION['cart_item']);

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
	<?php
	include_once './partials/header.php';
	$data = [
		'pageTitle' => 'Shop',
		'subtitle' => 'Product Detail Page',
		'link' => 'category.php'
	];

	/**
	 * @return array $data
	 */

	// banner
	include_once './partials/banner.php';
	?>
	<!-- End header Area -->



	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?= ASSETS_PATH . $singleProduct['image'] ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?= ASSETS_PATH . $singleProduct['image'] ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?= ASSETS_PATH . $singleProduct['image'] ?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?= $singleProduct['name']; ?></h3>
						<h2><?= $singleProduct['price']; ?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : <?= $singleProduct['category']; ?></a></li>
							<li><a href="#"><span>Availibility</span> : <?= $singleProduct['available']; ?></a></li>
						</ul>
						<p><?= $singleProduct['description']; ?></p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn add-to-cart" href="javascript:void(0)" data-name="<?= $singleProduct['name']; ?>" data-quantity="1" data-image="<?= $singleProduct['image']; ?>" data-price="<?= $singleProduct['price']; ?>" data-id="<?= $singleProduct['id'] ?>">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs " id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>
						<?= $singleProduct['description']; ?>
					</p>

				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<?php if (!empty($singleProduct['specification'])) { ?>
							<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Width</h5>
										</td>
										<td>
											<h5>128mm</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Height</h5>
										</td>
										<td>
											<h5>508mm</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Depth</h5>
										</td>
										<td>
											<h5>85mm</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Weight</h5>
										</td>
										<td>
											<h5>52gm</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Quality checking</h5>
										</td>
										<td>
											<h5>yes</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Freshness Duration</h5>
										</td>
										<td>
											<h5>03days</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>When packeting</h5>
										</td>
										<td>
											<h5>Without touch of hand</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Each Box contains</h5>
										</td>
										<td>
											<h5>60pcs</h5>
										</td>
									</tr>
								</tbody>
							</table>
						<?php }; ?>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<?php if (!empty($singleProduct['comment'])) { ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="comment_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-1.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2018 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
									<div class="review_item reply">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2018 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2018 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Reply</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Post a comment</h4>
									<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php }; ?>
				</div>
				<div class="tab-pane fade " id="review" role="tabpanel" aria-labelledby="review-tab">
					<?php if (!empty($singleProduct['review'])) { ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="row total_rate">
									<div class="col-6">
										<div class="box_total">
											<h5>Overall</h5>
											<h4>4.0</h4>
											<h6>(03 Reviews)</h6>
										</div>
									</div>
									<div class="col-6">
										<div class="rating_list">
											<h3>Based on 3 Reviews</h3>
											<ul class="list">
												<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="review_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-1.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Add a Review</h4>
									<p>Your Rating:</p>
									<ul class="list">
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
									<p>Outstanding</p>
									<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" value="submit" class="primary-btn">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					<?php }; ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->


	<script>
		let increaseItemBtn = document.querySelector('.product_count .increase')
		let reduceItemBtn = document.querySelector('.product_count .reduced')
		let qtyValue = document.querySelector('.product_count .qty');

		let newQty = 1;

		// increase
		increaseItemBtn.addEventListener('click', (e) => {
			e.preventDefault()

			if (qtyValue.value >= 1) {
				qtyValue.value++;

				newQty = parseInt(qtyValue.value);
			}
		})

		reduceItemBtn.addEventListener('click', (e) => {
			e.preventDefault()

			if (qtyValue.value > 1) {
				qtyValue.value--;

				newQty = parseInt(qtyValue.value);

			}
		})

		// add to cart

		let addToCartBtn = document.querySelector('.add-to-cart');

		addToCartBtn.addEventListener('click', function() {
			let productId = this.getAttribute('data-id');
			let productName = this.getAttribute('data-name');
			let productPrice = this.getAttribute('data-image');
			let productImage = this.getAttribute('data-price');
			let productQuantity = this.getAttribute('data-quantity');
			productQuantity.text = newQty;

			let obj = {
				id: productId,
				name: productName,
				price: productPrice,
				image: productImage,
				quantity: newQty,
			}

			$.ajax({
				url: '<?=CONTROLLER_PATH?>add_cart.php',
				type: 'POST',
				data: {cart: JSON.stringify(obj)},
				success: function(response) {

					let cartCount = document.querySelector('.cart .count');
					
					if(response.status == 200)
						cartCount.innerHTML = response.total_item;
						alert('item added to cart');
					
				}
			})

		});
	</script>

	<!-- start footer Area -->
	<?php include_once './partials/footer.php'; ?>
	<!-- End footer Area -->

</body>

</html>