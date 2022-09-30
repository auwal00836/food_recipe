<!doctype html>
<html lang="en">
<head>
<?php

 include'head.php';?>
</head>
<style type="text/css">
	.a:hover{
		background-color: #90c322;
		color: #fff;
	}

	.aa:hover{
		background-color: #2F4F4F !important;
		color: #fff !important;
		border: solid white;
	}
</style>
<body>


<!-- TOP HEADER Start
    ================================================== -->
		<?php include'header.php';?>
	
	
	<!-- MODAL Start
    	================================================== -->

		<?php include'user_login.php';?>

	<!-- LOGO Start
    ================================================== -->
	
		<?php include'logo.php';?>


	<!-- MENU Start
    ================================================== -->

		<?php include'chef_nav.php';?>


<!-- breadcrumb Start
    ================================================== -->

<?php

include 'config/db.php';


if(isset($_POST['check'])){


$cart = $_POST['cart'];
 $_SESSION['dish'] = $_POST['dish'];
  $_SESSION['amount'] = $_POST['price'];
    $_SESSION['dish'] = $_POST['dish'];
 $_SESSION['transaction']=rand(10,10000000);
  $_SESSION['date']=$_POST['date'];

 foreach ($cart as $key => $cartt) {
 	# code...




$sql = mysqli_query($connection,"INSERT INTO reservations (chef_id,cart_id,dish_id,transaction_id,amount) VALUES ('".$_SESSION['chef']."','$cartt','".$_SESSION['dish'][$key]."','".$_SESSION['transaction']."','".$_SESSION['amount'][$key]."')");
	/*echo "<script>alert('Continue to make payment'); window.location='cart.php'</script>";*/


      $query = mysqli_query($connection, "SELECT * FROM reservations WHERE chef_id='".$_SESSION['chef']."' AND transaction_id='".$_SESSION['transaction']."'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $reservations=$row["reservation_id"];


    }




   $sql = mysqli_query($connection,"INSERT INTO payment(customer_id,reservation_id,transaction_id,amount,dish_id) VALUES('".$_SESSION['chef']."','$reservations','".$_SESSION['transaction']."','".$_SESSION['amount'][$key]."','".$_SESSION['dish'][$key]."')"); 


echo "<script> window.location='payment_api.php'</script>";

} } 
?>


<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 60px; margin-top: -10px;">
					<div class="card col-md-6 col-sm-offset-3" style="margin-bottom: 60px;">
						<div class="card-header text-center"><h6><span class="fa fa-tags"></span> <b>My Download</b></h6></div>
						<div class="card-body ">
							<form action="" method="post">
								

						
							<div class="row">
								<?php
				                  require_once('config/db.php');
				                  $query = mysqli_query($connection, "SELECT * FROM payment
					    	 LEFT JOIN reservations on reservations.reservation_id = payment.reservation_id
						      LEFT JOIN chefs on chefs.chef_id = payment.chef_id
						      LEFT JOIN dishes on dishes.dish_id = payment.dish_id
						      WHERE payment.chef_id='".$_SESSION['chef']."' AND status='1'");
				                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				                    ?>                           
								<div class="col-md-12">

									<div class="products col-md-12">
								<div class="col-md-2">
											<img src="images/<?php echo $row["food_picture"]; ?>" alt="" style="width: 80px; height: 70px; border-radius: 20px;">
										</div>
											<span class="col-md-7"><?php echo $row["fname"]; ?><br> <del><b>N</b></del> <?php echo $row["price"]; ?></span>

											<input type="text" name="cart[]" hidden value="<?php echo $row["cart_id"]; ?>">
											<input type="text" name="price[]" hidden value="<?php echo $row["price"]; ?>">
											<input type="text" name="dish[]" hidden value="<?php echo $row["dish_id"]; ?>">
											<input type="text" name="date[]" hidden value="<?php echo $row["date_added"]; ?>">


										

											<span class="col-md-3"><a class=" btn btn- shutter  aa" style=" border-color:; background-color: #2F4F4F;  font-size: 12px; color: #fff; " href="uploads/<?php echo $row["file"]; ?>" >
											<i class="fa fa-check-circle" style="color:  "></i> Download</a></span><br>
 
									</div>	<!-- End of /.products -->
								</div> <hr><br> 


									<!-- End of /.col-md-3 -->
								<?php } ?>
							</div>	
							<div class="col-md-12 text-right"><h6><b>Total:</b> <del><b>N</b></del> <?php 

							$query = mysqli_query($connection, "SELECT sum(price) FROM cart

				                  	LEFT JOIN chefs on chefs.chef_id = cart.chef_id
				                  	LEFT JOIN dishes on dishes.dish_id = cart.dish_id WHERE cart.chef_id = '".$_SESSION['chef']."'  AND cart_status='0'");
				                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
							echo number_format($row["sum(price)"]); }?>
						</h6> </div>	
						<input type="text" name="dish[]" value="<?php echo $row["dish_id"]; ?>" hidden >	
	<span class="col-md-12"><button class="view-link shutter a form-control" value="<?php echo $row["dish_id"]; ?>" type="submit"  name="check[]" style=" border-color:#90c322; padding-bottom: 30px; " >
											<i class="fa fa-plus-circle"></i> Delete </button></span><br>
						</div>
					

					</div>
	</form>
				

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