<?php 

 include'config/db.php';
 $err="";

        $get=$_GET['dish'];
        $query2 = mysqli_query($connection, "SELECT * FROM dishes WHERE dish_id='$get'");
                                       
        while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

            $fname=$row["fname"];
            $price=$row["price"];
            $pic=$row["food_picture"];
            $ingredient1=$row["ingredient1"];
           	$vid =$row["vfile"];
           	$file = $row["file"];

        }

 ?>
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

		<?php include'index_nav.php';?>


<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Product Details</h3>
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

	<section id="single-product">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="single-product-img" style="width: 270px !important; height: : 390px !important;">
						<img src="images/<?php echo $pic; ?>" class="img-thumbnail" alt="" style="width: 270px !important; height:300px !important;"><br>
						<h6><?php echo $fname; ?></h6>
					<p class="price"><del><b>N</b></del> <?php echo $price; ?></p>
					</div>

				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-8">
					<div class="row" style="margin-top: 5px; margin-left: 150px;">
						<video width="500" height="240" controls>
						  <source src="./uploads/videos/<?php echo $vid; ?>" type="video/mp4">
						Your browser does not support the video tag.
						</video>

					</div>	<!-- End of /.row -->
					<div class="row">
						<div class="block">
						<div class="product-des">
							 <a  data-placement="bottom" title="Download"  href="./uploads/<?php echo $file; ?>"  class="btn btn-primary  fa fa-download fa-lg " style="font-size:12px; margin-left: 600px;">&nbsp;download Recipe</a>
							<h6><b><u>More Descriptions:</u></b></h6>
							<p>         
							<div class="col-md-12 mb-4 form-group" style="padding-left: 0px;">
								<input type="checkbox" class="disabled" disabled name="used" checked> <?php echo $ingredient1; ?>
							</div>
							</p>
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
					</div>
				</div>	<!-- End of /.col-md-4 -->
				
			</div>	<!-- End of /.row -->
			
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/footer-logo.png" alt="">
						</a>
						<p>
							
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Food Recipe system,</span></p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> (+234)-8099471568 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+234)-8099471568</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>info@foodordering.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						<h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


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
						<p class="copyright-text pull-right">Food ordering system @2019 Designed by <a href="http://www.themexpert.com"> Modupe </a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>