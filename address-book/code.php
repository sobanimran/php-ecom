<?php 
include 'Admin/conn.php';


if(isset($_POST['contactbtn'])){
   $email= $_POST['email'];
   $message= $_POST['msg'];

$qu=mysqli_query($con,"INSERT INTO contactUS values('','$email','$message',CURRENT_TIMESTAMP())");

   header('location:contact.php');
}




 ?>