<?php

include('auth.php');
include('conn.php');
include('header.php');
include('topBar.php');
$pagname='contact';
include('sidebar.php');
?>


<div class="content-wrapper ">
    <section  class="content mt-4 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include("message.php") ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>
                               Contact - Us
                               <a href=""></a>
                            </h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example1" class="table  table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>email</th>
                                        <th>MESSAGE</th>
                                        
                                        <th>time</th>
                                        <th>DELETE</th>
                                        
                                    </tr>

                                </thead>
                                <tbody>
                                <?php
                                    $sl_qu = mysqli_query($con, "SELECT * FROM contactus");
                                    if (mysqli_num_rows($sl_qu) > 0) {
                                        foreach ($sl_qu as $row) {
                                            // echo $row['id'];
                                            ?>
                                            <tr>
                                                <td><?=$row['id']?></td>
                                                <td><?=$row['email']?></td>
                                                <td><?=$row['message']?></td>
                                                <td><?=$row['created_at']?></td>
                                                <td>
                                                    <form action="" method="post">
                                                        <input type="hidden" value=" <?= $row['id']; ?>" name="id" id="">
                                                        <button class="btn btn-danger btn-sm" name="delete" type="submit">Delete</button>
                                                    </form>
                                                    

                                                </td>
                                            </tr>

<?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
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


<?php
if (isset($_POST["delete"])) {

    $id = $_POST["id"];
    $del_qu = mysqli_query($con, "DELETE FROM contactus WHERE id='$id'");
    if ($del_qu) {
        $_SESSION['status'] = "category delete successfully";
        
    } else {

        $_SESSION['status'] = "category deletaion failed";
       
    }
} ?>
<?php include('script.php'); ?>
<?php include('footer.php'); ?>