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
					<h6><span class="fa fa-users"></span> Manage Chefs</h6>
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
				<div class="col-md-12" style="margin-bottom: 40px; margin-top: -165px;">
					<div class="card">
						<div class="card-header"><span class="fa fa-table"></span> Manage Chefs</div>
						<div class="card-body">
							 <table id="example1" class="table table-bordered table-responsive-sm table-striped">
					                <thead>
					                <tr>
					                  <th>Chefs_Name</th>
					                  <th>Gender</th>
					                  <th>Address</th>
					                  <th>Phone No.</th>
					                  <th>Email</th>
					                  <th>Picture</th>
					                  <th>Action</th>
					                </tr>
					                </thead>
					                <tbody>
					                     <?php

					          require_once('config/db.php');

					             

					    $query = mysqli_query($connection, "SELECT * FROM chefs");
					    
					    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
					     
					  ?>
					                <tr style="font-size: 12px;">
					                  <td><?php echo $row["fsname"]." ".$row["lname"]." ".$row["oname"]; ?></td>
					                  <td><?php echo $row["gender"]; ?></td>
					                  <td><?php echo $row["address"]; ?></td>
					                  <td><?php echo $row["phone"]; ?></td>
					                  <td><?php echo $row["email"]; ?></td>

					                   <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-xs btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>


					                    <td align="center"><a href="delete_chef.php?id=<?php echo $row['chef_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn   btn-danger btn-xs fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

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