<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
<?php include'head.php';?>
</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
		<?php include'chef_head.php';?>
	<!-- MODAL Start
    	================================================== -->
	<!-- LOGO Start
    ================================================== -->
	
		<?php include'logo.php';?>
		<?php include'chef_nav.php';?>


	<!-- MENU Start
    ================================================== -->



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
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-desktop"></i>
						  	</div>
						  	<a href="" class="text-white" style="color: #fff;">
						  	<div class="media-body">
						    	<h4 class="media-heading">Dashboard</h4>
						    	<p class="text-center"> <h5 class="text-center" style="color: #fff;">Online</h5></p>
						  </div>
						</div></a>
					</div>
				</div>

				<div class="col-md-4">
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

				                  	echo $row["count(*)"];

				                  }
				                    ?>                  
						    	</h5></p>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-shopping-cart"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">My Dishes</h4>
						    	<p class="text-center"> <h5 class="text-center" style="color: #fff;">
						    		   <?php

					          require_once('config/db.php');

					             

					    $query = mysqli_query($connection, "SELECT count(*) FROM dishes
						      WHERE chef_id='".$_SESSION['chef_id']."'");
					    $count=1;
					    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

					    		echo $row["count(*)"];

					    }
					     
					  ?>
						    	</h5></p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->


	<section id="single-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Chef's Page</h2>
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
						
						<p class="copyright-text pull-right">Food Recipe @2022 Designed by <a href="">Bahijjah Tech-Solution</a> All Rights Reserved</p>
					</div>
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>