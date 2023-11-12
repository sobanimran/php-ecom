<?php include 'header.php'; ?>
<?php //include 'navbar.php'; 
?>

<?php include('main_product_z@.php'); ?>
<?php
$pagname = 'indexuser';
$brn_sl_qu = mysqli_query($con, "SELECT * FROM brands order by rand() limit 0,3") or die("ERROR IN CONNECTING DATABASE");
$cat_sl_qu = mysqli_query($con, "SELECT * FROM categories Where status='1' order by rand()") or die("ERROR IN CONNECTING DATABASE");
?>

<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1 rs2-slick1">
		<div class="slick1">
			<div class="item-slick1 bg-overlay" style="background-image: url(Admin/img/cr4.jpg);"
				data-thumb="Admin/img/cr4.jpg" data-caption="COSMETIC">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								COSMETI
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								New arrivals
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="product.php"
								class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay" style="background-image: url(Admin/img/cr5.jpg);"
				data-thumb="Admin/img/cr5.jpg" data-caption="Men’s Wear">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Men New-Season
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								Jackets & Coats
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="product.php"
								class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay" style="background-image: url(Admin/img/cr6.jpg);"
				data-thumb="Admin/img/cr6.jpg" data-caption="Men’s Wear">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Men Collection 2018
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								NEW SEASON
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
							<a href="product.php"
								class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap-slick1-dots p-lr-10"></div>
	</div>
</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-95 p-b-55">
	<div class="container">
		<div class="row">
			<?php
			if (mysqli_num_rows($cat_sl_qu) > 0) {
				while ($row = mysqli_fetch_array($cat_sl_qu)) {

					?>
					<div class="col-md-6 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img height="400vh" src="Admin/img/categories/<?= $row['img'] ?>" alt="IMG-BANNER">

							<a href="category.php?id=<?= $row[0] ?>"
								class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										<?= $row['name'] ?>
									</span>


								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										<h3>Description:</h3>
										<?= $row['description'] ?>
									</div>
								</div>
								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php }
			} ?>
		</div>
		<div class="row">
			<?php
			if (mysqli_num_rows($brn_sl_qu) > 0) {
				while ($row = mysqli_fetch_array($brn_sl_qu)) {

					?>
					<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img height="300vh" src="	<?= 'Admin/img/brands/' . $row['brn_img'] ?>" alt="IMG-BANNER">

							<a href="brand.php?id=<?= $row['brn_id'] ?>"
								class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										<?= $row['brn_name'] ?>
									</span>

									<span class="block1-info stext-102 trans-04">
										Spring 2018
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php }
			} ?>
		</div>


	</div>
</div>


<!-- Product -->

<section class="bg0 p-t-23 p-b-30">

	
	
	
	<div id="hold">


		<?php
		if (isset($_POST['filter_btn'])) {
			$filt_val = $_POST['filter_value'];
			if ($filt_val != "") {
				$qu = mysqli_query($con, "SELECT * FROM products WHERE trending=1  AND concat(name,small_des,long_des) LIKE '%$filt_val%'; ");
				if (mysqli_num_rows($qu) > 0) {


					$qu1 = "SELECT * FROM products
						WHERE trending=1 AND view_as=1 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";
					$qu2 = "SELECT * FROM products
						WHERE trending=1 AND view_as=0 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";

					getcards($qu1, $qu2);
				} else {
					echo "<h2 class='text-center text-danger'>NO PRODDUCT FOUND RELATED TO THIS KEY WORD  </h2>";
				}
			} else {
				$qu1 = "SELECT * FROM `products` WHERE trending='1' and view_as='1' ORDER BY rand()";
				$qu2 = "SELECT * FROM `products` WHERE trending='1' and view_as='0' ORDER BY rand()";

				getcards($qu1, $qu2);	}


			
		}
		
		// *********************** WITH OUT SEARCH PRODUCT ******************
		if (!isset($_POST['filter_btn'])) {
			
				$qu1 = "SELECT * FROM `products` WHERE trending='1' and view_as='1' ORDER BY rand()";
				$qu2 = "SELECT * FROM `products` WHERE trending='1' and view_as='0' ORDER BY rand()";

				getcards($qu1, $qu2);
			
		}

		?>
	</div>
</section>

<!-- blogs -->
<section class="sec-blog bg0 p-t-60 p-b-90">
	<div class="container">
		<div class="p-b-66">
			<h3 class="ltext-105 cl5 txt-center respon1">
				Our Blogs
			</h3>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-4 p-b-40">
				<div class="blog-item">
					<div class="hov-img0">
						<a href="about.php">
							<img src="Admin/img/cs1.jpg" height="260px" alt="IMG-BLOG">
						</a>
					</div>

					<div class="p-t-15">
						<div class="stext-107 flex-w p-b-14">
							<span class="m-r-3">
								<span class="cl4">
									By
								</span>

								<span class="cl5">
									Nancy Ward
								</span>
							</span>

							<span>
								<span class="cl4">
									on
								</span>

								<span class="cl5">
									July 22, 2017
								</span>
							</span>
						</div>

						<h4 class="p-b-12">
							<a href="about.php" class="mtext-101 cl2 hov-cl1 trans-04">
								8 Inspiring Ways to Wear Dresses in the Winter
							</a>
						</h4>

						<p class="stext-108 cl6">
							Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id
							euismod. Interdum et male-suada fames
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 p-b-40">
				<div class="blog-item">
					<div class="hov-img0">
					<a href="about.php">
							<img src="Admin/img/cs2.jpg" height="260px" alt="IMG-BLOG">
						</a>
					</div>

					<div class="p-t-15">
						<div class="stext-107 flex-w p-b-14">
							<span class="m-r-3">
								<span class="cl4">
									By
								</span>

								<span class="cl5">
									Nancy Ward
								</span>
							</span>

							<span>
								<span class="cl4">
									on
								</span>

								<span class="cl5">
									July 18, 2017
								</span>
							</span>
						</div>

						<h4 class="p-b-12">
							<a href="about.php" class="mtext-101 cl2 hov-cl1 trans-04">
								The Great Big List of Men’s Gifts for the Holidays
							</a>
						</h4>

						<p class="stext-108 cl6">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
							in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 p-b-40">
				<div class="blog-item">
					<div class="hov-img0">
					<a href="about.php">
							<img src="Admin/img/cs3.jpg" height="260px" alt="IMG-BLOG">
						</a>
					</div>

					<div class="p-t-15">
						<div class="stext-107 flex-w p-b-14">
							<span class="m-r-3">
								<span class="cl4">
									By
								</span>

								<span class="cl5">
									Nancy Ward
								</span>
							</span>

							<span>
								<span class="cl4">
									on
								</span>

								<span class="cl5">
									July 2, 2017
								</span>
							</span>
						</div>

						<h4 class="p-b-12">
							<a href="about.php" class="mtext-101 cl2 hov-cl1 trans-04">
								5 Winter-to-Spring Fashion Trends to Try Now
							</a>
						</h4>

						<p class="stext-108 cl6">
							Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed
							hendrerit ligula porttitor. Fusce sit amet maximus nunc
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal1 -->


<!-- Footer -->
<?php include 'script.php' ?>

<script>


</script>
<?php include 'footer.php' ?>