<?php

include('auth.php');
include('conn.php');
include('header.php');
include('topBar.php');
$pagname = 'order';
include('sidebar.php');
?>


<div class="content-wrapper">
    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include("message.php") ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Gift Products
                                <a href="product_add.php" class="btn btn-primary float-right">Add</a>
                            </h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CUSTOMER</th>
                                        <th>PRODUCT</th>
                                        <th>QTY</th>
                                        <th>PRICE</th>

                                        <th>STATUS</th>
                                        <th>ORDER DATE</th>
                                        <th>TOTAL</th>



                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $sl_qu_order = mysqli_query($con, "SELECT * FROM orders   ");
                                    if (mysqli_num_rows($sl_qu_order) > 0) {
                                        foreach ($sl_qu_order as $row) {
                                            $user_id = $row['user_id'];
                                            $order_id = $row['order_id'];
                                            $sl_cus=mysqli_query($con,"SELECT * FROM users where id='$user_id' LIMIT 1 ");
                                            $user =mysqli_fetch_array($sl_cus);
                                            $sl_item=mysqli_query($con,"SELECT * FROM order_items where order_id='$order_id' ");
                                            
                                            foreach ($sl_item as $row_item) {
                                                $pro_id = $row_item['product_id'];
                                                $sl_pro=mysqli_query($con,"SELECT * FROM products where id='$pro_id' limit 1 ");
                                                $product =mysqli_fetch_array($sl_pro);


                                            ?>
                                            <tr>
                                                <td><?= $row['user_id'] ?></td>
                                                <td><?= $user['name'] ?></td>
                                                <td><?= $product['name']
                                                ?></td>
                                                <td><?= $row_item['quantity'] ?></td>
                                                <td><?= $row_item['price'] ?></td>
                                                <td><?= $row['order_status'] ?></td>
                                                <td><?= $row['order_date'] ?></td>
                                                <td><?= $row['order_total'] ?></td>
                                            </tr>

                                            <?php
                                        }
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="7" align='center'>No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>



<?php include('script.php'); ?>
<?php include('footer.php'); ?>