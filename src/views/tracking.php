<?php

include_once dirname(__DIR__).'/config/bootstrap.php';

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
   <!-- Mobile Specific Meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Favicon-->
   <link rel="shortcut icon" href="<?=ASSETS_PATH;?>img/fav.png">
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


   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/linearicons.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/themify-icons.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/bootstrap.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/owl.carousel.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/nice-select.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/nouislider.min.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/ion.rangeSlider.css" />
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/ion.rangeSlider.skinFlat.css" />
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/magnific-popup.css">
   <link rel="stylesheet" href="<?=ASSETS_PATH;?>css/main.css">
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
	                <h1>Order Tracking</h1>
	                <nav class="d-flex align-items-center">
	                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
	                    <a href="category.html">Fashon Category</a>
	                </nav>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End Banner Area -->

	<!--================Tracking Box Area =================-->
	<section class="tracking_box_area section_gap">
	    <div class="container">
	        <div class="tracking_box_inner">
	            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This
	                was given to you on your receipt and in the confirmation email you should have received.</p>
	            <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
	                <div class="col-md-12 form-group">
	                    <input type="text" class="form-control" id="order" name="order" placeholder="Order ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Order ID'">
	                </div>
	                <div class="col-md-12 form-group">
	                    <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Billing Email Address'">
	                </div>
	                <div class="col-md-12 form-group">
	                    <button type="submit" value="submit" class="primary-btn">Track Order</button>
	                </div>
	            </form>
	        </div>
	    </div>
	</section>
	<!--================End Tracking Box Area =================-->


	<!-- start footer Area -->
	<?php include_once './partials/footer.php'; ?>
	<!-- End footer Area -->

</body>
</html>