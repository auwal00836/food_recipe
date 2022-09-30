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
					<h6><span class="fa fa-user"></span> Admin Profile</h6>
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
						<div class="card-header"><span class="fa fa-tags"></span> Manage Admin</div>
						<div class="card-body">
							   <table id="example1" class="table table-bordered text-center  table-responsive-sm table-striped" style="font-size: 13px;">
									                <thead>
									                <tr>
									                  <th>Admin Name</th>
									                  <th>Username</th>
									                  <!-- <th>Picture</th> -->
									                 <!--  <th>Action</th> -->
									                </tr>
									                </thead>
									                <tbody>
									                     <?php

									          require_once('config/db.php');

									             

									    $query = mysqli_query($connection, "SELECT * FROM users");
									    
									    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
									     
									  ?>
									                <tr>
									                  <td><?php echo $row["name"]; ?></td>
									                  <td><?php echo $row["username"]; ?></td>
									                  <!--  <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-primary fa fa-xs  fa-image"  ><strong style="font-size: 12px;"> View Picture</strong></a></td> -->


									          
									                    <!-- <td align="center"><a href="delete_admin.php?id=<?php echo $row['id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-xs" ><strong style="font-size: 12px;"> Delete</strong></a></td>
 -->
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