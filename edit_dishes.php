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
					<h6><span class="fa fa-tags"></span> Edit Dishes</h6>
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
						<div class="card-header text-center"><h6><span class="fa fa-tags"></span> <b>Food Information</b></h6></div>
						<div class="card-body">
							<form action="dishes.php"  method="post" enctype="multipart/form-data">
								<div class="form-group col-md-3">
									<label>Food Name</label>
									<input type="text" name="fname" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Food Type</label>
									<select class="form-control" name="ftype">
										<option value="Rice,Beans & Pasta">Rice,Beans & Pasta</option>
										<option value="Yam & Fries">Yam & Fries</option>
										<option value="Swallow">Swallow</option>
										<option value="Protain">Protain</option>
										<option value="Shawarma">Shawarma</option>
										<option value="Water & Soft Drinks">Water & Soft Drinks</option>
										<option value="Waina">Waina</option>
									</select>
								</div>

								<div class="form-group col-md-3">
									<label>Price</label>
									<input type="number" name="price" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Picture</label>
									<input type="file" name="pic" class="form-control ">
								</div>

			

						</div>
						<div class="card-footer text-center"><h6><span class="fa fa-tags"> </span> <b>Ingedient</h6></b></div>

					</div>

					<div class="card">
				
						<div class="card-body">
								<div class="form-group col-md-3">
									<label>Ingredient 1</label>
									<input type="text" name="ingredient1" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 2</label>
									<input type="text" name="ingredient2" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 3</label>
									<input type="text" name="ingredient3" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 4</label>
									<input type="text" name="ingredient4" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 5</label>
									<input type="text" name="ingredient5" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 6</label>
									<input type="text" name="ingredient6" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 7</label>
									<input type="text" name="ingredient7" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Ingredient 8</label>
									<input type="text" name="ingredient8" class="form-control ">
								</div>

						</div>
							<div class="card-footer text-center"><h6><span class="fa fa-tags"> </span> <b>Classes of food</h6></b></div>

							<div class="card">
				
						<div class="card-body">
								<div class="form-group col-md-3">
									<label>Fat & Oil</label>
									<input type="number" name="fat" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Protein</label>
									<input type="number" name="protein" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Carbohydrate</label>
									<input type="number" name="carbohydrate" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Vitamin</label>
									<input type="number" name="vitamin" class="form-control ">
								</div>

								<div class="form-group col-md-3">
									<label>Mineral Salt</label>
									<input type="number" name="mineral" class="form-control ">
								</div>

								<div class="form-group col-md-3 mb-4">
									<label>Water</label>
									<input type="number" name="water" class="form-control ">
								</div>

								<div class="form-group col-md-3 col-sm-offset-5">
									<button class="btn btn-primary form-control" type="submit" name="submit"> Submit</button>
								</div>

							</form>

						</div>
							<p></p>

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