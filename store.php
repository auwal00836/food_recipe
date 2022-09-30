<!doctype html>
<html lang="en">
<head>
<?php

 include'head.php';?>
</head>
<style type="text/css">
	.a:hover{
		background-color: #2F4F4F !important;
		color: #fff !important;
		border:1px solid #2F4F4F;
	}
</style>
<body>


<!-- TOP HEADER Start
    ================================================== -->
		<?php



		 include'chef_head.php';?>
	
	
	<!-- MODAL Start
    	================================================== -->

		<?php include'user_login.php';?>

	<!-- LOGO Start
    ================================================== -->
	
		<?php include'logo.php';?>


	<!-- MENU Start
    ================================================== -->

		<?php include'chef_nav.php';?>

<?php

include 'config/db.php';


if(isset($_POST['add'])){


$add = $_POST['add'];
$_SESSION['amount']= $_POST['price'];
$_SESSION['dish']= $_POST['add'];


$sql = mysqli_query($connection,"INSERT INTO cart(chef_id,dish_id) VALUES ('".$_SESSION['chef']."','$add')");
	echo "<script>alert('Item added to cart successfully!'); window.location='store.php'</script>";
}
?>
<!-- breadcrumb Start
    ================================================== -->

	<section >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h6><span class="fa fa-tags"></span> Recipe Menu</h6>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Products</a></li>
					  	<li class="active">Selected-Item</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->



<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 40px; margin-top: -180px;">
					<div class="card">
						<div class="card-header text-center"><h6><span class="fa fa-tags"></span> <b>MENU</b></h6></div>
						<div class="card-body">
							
							<div class="row">
								<?php
				                  require_once('config/db.php');
				                  $query = mysqli_query($connection, "SELECT * FROM dishes");
				                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				                    ?>                           
								<div class="col-md-3">
									<form action="" method="post">
									<div class="products">
										<a href="customer_selected_item.php?dish=<?php echo $row["dish_id"]; ?>">
											<img src="images/<?php echo $row["food_picture"]; ?>" alt="" style="width: 250px; height: 200px;">
										</a>
										<a href="customer_selected_item.php">
											<h6><?php echo $row["fname"]; ?></h6>

											<input type="text" name="price" hidden value="<?php echo $row["price"]; ?>">

										</a>
										<p class="price">Price: <del><b>N</b></del> <?php echo $row["price"]; ?></p>
										<button class="view-link shutter text-white a form-control" type="submit" value="<?php echo $row["dish_id"]; ?>" name="add" style=" border-color:#90c322; padding-bottom: 30px; " >
											<i class="fa fa-plus-circle text-white " style="color: white !important"></i>Add to cart</button>
									</div>	<!-- End of /.products -->
								</div>	<!-- End of /.col-md-3 --></form>
								<?php } ?>
							</div>			
						
						</div>
						<div class="card-footer text-center"> Store</div>

					</div>

				

					</div>

				</div>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->

































	<!-- FOOTER Start
    ================================================== -->

	
	<a id="back-top" href="#"></a>
</body>
</html>