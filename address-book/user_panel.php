<?php
 include 'header.php';



include 'Connection.php';



if( !empty($_SESSION['user_id'])){
?>
    <div class="container  m-t-140 m-b-140">
        <h2>Your Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include database connection
                include 'Connection.php';

                // Fetch user's orders
                $user_id = $_SESSION['user_id'];
                $orders_query = "SELECT * FROM orders WHERE user_id = '$user_id'";
                $orders_result = mysqli_query($con, $orders_query);

                while ($row = mysqli_fetch_assoc($orders_result)) {
                    $order_id = $row['order_id'];
                    $order_total = $row['order_total'];
                    $order_status = $row['order_status'];
                ?>
                    <tr>
                        <td><?php echo $order_id; ?></td>
                        <td><?php echo $order_total; ?></td>
                        <td><?php echo $order_status; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


<?php }else{
    ?>
    <div class="m-t-250">
        <h1 align="center">no User found</h1>
    </div>
    <?php
} ?>   

    <!-- Include Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'script.php' ?>
<?php include 'footer.php' ?>