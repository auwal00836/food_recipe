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

	<section >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h6><span class="fa fa-users"></span> Manage Recipe</h6>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Recipe</a></li>
					  	<li class="active">Manage Recipe</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->



<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 40px; margin-top: -160px;">
					<div class="card">
						<div class="card-header"><span class="fa fa-table"></span> Manage Recipe</div>
						<div class="card-body">
							 <table id="example1" class="table table-bordered table-responsive-sm table-striped">
					                <thead>
					                <tr>
					                  <th>Recipe Name</th>
					                  <th>Price</th>
					                  <th>Picture</th>
					                  <th>Action</th>
					                </tr>
					                </thead>
					                <tbody>
					                     <?php

					          require_once('config/db.php');

					             

					    $query = mysqli_query($connection, "SELECT * FROM dishes");
					    
					    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
					     
					  ?>
					                <tr style="font-size: 12px;">
					                  <td><?php echo $row["fname"]?></td>
					                  <td><?php echo $row["price"]; ?></td>

					                   <td align="center"><a href="images/<?php echo $row['food_picture']; ?>"  class="btn btn-xs btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>

					                    <td align="center"><a href="delete_food.php?id=<?php echo $row['dish_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn   btn-danger btn-xs fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

					                </tr>
					                <?php
					                  }
					                ?>
					               
					                </tbody>
					                
					              </table>
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