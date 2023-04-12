<?php

session_start();
include_once dirname(__DIR__) . '/config/bootstrap.php';

$cartItem = $_SESSION['cart_item'];

// var_dump($cartItem);

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

    <?php include_once './partials/header.php'; ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            if (empty($cartItem)) {
                                echo "<tr><td colspan='4'><center><h3 class='mb-3 text-muted'>Empty Shopping Cart </h3><a class='gray_btn w-25 rounded' href='category.php'>Shop now</a></center></td></tr>";
                            } else {

                                $subtotal = 0;

                                foreach ($cartItem as $item) {
                                    /**
                                     * @return $item
                                     */

                                    $subtotal += $item['price'] * $item['quantity'];
                                    include 'components/cart_item.php';
                                }
                            }

                            ?>



                            <?php if (!empty($cartItem)) : ?>

                                <tr class="bottom_button">
                                    <td>
                                        <a class="gray_btn" href="#">Update Cart</a>
                                    </td>
                                    <td>

                                    </td>
                                    <!-- <td>

                                </td> -->
                                    <td colspan="2">
                                        <div class="cupon_text d-flex align-items-center justify-content-end">
                                            <input type="text" placeholder="Coupon Code">
                                            <a class="primary-btn" href="#">Apply</a>
                                            <a class="gray_btn" href="#">Close Coupon</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td>
                                        <h5>$<?= $subtotal ?></h5>
                                    </td>
                                </tr>
                                <!-- <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr> -->
                                <tr class="out_button_area">
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <!-- <td>

                                </td> -->
                                    <td colspan="2">
                                        <div class="checkout_btn_inner d-flex align-items-center justify-content-end">
                                            <a class="gray_btn" href="category.php">Continue Shopping</a>
                                            <a class="primary-btn" href="checkout.php">Proceed to checkout</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->


    <script>
        let increaseItemBtn = document.querySelectorAll('.product_count .increase')
        let reduceItemBtn = document.querySelectorAll('.product_count .reduced')
        let newValue = null;

        // increase
        increaseItemBtn.forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();

                let qtyValue = this.parentElement.firstElementChild;
                let productId = this.getAttribute('data-id');

                // console.log(qtyValue.value)
                if (qtyValue.value >= 1) {
                    qtyValue.value++;
                    newValue = qtyValue.value = parseInt(qtyValue.value);

                    console.log(newValue)

                    let obj = {
                        id: productId,
                        quantity: newValue,
                    }

                    $.ajax({
                        url: '<?= CONTROLLER_PATH ?>add_cart.php',
                        type: 'POST',
                        data: {
                            cart: JSON.stringify(obj)
                        },
                        success: function(response) {

                            let cartCount = document.querySelector('.cart .count');

                            if (response.status == 200) {
                                // console.log(response);
                                alert('item added to cart');
                                cartCount.innerHTML = response.total_item;
                                console.log(response.item)
                            }
                        }
                    });

                }

            })

        })



        // decrease
        reduceItemBtn.forEach(element => {
            // console.log(element)

            element.addEventListener('click', function(e) {
                e.preventDefault();

                let qtyValue = this.parentElement.firstElementChild;

                // console.log(qtyValue.value)
                if (qtyValue.value > 1) {
                    qtyValue.value--;

                    qtyValue.value = parseInt(qtyValue.value);

                }
            })
        });
    </script>
    <?php include_once './partials/footer.php'; ?>

</body>

</html>