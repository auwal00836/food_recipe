<?php 

 include'config/db.php';
 $err="";

        $get=$_GET['dish'];
        $query2 = mysqli_query($connection, "SELECT * FROM dishes WHERE dish_id='$get'");
                                       
        while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

            $fname=$row["fname"];
            $vid=$row["vfile"];
            $price=$row["price"];
            $file=$row["file"];
            $food_picture=$row["food_picture"];
            $ingredient1=$row["ingredient1"];
        
           
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

		<?php include'chef_nav.php';?>


<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Recipe Details</h3>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Dish</a></li>
					  	<li class="active"><a href="chef_dishes_list.php" >Update-Dish</a></li>
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
						<img src="images/<?php echo $food_picture; ?>" class="img-thumbnail" alt="" style="width: 270px !important; height:300px !important;"><br>
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
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<p class="copyright-text pull-right">Food Recipe @2022 Designed by <a href="">Bahijjah Tech-Solution</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>