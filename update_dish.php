<?php
//session_start();
error_reporting(0);
 include'config/db.php';
$dish=$_GET['dish_id'];

  $query2 = mysqli_query($connection, "SELECT * FROM dishes WHERE dish_id='$dish' ");
                                       
        while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

            $fname=$row["fname"];
            $vid=$row["vfile"];
            $price=$row["price"];
            $food_picture=$row["food_picture"];
            $ingredient1=$row["ingredient1"];
            $manual = $row["file"];
        
    	//echo $vid;
        }

	if (isset($_POST['update_dish'])) {

		move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
		$location=$_FILES["pic"]["name"];
		$location = !empty($location) ? $location : $food_picture;
		move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);      
		$file=$_FILES["file"]["name"];

		move_uploaded_file($_FILES["vfile"]["tmp_name"],"uploads/videos/" . $_FILES["vfile"]["name"]);      
		$vfile=$_FILES["vfile"]["name"];
		
		$fname=$_POST['fname'];
		$price=$_POST['price'];
		$ingredient1=$_POST['ingredient1'];


		if(!empty($location)){
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1', food_picture ='$location' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";
		}else{
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1', food_picture ='$food_picture', file='$file', vfile='$vfile' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";			
		}
		if (empty($file)) {
				$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1', file='$manual' WHERE dish_id= '$dish' ");  

			echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";
		}
		else{
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1',food_picture='$location', file='$file', vfile='$vfile' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";			
		}
		if (empty($vfile)) {
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1', vfile='$vid' WHERE dish_id= '$dish' ");  

			echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";
		}else{
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1',food_picture='$location', file='$file', vfile='$vfile' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_store.php'</script>";			
		}
		

		/*if($location == ""){

		

		}
		if($file == ""){
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1', food_picture='$location',file='$manual' ,vfile='$vfile' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='update_dish.php'</script>";
		}
		if ($vfile == "") {
			
		}

		else{ 
			$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1',food_picture='$location', file='$file', vfile='$vfile' WHERE dish_id= '$dish' ");  

		echo "<script>alert('Recipe Successfully Updated!!!'); window.location='update_dish.php'</script>";
		}*/
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

	<section >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h6><span class="fa fa-tags"></span> Update Recipe</h6>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Dish</a></li>
					  	<li class="active">Update-Item</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 40px; margin-top: -60px;">
					<form action=""  method="post" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header text-center">
								<h6><span class="fa fa-tags"></span> <b>Update Recipe</b></h6>
							</div>
							<div class="card-body">
									<div class="form-group col-md-4">
										<label> Name </label>
										<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
									</div>

									<div class="form-group col-md-4">
										<label>Estimated Price</label>
										<input type="number" name="price" class="form-control" value="<?php echo $price; ?>">
									</div>

									<div class="form-group col-md-4">
										<label>Picture</label>
										<input type="file" name="pic" class="form-control" >
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
									<textarea name="ingredient1" class="form-control" style="height: 200px;" value="<?php echo $ingredient1; ?>"><?php echo $ingredient1; ?></textarea>
								</div>

								<div class="form-group col-md-4">
									<label>Upload Manual</label>
									<input type="file" name="file" class="form-control" >
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
									<input type="file" name="vfile" class="form-control" accept=".mp4"  >
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="form-group col-md-4 col-sm-offset-4 offset-sm-3">
									<button class="btn btn-primary form-control" type="submit" name="update_dish"> Submit </button>
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