<?php include 'header.php'; ?>
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sl_qu_pro = mysqli_query($con, "SELECT * FROM products WHERE id='$id'");
	if (mysqli_num_rows($sl_qu_pro) > 0) {
		$row = mysqli_fetch_array($sl_qu_pro);
		$cat_id = $row['cat_id'];
		$brn_id = $row['brn_id'];
		$sl_qu_cat = mysqli_query($con, "SELECT * FROM categories WHERE id='$cat_id'");
		$sl_qu_brn = mysqli_query($con, "SELECT * FROM brands WHERE brn_id='$brn_id'");
		$row_cat = mysqli_fetch_array($sl_qu_cat);
		$row_brn = mysqli_fetch_array($sl_qu_brn);
		?>
		<!-- breadcrumb -->
		<div class="container m-t-80">
			<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
				<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
					Home
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>

				<a href="<?= $row_cat['name'] ?>.php" class="stext-109 cl8 hov-cl1 trans-04">
					<?= $row_cat['name'] ?>
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>

				<span class="stext-109 cl4">
					<?= $row_brn['brn_name'] ?>

				</span>
			</div>
		</div>
		<!-- product details -->
		<section class="sec-product-detail bg0 p-t-65 p-b-60">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="<?= 'Admin/img/product/' . $row['image'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?= 'Admin/img/product/' . $row['image'] ?>" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="<?= 'Admin/img/product/' . $row['image'] ?>">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="<?= 'Admin/img/product/' . $row['image2'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?= 'Admin/img/product/' . $row['image2'] ?>" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="<?= 'Admin/img/product/' . $row['image2'] ?>">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="<?= 'Admin/img/product/' . $row['image3'] ?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?= 'Admin/img/product/' . $row['image'] ?>" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="<?= 'Admin/img/product/' . $row['image'] ?>">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								<?= $row['name'] ?>
							</h4>

							<span class="mtext-106 cl2">
								<?= $row['price'] ?>
							</span>

							<p class="stext-102 cl3 p-t-23">
								<?= $row['small_des'] ?>
							</p>
							<p class="stext-102 cl3 p-t-23">
								<?= $row['long_des'] ?>
							</p>

							<!--  -->
							<div class="p-t-33">
								

								
										<form action="add_to _cart_code.php" method="post">
										<button
											class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"
											type="submit" name="addToCart"><i class="fas fa-shopping-cart text-primary"></i>
											Add To Cart


										</button>

											<input type="hidden" value="<?php echo $row['id'] ?>" name="cart_ID" id="">
											<input type="hidden" name="cart_pImage" value="<?php echo $row['image'] ?>" id="">
											<input type="hidden" name="cart_pName" value="<?php echo $row['name'] ?>" id="">
											<input type="hidden" name="cart_pPrice" value="<?php echo $row['price'] ?>" id="">

											</form>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#"
										class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
										data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="bor10 m-t-50 p-t-43 p-b-40">
					<!-- Tab01 -->
					<div class="tab01">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item p-b-10">
								<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
							</li>

							<li class="nav-item p-b-10">
								<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
							</li>

							<li class="nav-item p-b-10">
								<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content p-t-43">
							<!-- - -->
							<div class="tab-pane fade show active" id="description" role="tabpanel">
								<div class="how-pos2 p-lr-15-md">
									<p class="stext-102 cl6">
										<?= $row['long_des'] ?>
									</p>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="information" role="tabpanel">
								<div class="row">
									<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
										<ul class="p-lr-28 p-lr-15-sm">
											<li class="flex-w flex-t p-b-7">
												<span class="stext-102 cl3 size-205">
													Tax
												</span>

												<span class="stext-102 cl6 size-206">
													<?= $row['tax'] ?> %
												</span>
											</li>

											<li class="flex-w flex-t p-b-7">
												<span class="stext-102 cl3 size-205">
													Brand
												</span>

												<span class="stext-102 cl6 size-206">
													<?= $row_brn['brn_name'] ?>
												</span>
											</li>

											<li class="flex-w flex-t p-b-7">
												<span class="stext-102 cl3 size-205">
													Category
												</span>

												<span class="stext-102 cl6 size-206">
													<?= $row_cat['name'] ?>
												</span>
											</li>


										</ul>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="reviews" role="tabpanel">
								<div class="row">
									<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
										<div class="p-b-30 m-lr-15-sm">
											<!-- Review -->
											<div class="flex-w flex-t p-b-68">
												<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
													<img src="<?= 'Admin/img/product/' . $row['image'] ?>"
														alt="<?= $row['name'] ?>">
												</div>

												<div class="size-207">
													<div class="flex-w flex-sb-m p-b-17">
														<span class="mtext-107 cl2 p-r-20">
															<?= $row['name'] ?>
														</span>

														<span class="fs-18 cl11">
															<i class="zmdi zmdi-star"></i>
															<i class="zmdi zmdi-star"></i>
															<i class="zmdi zmdi-star"></i>
															<i class="zmdi zmdi-star"></i>
															<i class="zmdi zmdi-star-half"></i>
														</span>
													</div>

													<p class="stext-102 cl6">
														<?= $row['small_des'] ?>
													</p>
												</div>
											</div>

											<!-- Add review -->
											<form class="w-full" action="Admin/code.php" method="post">
												<h5 class="mtext-108 cl2 p-b-7">
													Add a review
												</h5>

												<p class="stext-102 cl6">
													Your email address will not be published. Required fields are marked *
												</p>

												<div class="flex-w flex-m p-t-50 p-b-23">
													<span class="stext-102 cl3 m-r-16">
														Your Rating
													</span>

													<span class="wrap-rating fs-18 cl11 pointer">
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<input class="dis-none" type="number" name="rating">
													</span>
												</div>

												<div class="row p-b-25">
													<div class="col-12 p-b-5">
														<label class="stext-102 cl3" for="review">Your review</label>
														<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10"
															id="review" name="review" Required></textarea>
													</div>

													<div class="col-sm-6 p-b-5">
														<label class="stext-102 cl3" for="name">Name</label>
														<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text"
															name="name" Required>
														<input value="<?= $row['id'] ?>" type="hidden" name="id">
													</div>

													<div class="col-sm-6 p-b-5">
														<label class="stext-102 cl3" for="email">Email</label>
														<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email"
															type="text" name="email" Required>
													</div>
												</div>
												<input value="submit"
													class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10"
													type="submit" name="rew_submit" id="">

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
				<span class="stext-107 cl6 p-lr-25">
					SKU: JAK-01
				</span>

				<span class="stext-107 cl6 p-lr-25">
					Categories: Jacket, Men
				</span>
			</div>
		</section>

		<?php
		$sl_qu_brn_relat = mysqli_query($con, "SELECT * FROM products WHERE brn_id='$brn_id'");
		if (mysqli_num_rows($sl_qu_brn_relat) > 0) {


			?>
			<!-- Related Products -->
			<section class="sec-relate-product bg0 p-t-45 p-b-105">
				<div class="container">
					<div class="p-b-45">
						<h3 class="ltext-106 cl5 txt-center">
							Related Products
						</h3>
					</div>

					<!-- Slide2 -->
					<div class="wrap-slick2">
						<div class="slick2">
							<?php
							while ($row = mysqli_fetch_array($sl_qu_brn_relat)) {
								?>
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
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
							<?php } ?>


						</div>
					</div>
				</div>
			</section>
		<?php }
	}
} else {
	echo '<h1 class="m-t-200">no product to display </h1>';
} ?>












<!-- Footer -->
<!-- Modal1 -->

<?php include 'productQuickview.php' ?>
<!-- Footer -->
<?php include 'script.php' ?>
<?php include 'footer.php' ?>