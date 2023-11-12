<?php include 'header.php';
$pagname='productuser' ?>

	
	<!-- Product -->
	<div class="bg0 m-t-100 p-b-50 ">
	<?php include 'main_product_z@.php';?>
	
<?php
if(isset($_POST['filter_btn'])){
$filt_val= $_POST['filter_value'];
$qu=mysqli_query($con,"SELECT * FROM products WHERE   concat(name,small_des,long_des) LIKE '%$filt_val%'; ");
if ($filt_val != "") {
if(mysqli_num_rows($qu)>0){
	

	$qu1="SELECT * FROM products
	WHERE  view_as=1 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";
	$qu2="SELECT * FROM products
	WHERE  view_as=0 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";
	
	getcards($qu1,$qu2);
}else{
	echo	"<h2 class='text-center text-danger'> no product found  </h2>";
	}	

}else{
	$qu1 = "";//"SELECT * FROM `products` WHERE   view_as=1 ORDER BY rand()";
	$qu2 =  "SELECT * FROM `products` WHERE   view_as=0 ORDER BY rand()";
   getcards($qu1,$qu2);}



}
if(isset($_POST['filter_btn1'])){
$filt_val= $_POST['filter_value1'];
$qu=mysqli_query($con,"SELECT * FROM products WHERE   concat(name,small_des,long_des) LIKE '%$filt_val%'; ");
if ($filt_val != "") {
if(mysqli_num_rows($qu)>0){
	

	$qu1="SELECT * FROM products
	WHERE  view_as=1 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";
	$qu2="SELECT * FROM products
	WHERE  view_as=0 AND concat(name,small_des,long_des) LIKE '%$filt_val%';";
	
	getcards($qu1,$qu2);}else{
		echo	"<h2 class='text-center text-danger'> no product found  </h2>";
		}	

}else{
	$qu1 = "";//"SELECT * FROM `products` WHERE   view_as=1 ORDER BY rand()";
	$qu2 =  "SELECT * FROM `products` WHERE   view_as=0 ORDER BY rand()";
   getcards($qu1,$qu2);}



}
if(!isset($_POST['filter_btn'])){
if(!isset($_POST['filter_btn1'])){


	    $qu1 = "";//"SELECT * FROM `products` WHERE   view_as=1 ORDER BY rand()";
		$qu2 =  "SELECT * FROM `products` WHERE   view_as=0 ORDER BY rand()";
	   getcards($qu1,$qu2);
}
}
	?>
		<!-- Load more -->
		
		

	<!-- Footer -->
	<!-- Modal1 -->
	
	
	<!-- Footer -->
	<?php include 'script.php'?>
	<?php include 'footer.php'?>
