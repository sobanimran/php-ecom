<?php

$con = mysqli_connect("localhost", "root", "", "adminpanel") or die("DB Con fail");
if (isset($_POST['search_Ajex'])) {
    $filt_val = $_POST['key'];

    if ($filt_val != "") {
        echo $filt_val;
    } else {
        return 0;
    }



}

function getcards($qu1 = null, $qu2)
{
    global $con;
    $sl_qu_prod_card = mysqli_query($con, $qu2);
    if ($qu1 != "") {
        $sl_qu_prod_slid = mysqli_query($con, $qu1);
        if (mysqli_num_rows($sl_qu_prod_slid) > 0) {
            ?>
            <!-- cards by Slider -->
            <!-- Product cards slider in INDEX page -->
            <section class="sec-product bg0 p-t-100 p-b-50">
                <div class="container">
                    <div class="p-b-32">
                        <h3 class="ltext-105 cl5 txt-center respon1">
                         Feature Product
                        </h3>
                    </div>

                    <!-- Tab01 -->
                    <div class="tab01">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item p-b-10">
                                <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Trending product</a>
                            </li>


                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-t-50">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                                <!-- Slide2 -->
                                <div class="wrap-slick2">
                                    <div class="slick2">
                                        <?php
                                        while ($row = mysqli_fetch_array($sl_qu_prod_slid)) { ?>
                                            <div class=" p-l-20 p-r-20 p-t-15 p-b-15">
                                                <!-- Block2 -->
                                                <form action="add_to _cart_code.php" method="post">

                                                    <div class="col-lg-12 col-md-6 col-sm-12 pb-1   ">
                                                        <div class="card product-item border-0 mb-4">
                                                            <div
                                                                class="text-center card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                                <img class="img-fluid" style="width: 200px; height: 250px;"
                                                                    src="Admin/img/product/<?php echo $row['image'] ?>" alt="" />
                                                            </div>
                                                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                                                <h4 class="text-truncate mt-4"
                                                                    style="color: #222; text-shadow: 0 0 blue;">
                                                                    <?php echo $row['name'] ?>
                                                                </h4>
                                                                <div class="d-flex justify-content-center">
                                                                    <h6 class="mt-1">RS:
                                                                        <?php echo $row['price'] ?>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div style="margin:0 auto;"
                                                                class="card-footer  d-flex justify-content-between bg-light border"
                                                                style="width: 280px;">
                                                                <a href="product-detail.php?id=<?= $row['id']; ?>"
                                                                    class="btn btn-sm text-dark p-0"><i
                                                                        class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                                                                <!--  -->

                                                                <button type="submit" style="height: 25px;" class="btn btn-sm text-dark"
                                                                    name="addToCart"><i class="fas fa-shopping-cart text-primary"></i>
                                                                    Add To Cart</button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="cart_ID" id="">
                                                    <input type="hidden" name="cart_pImage" value="<?php echo $row['image'] ?>" id="">
                                                    <input type="hidden" name="cart_pName" value="<?php echo $row['name'] ?>" id="">
                                                    <input type="hidden" name="cart_pPrice" value="<?php echo $row['price'] ?>" id="">

                                                </form>

                                            </div>
                                            <?php
                                        }
                                        ?>













                                    </div>
                                </div>
                            </div>



                            <!-- - -->



                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }
    ;
    if (mysqli_num_rows($sl_qu_prod_card) > 0) {

        ?>
        <!-- cards by rows -->

        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Products
                </h3>
            </div>
            <div class="flex-w flex-sb-m p-b-20">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".jewellery">
                        Jewllery
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".cosmetic">
                        Cosmetic
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".l’oreal">
                        l’oreal
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Almas">
                        Almas Jewellers
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Tesoro">
                        Tesoro Jewellers
                    </button>
                </div>






            </div>


            <div id="message" class=""></div>
            <div class="row isotope-grid">
                <?php
                while ($row = mysqli_fetch_array($sl_qu_prod_card)) {
                    $cat_id = $row['cat_id'];
                    $brn_id = $row['brn_id'];
                    $sl_qu_cat = mysqli_query($con, "SELECT * FROM categories WHERE id='$cat_id'");
                    $sl_qu_brn = mysqli_query($con, "SELECT * FROM brands WHERE brn_id='$brn_id'");
                    $row_cat = mysqli_fetch_array($sl_qu_cat);
                    $row_brn = mysqli_fetch_array($sl_qu_brn);

                    ?>
                    <div
                        class="col-6 col-md-4 col-xlg-3 m-0  p-0 isotope-item <?= $row['brn_id'] == $row_brn['brn_id'] ? $row_brn['brn_name'] : '' ?> <?= $row['cat_id'] == $row_cat['id'] ? $row_cat['name'] : '' ?>">
                        <!--
                             Block2 -->

                        <form action="add_to _cart_code.php" method="post">

                            <div class="col-lg-12 col-md-6 col-sm-12 pb-1   ">
                                <div class="card product-item border-0 mb-4">
                                    <div
                                        class="text-center card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid" style="width: 200px; height: 250px;"
                                            src="Admin/img/product/<?php echo $row['image'] ?>" alt="" />
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h4 class="text-truncate mt-4" style="color: #222; text-shadow: 0 0 blue;">
                                            <?php echo $row['name'] ?>
                                        </h4>
                                        <div class="d-flex justify-content-center">
                                            <h6 class="mt-1">RS:
                                                <?php echo $row['price'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div style="margin:0 auto;" class="card-footer  d-flex justify-content-between bg-light border"
                                        style="width: 280px;">
                                        <a href="product-detail.php?id=<?= $row['id']; ?>" class="btn btn-sm text-dark p-0"><i
                                                class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                                        <!--  -->

                                        <button type="submit" style="height: 25px;" class="btn btn-sm text-dark" name="addToCart"><i
                                                class="fas fa-shopping-cart text-primary"></i> Add To Cart</button>

                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="<?php echo $row['id'] ?>" name="cart_ID" id="">
                            <input type="hidden" name="cart_pImage" value="<?php echo $row['image'] ?>" id="">
                            <input type="hidden" name="cart_pName" value="<?php echo $row['name'] ?>" id="">
                            <input type="hidden" name="cart_pPrice" value="<?php echo $row['price'] ?>" id="">

                        </form>
                    </div>
                <?php } ?>

            </div>

        </div>


        <?php
    }

}

?>



<!-- cards by Slider -->
<!-- Product cards slider -->

<!-- cards by rows -->