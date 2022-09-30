<?php
session_start();
include 'config/db.php';
$msg="";


if(isset($_POST['submit'])){

$_SESSION['email'] = $_POST['email'];
$password = $_POST['password'];


if($_SESSION['email']&&$password){
  
  
  
 
  $sql= mysqli_query($connection,"SELECT * FROM chefs WHERE email='".$_SESSION['email']."'");
  
  $numrows=(mysqli_num_rows($sql));
  
  if($numrows !=0)
  {
    
    while($row=mysqli_fetch_array($sql))
    {
      
    $dbuser=$row["email"];
    $dbpass=$row["password"];
    $_SESSION['chef']=$row["chef_id"];
    $_SESSION['pic']=$row["picture"];
    $_SESSION['phone']=$row["phone"];
      
    }

    
    if($_SESSION['email']==$dbuser)
    {
      
      if($password==$dbpass)
      {

        header("location: chef_page.php");
 
        
      }else{
        
        $msg="<p class='alert alert-danger text-center animated shake'>Incorrect password</p>";
      
      }
      
      
    }else{
      
      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect Email Address</p>";
      
      }
  }else {

      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect Email or password</p>"; 
      
    
  }
  
  
}
}



if (isset($_POST['reg'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$fname=$_POST['fsname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$lname=$_POST['lname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


if ($password != $cpassword) {
  echo "<script>alert('Password not macth'); window.location='index.php'</script>";
  return false;
}




 
$sql = mysqli_query($connection,"INSERT INTO chefs (fsname,lname, oname,gender,phone,email,address,password,picture) VALUES('$fname','$lname','$oname','$gender','$phone','$email','$address','$password','$location')");  
 
echo "<script>alert('Successfully Registered!!!')</script>";
 
 
}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Chef's Registration</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="" method="post" id="create-account_form" class="std" enctype="multipart/form-data">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="First Name"  onkeypress="return /[a-z]/i.test(event.key)"   type="text" id="email_create" name="fsname" value="" class="account_input" required>
											<p></p>
											<input placeholder="Second Name"  onkeypress="return /[a-z]/i.test(event.key)"   type="text" id="email_create" name="lname" value="" class="account_input">
											<p></p>
											<input placeholder="Other Name"   onkeypress="return /[a-z]/i.test(event.key)"  type="text" id="email_create" name="oname" value="" class="account_input">
											<p></p>
											<input placeholder="Gender"  onkeypress="return /[a-z]/i.test(event.key)"   type="text" id="email_create" name="gender" value="" class="account_input">
											<p></p>
											<input placeholder="E-mail address"  type="email" id="email_create" name="email" value="" class="account_input" required>
											<p></p>
											<input placeholder="Phone Number"  type="number" id="email_create" name="phone" value="" class="account_input">
											<p></p>
											<input placeholder="Home Address"  type="text" id="email_create" name="address" value="" class="account_input">
											<p></p>
											<input placeholder="Password"  type="password" id="email_create" name="password" value="" class="account_input" required>
											<p></p>
										  <input placeholder="Confirm Password" type="password" id="email_create" class="account_input" name="cpassword" value="" class="account_input" required>
											<p></p>
											<label style="color: black;">Up Load Picture</label>
												<input type="file" id="email_create" name="pic" value="" class="account_input">
											<p></p>
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary" name="reg" type="submit">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="email" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="password" value="" class="account_input"></span>
									</p>
									
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success" type="submit" name="submit">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	
