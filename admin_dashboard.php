<!doctype html>
<html lang="en">
<head>
<?php include'head.php';?>
</head>
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

		<?php include'admin_nav.php';?>


<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Dashboard</h3>
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
				<div class="col-md-6">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-tags"></i>
						  	</div>
						  	<a href="" class="text-white" style="color: #fff;">
						  	<div class="media-body">
						    	<h4 class="media-heading"> Recipe</h4>
						    	<p class="text-center"> <h5 class="text-center" style="color: #fff;">
						    		<?php

					          require_once('config/db.php');

					             

					    $query = mysqli_query($connection, "SELECT count(*) FROM dishes");
					    
					    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
					     echo	$row["count(*)"];
					     }
					  ?>
						    	</h5></p>
						  </div>
						</div></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fa fa-users"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Chefs</h4>
						    	<p class="text-center"> <h5 class="text-center" style="color: #fff;">
						    		<?php

					          require_once('config/db.php');

					             

					    $query = mysqli_query($connection, "SELECT count(*) FROM chefs");
					    
					    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
					     echo	$row["count(*)"];
					     }
					  ?>
						    	</h5></p>
						  </div>
						</div>
					</div>
				</div>
				
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->


	<section id="single-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Administrator's Page</h2>
				</div>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->

































	<!-- FOOTER Start
    ================================================== -->

	<footer>
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="cash-out pull-left">
							<li>
								<a href="#">
									<img src="images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa-Electron.png" alt="">	
								</a>
							</li>
						</ul>
						<p class="copyright-text pull-right">Food Recipe @2021 Designed by <a href="">HANNATU JATAU HASSAN</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>