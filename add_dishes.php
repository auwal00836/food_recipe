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

	<!-- LOGO Start
    ================================================== -->
	
		<?php include'logo.php';?>


	<!-- MENU Start
    ================================================== -->


<!-- breadcrumb Start
    ================================================== -->

	<section >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h6><span class="fa fa-tags"></span> Add Recipes</h6>
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
				<div class="col-md-12" style="margin-bottom: 40px; margin-top: -60px;">
					<form action="dishes.php"  method="post" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header text-center">
								<h6><span class="fa fa-tags"></span> <b> Add Recipes</b></h6>
							</div>
							<div class="card-body">
									<div class="form-group col-md-4">
										<label> Name </label>
										<input type="text" name="fname" class="form-control">
									</div>

									<div class="form-group col-md-4">
										<label>Estimated Price</label>
										<input type="number" name="price" class="form-control">
									</div>

									<div class="form-group col-md-4">
										<label>Picture</label>
										<input type="file" name="pic" class="form-control">
									</div>
							</div>
							<div class="card-footer text-center">
								<h6><span class="fa fa-tags"> </span> <b>Descriptions</h6></b>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="form-group col-md-4">
									<label>Descriptions</label>
									<textarea name="ingredient1" class="form-control" style="height: 200px;"></textarea>
								</div>

								<div class="form-group col-md-4">
									<label>Upload Manual</label>
									<input type="file" name="file" class="form-control">
								</div>
							</div>
							<div class="card-footer text-center">
								<h6><span class="fa fa-tags"> </span> <b>File Upload</h6></b>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="form-group" style="margin: 0 auto;">
									<label>Upload Video</label>
									<input type="file" name="vfile" class="form-control" accept=".mp4">
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="form-group col-md-4 col-sm-offset-4 offset-sm-3">
									<button class="btn btn-primary form-control" type="submit" name="submit"> Submit </button>
								</div>
								
							</div>
							
						</div>
					</form>
				</div>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->
	<!-- FOOTER Start
    ================================================== -->

	
	<a id="back-top" href="#"></a>
</body>
</html>