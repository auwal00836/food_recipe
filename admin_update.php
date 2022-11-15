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


		<?php

include 'config/db.php';
$query = mysqli_query($connection, "SELECT * FROM chefs WHERE chef_id='".$_SESSION['chef']."'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $pic=$row["picture"];
      $gender=$row["gender"];
      $phone=$row["phone"];
      $fname=$row["fsname"];
      $lname=$row["lname"];
      $oname=$row["oname"];
      $address=$row["address"];
      $password=$row["password"];
      $email=$row["email"];

    

    }

    if (isset($_POST["btn_update_profile"])) {

    	//move_uploaded_file($_FILES["img"]["tmp_name"],"images/" . $_FILES["img"]["name"]);     
	  //$location=$_FILES["img"]["name"];
    	$path = "images/";
    	$name = $_FILES['img']['name'];
    	$extention = pathinfo($name,PATHINFO_EXTENSION);
    	
    	$rename = $email.".".$extention;
    	$temp = $_FILES['img']['tmp_name'];
    	$location = move_uploaded_file($temp, $path . $rename);

      $gender=$_POST["gender"];
      $phone=$_POST["phone"];
      $fname=$_POST["fname"];
      $lname=$_POST["lname"];
      $oname=$_POST["oname"];
      $address=$_POST["address"];
      $password=$_POST["password"];
      $email=$_POST["email"];

       $query = "UPDATE chefs SET fsname='$fname', lname='$lname', oname='$oname', gender='$gender', phone='$phone',email='$email', address='$address', password='$password',picture ='$rename' WHERE chef_id = '".$_SESSION['chef']."' ";
             $result = mysqli_query($connection, $query);
             if ($result==1) {
                ?>
                    <script>
                        setTimeout(() => window.location.href = "chef_profile.php", 2000);
                    </script>

                <?php
        }else{

            return false;
        }
    }



?>

<!-- breadcrumb Start
    ================================================== -->


<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 60px; margin-top: -10px;">
					<div class="card col-md-6  col-sm-offset-3" style="margin-bottom: 60px;">
						<div class="card-header text-center"><h6><span class="fa fa-sser-circle"></span> <b>My Profile</b></h6></div>
						<div class="card-body ">

								 <div class="row">
							        <div class="col-md-3">
							            <img src="images/<?php echo $pic; ?>" class="img-thumbnail">
							        </div>
							           <div class="col-md-8">
							                <form method="POST" enctype="multipart/form-data">
							                    <div class="container col-md-6 offset-sm-3">
							                      <div class="form-group mb-3">
							                        <label>First Name:</label>
							                        <input type="text" name="fname" style="width:250px;" class="form-control" value="<?php echo $fname; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Last Name:</label>
							                        <input type="text" name="lname" style="width:250px;" class="form-control" value="<?php echo $lname; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Other Name:</label>
							                        <input type="text" name="oname" style="width:250px;" class="form-control" value="<?php echo $oname; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Gender:</label>
							                        <input type="text" name="gender" style="width:250px;" class="form-control" value="<?php echo $gender; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Phone:</label>
							                        <input type="text" name="phone" style="width:250px;" class="form-control" value="<?php echo $phone; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Email Address:</label>
							                        <input type="text" name="email" style="width:250px;" class="form-control" value="<?php echo $email; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                        <label>Home Address:</label>
							                        <input type="text" name="address" style="width:250px;" class="form-control" value="<?php echo $address; ?>">
							                      </div>
							                       <div class="form-group mb-3">
							                        <label>Password:</label>
							                        <input type="text" name="password" style="width:250px;" class="form-control" value="<?php echo $password; ?>">
							                      </div>
							                      <div class="form-group mb-3">
							                      <label style="color: black;">Up Load Picture</label>
												<input type="file"  name="img" style="width:250px;" class="form-control" accept="image/*" >
												 </div>
							                      <div class="form-group mb-3">
							                        <button class="btn btn-success rounded-2 order-0 form-control" type="submit" value="Send File" name="btn_update_profile">Update</button>
							                      </div>
							                    </div>
							                </form>
							             
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

	
	<a id="back-top" href="#"></a>
</body>
</html>