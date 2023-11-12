<?php

include('auth.php');
include('conn.php');
include('header.php');
include('topBar.php');
include('sidebar.php');
//echo $con;
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
                                Edit -Brand
                                <a href="brand.php" class="btn btn-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <?php
                                if (isset($_GET['id'])) {
                                    $cat_id = $_GET['id'];
                                    $sl_qu = mysqli_query($con, "SELECT * FROM brands WHERE brn_id='$cat_id' limit 1");
                                    if (mysqli_num_rows($sl_qu) > 0) {
                                        $row = mysqli_fetch_array($sl_qu);
                                        //echo $row[0].$row[1].$row[2].$row[3].$row[4];
                                

                                        ?>
                                        <input type="hidden" value="<?= $row[0] ?>" name="id" id="">
                                        <input type="hidden" value="<?= $row['brn_img']?>" name="old_img" id="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Brand Name</label>
                                                <input type="text" name="name" value="<?php echo $row[1]; ?>"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea id="" class="form-control" value="" required name="description"
                                                    rows="3"><?php echo $row[2]; ?></textarea>

                                            </div>
                                            <div class="form-group row border">
                                                <div class="col-md-2 col-6 ">
                                                    <label for="">Image</label>
                                                    <img src="img/brands/<?= $row['brn_img'] ?>" width="100%" height="120px"
                                                    class=" float-right pb-2" alt=""><br>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label for="">Upload new Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <a href="brand.php" class="btn btn-danger">Back</a>
                                            <button type="submit" name="brand_update" class="btn btn-primary">Update</button>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "<h3 align='center'>No ID Found</h3>";
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<?php include('script.php'); ?>
<?php include('footer.php'); ?>