<!--Admin can edit existing Delivery agent details -->
<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php
include("includes/header.php");

if(isset($_GET['d_agent_edit'])){

$edit_id = $_GET['d_agent_edit'];

$get_p = "select * from d_agent where d_agent_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['d_agent_id'];

$name = $row_edit['name'];

$city = $row_edit['city'];

$email = $row_edit['email'];

$image = $row_edit['image'];

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

$get_cat = "select * from categories where cat_id='$cat'";

$run_cat = mysqli_query($con,$get_cat);

$row_cat = mysqli_fetch_array($run_cat);

$cat_title = $row_cat['cat_title'];*/

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Customer </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Delivery Agent

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Delivery Agent

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent Name </label>

<div class="col-md-6" >

<input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent city </label>

<div class="col-md-6" >
<input type="text" name="city" class="form-control" required value="<?php echo $city; ?>">

	
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent Email </label>

<div class="col-md-6" >
	<input type="email" name="email" class="form-control" required value="<?php echo $email; ?>">


<!--<select name="cat" class="form-control" >

<option value="<?php //echo $cat; ?>" > <?php //echo $cat_title; ?> </option>-->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent Image </label>

<div class="col-md-6" >

<input type="file" name="image" class="form-control">
<br><img src="image/<?php echo $image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent country </label>

<div class="col-md-6" >

<input type="text" name="country" class="form-control" required value="<?php echo $country; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Agent contact </label>

<div class="col-md-6" >

<input type="text" name="contact" class="form-control" required value="<?php echo $contact; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Delivery Agent Details" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$name = $_POST['name'];

$city = $_POST['city'];
$email = $_POST['email'];

$country = $_POST['country'];
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($temp_name,"image/$image");

$contact = $_POST['contact'];

$update_cust = "update d_agent set name='$name',city='$city',email='$email',country='$country',image='$image',contact='$contact' where d_agent_id='$c_id'";

$run_cust = mysqli_query($con,$update_cust);

if($run_cust){

echo "<script> alert('Delivery Agent Details has been updated successfully') </script>";

echo "<script>window.open('index.php?view_d_agent','_self')</script>";

}

}

?>

<?php 
include("includes/footer.php");
} ?>
