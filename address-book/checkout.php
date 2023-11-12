<?php include 'header.php';

?>




    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form action="" method="post">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="John" name="fName">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Doe" name="lName">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" placeholder="example@email.com" name="email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789" name="mobile">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street" name="address01">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street" name="address02">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="New York" name="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="123" name="zipCode">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Orders</h4>
                        </div>

                        <?php
                        include 'Connection.php';

                        $subTotal = 0; // Initialize subtotal variable

                        $user_id_fetch = $_SESSION['user_id'];

                        if (isset($_SESSION['user_id'])) {

                            $select_cart_product = mysqli_query($con, " SELECT * FROM `cart` WHERE user_id = '$user_id_fetch'  ");

                            while ($row_cart_product = mysqli_fetch_assoc($select_cart_product)) {

                                $productTotal = $row_cart_product['cart_price'] * $row_cart_product['cart_quantity'];
                                $subTotal += $productTotal;

                        ?>

                                <form action="" method="post" style="width: auto; height: 50px;">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between">
                                            <h6> <?php echo $row_cart_product['cart_name'] ?> [ <?php echo $row_cart_product['cart_quantity'] ?> ] </h6>
                                            <p>RS: <?php echo $row_cart_product['cart_price'] ?> </p>
                                        </div>

                                    </div>

                                </form>

                        <?php

                            }
                        }

                        ?>

                        <hr class="mt-3">

                        <div class="card-body border-secondary bg-transparent">
                            <div class="d-flex justify-content-between">
                                <h5 class="font-weight-medium">Subtotal Amount</h5>
                                <h6 class="font-weight-medium">RS: <?php echo $subTotal; ?></h6>
                            </div>
                        </div>
                    </div>


                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Payment</h4>
                        </div>
                        
                        <div class="card-footer border-secondary bg-transparent">
                            <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3" name="btn_order_place" id="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->

    <?php
    include 'footer.php';

    ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php
include 'Connection.php';

if (isset($_POST['btn_order_place'])) {

    $checkout_F_name = $_POST['fName'];
    $checkout_L_name = $_POST['lName'];
    $checkout_email = $_POST['email'];
    $checkout_mobile = $_POST['mobile'];
    $checkout_address01 = $_POST['address01'];
    $checkout_address02 = $_POST['address02'];
    $checkout_city = $_POST['city'];
    $checkout_zipCode = $_POST['zipCode'];

    $user_id_checkout = $_SESSION['user_id'];

    $insert_checkout_form = mysqli_query($con, " INSERT INTO `checkout`( `user_id`, `checkout_Fname`, `checkout_Lname`, `checkout_email`, `checkout_mobile`, `checkout_address1`, `checkout_address2`, `checkout_city`, `checkout_zip_code`, `checkout_payment_method`) VALUES 
    (
        '$user_id_checkout', '$checkout_F_name','$checkout_L_name','$checkout_email','$checkout_mobile','$checkout_address01','$checkout_address02','$checkout_city','$checkout_zipCode','Cash On Delivery' ) ");

    if ($insert_checkout_form) {
?>

        <script>
            alert("Data Send Done")
        </script>

    <?php
    } else {
    ?>

        <script>
            alert("Not Done")
        </script>

<?php
    }
}
?>

<!-- // orders  -->

<?php

// After payment is successful
if (isset($_SESSION['user_id']) && isset($_POST['btn_order_place'])) {
    $user_id = $_SESSION['user_id'];
    $order_total = $subTotal;
    $order_status = 'Pending'; // Set initial order status

    // Insert order into 'orders' table
    $insert_order_query = "INSERT INTO orders (user_id, order_total, order_status) VALUES ('$user_id', '$order_total', '$order_status')";
    $result = mysqli_query($con, $insert_order_query);

    if ($result) {

        $order_id = mysqli_insert_id($con); // Get the auto-generated order ID

        // Insert items from cart into 'order_items' table
        $select_cart_query = "SELECT * FROM cart WHERE user_id = '$user_id'";
        $cart_result = mysqli_query($con, $select_cart_query);

        while ($row = mysqli_fetch_assoc($cart_result)) {
            $product_id = $row['product_id'];
            $quantity = $row['cart_quantity'];
            $price = $row['cart_price'];

            $insert_item_query = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ('$order_id', '$product_id', '$quantity', '$price')";
            mysqli_query($con, $insert_item_query);
        }

        // Empty the user's cart
        $delete_cart_query = "DELETE FROM cart WHERE user_id = '$user_id'";
        mysqli_query($con, $delete_cart_query);
?>

        <script>
            alert("Order placed SuccessFully.")

            location.replace('user_panel.php');
        </script>

    <?php
        exit();
    } else {
    ?>

        <script>
            alert("Order placement failed.")
        </script>

<?php
    }
}
?>
<?php include 'script.php' ?>
<?php include 'footer.php' ?>