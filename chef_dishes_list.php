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
					  	<li class="active"><a href="update_dish.php" value="<?php echo $row["dish_id"]; ?>">Update-Item</a></li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->
	<section id="single-product">
		<div class="container">
			<div class="row justify-content-center">
		<div class="col-sm-6" style="margin-left: 300px;">
		         <div class="card">
		              <div class="card-body">
		                  <h5 class="card-title">Dishes Overview</h5>
		                  <div class="table-responsive">
		                      <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
		                          <div class="row">
		                              <div class="col-sm" >
		                                  <table id="zero_config" class="table table-striped table-bordered dataTable">
		                                      <thead>
		                                          <tr role="row">
		                                              <th width="1%">SN</th>
		                                              <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Dish Name</th>
		                                               <th width="1%">Update</th>
		                                               <th width="1%">Delete</th>
		                                          </tr>
		                                      </thead>
		                                      <tbody>
		                                   <?php 
		                                   $i = 1;
		                                   include'config/db.php';
		                                   $query2 = mysqli_query($connection, "SELECT * FROM dishes WHERE chef_id='".$_SESSION['chef']."'");
		                                   while ($data = mysqli_fetch_assoc($query2)) {
		                                      
		                             ?>


		                                          <tr role="row" class="odd">
		                                              <td><?php echo $i; ?></td>
		                                              <td><?php echo $data["fname"]; ?>
		                                              </td>
		                                              <td>
		                                                  <center>
		                                                      <a href="update_dish.php?dish_id=<?php echo $data['dish_id']; ?>" class="btn btn-info btn-sm">
		                                                          update
		                                                      </a>
		                                                  </center>
		                                              </td>
		                                              <td>
		                                                  <center>
		                                                      <a href="delete_dish.php?dish_id=<?php echo $data['dish_id']; ?>" class="btn btn-danger btn-sm">
		                                                          Delete
		                                                      </a>
		                                                  </center>
		                                              </td>            
		                                          </tr>
		                                       <?php 
		                                        $i++;
		                                          }
		                                        ?>
		                                      </tbody>

		                                  </table>

		                              </div>
		                          </div>
		                      </div>
		                      
		                  </div>
		             </div>
		         </div>
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
						<p class="copyright-text pull-right">Food Recipe @2021 Designed by <a href="">Gambo Abdullahi Garkuwa</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>