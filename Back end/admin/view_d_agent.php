<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

include("includes/header.php");
?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Delivery Agent

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Delivery Agent

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Delivery Agent No:</th>
<th>Delivery Agent Name:</th>
<th>Delivery Agent Email:</th>
<th>Delivery Agent Image:</th>
<th>Delivery Agent Country:</th>
<th>Delivery Agent City:</th>
<th>Delivery Agent Phone Number:</th>
<th>Delivery Agent Delete:</th>
<th>Delivery Agent Edit:</th>
<th>Delivery Agent Contact:</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_c = "select * from d_agent";

$run_c = mysqli_query($con,$get_c);

while($row_c=mysqli_fetch_array($run_c)){

$c_id = $row_c['d_agent_id'];

$c_name = $row_c['name'];

$c_email = $row_c['email'];

$c_image = $row_c['image'];

$c_country = $row_c['country'];

$c_city = $row_c['city'];

$c_contact = $row_c['contact'];

$i++;




?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $c_name; ?></td>

<td><?php echo $c_email; ?></td>

<td><img src="image/<?php echo $c_image; ?>" width="60" height="60" ></td>

<td><?php echo $c_country; ?></td>

<td><?php echo $c_city; ?></td>

<td><?php echo $c_contact; ?></td>

<td>

<a href="index.php?d_agent_delete=<?php echo $c_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>


</td>
<td>

<a href="index.php?d_agent_edit=<?php echo $c_id; ?>" >

<i class="fa fa-trash-o" ></i> Edit

</a>


</td>
<td>
<a href="contact_d_agent.php?id=<?php echo $c_id; ?>" >

<i class="fa fa-trash-o" ></i> Mail

</a>
</td>

</tr>

<?php } ?>


</tbody><!-- tbody Ends -->



</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 

<?php 
include("includes/footer.php");
} ?>