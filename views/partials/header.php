<style>
	.count {
		width: 20px;
		height: 20px;
		font-size: 10px;
		color: #fff !important;
		background-color: #ffba00;
		top: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		left: 8px;
		top: -12px;
	}
</style>
<!-- Start Header Area -->
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.php"><img src="<?= ASSETS_PATH ?>img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="category.php">Shop</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="login.php" class="user"><span class="ti-user"></span></a></li>
						<li class="nav-item"><a href="cart.php" class="cart position-relative"><span class="ti-bag"></span><span class="count rounded-circle position-absolute"><?php echo !empty($_SESSION['cart_item']) ? count($_SESSION['cart_item']) : 0 ?></span></span></a></li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="Search Here">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div>
</header>
<!-- End Header Area -->