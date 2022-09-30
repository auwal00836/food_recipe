<!doctype html>
<html lang="en">
<head>
<?php
session_start();
 include'head.php';?>
</head>
<style type="text/css">
	.a:hover{
		background-color: #90c322;
		color: #fff;
	}

	.aa:hover{
		background-color: red;
		color: #fff;
	}
</style>
<body onload="window.print()">


<!-- TOP HEADER Start
    ================================================== -->
		<?php /*include'header.php'*/;?>
	
	
	<!-- MODAL Start
    	================================================== -->

		<?php/* include'user_login.php'*/;?>

	<!-- LOGO Start
    ================================================== -->
	
		<?php /*include'logo.php'*/;?>


	<!-- MENU Start
    ================================================== -->

		<?php include'customer_nav.php';?>


<!-- breadcrumb Start
    ================================================== -->

<?php

include 'config/db.php';

$err="";


      $query = mysqli_query($connection, "SELECT sum(amount) FROM payment WHERE customer_id='".$_SESSION['customer']."' AND transaction_id='".$_SESSION['transaction']."'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      	 $amount=$row["sum(amount)"];
		 


    }



      $query1 = mysqli_query($connection, "SELECT * FROM payment

      LEFT JOIN reservations on reservations.reservation_id = payment.reservation_id
      LEFT JOIN customers on customers.customer_id = payment.customer_id
      WHERE payment.customer_id='".$_SESSION['customer']."' AND payment.transaction_id='".$_SESSION['transaction']."'");
    
    while($row = mysqli_fetch_array($query1,MYSQLI_ASSOC)){


      $fname=$row["fsname"];
 		 $lname=$row["lname"];
 		 $oname=$row["oname"];
 		 $address=$row["address"];
		  $email=$row["email"];
		  $phone=$row["phone"];
		  $entry_date=$row["entry_date"];


    }


if(isset($_POST['pay'])){

     $otp =$_POST['otp'];


      $query = mysqli_query($connection, "SELECT * FROM payment WHERE customer_id='".$_SESSION['customer']."' AND transaction_id='".$_SESSION['transaction']."'  AND otp='$otp'");
    


        if (mysqli_num_rows($query) !=0 ) {

			  echo  "<script> alert( 'Payment Successfull!!!');  window.location='receipt.php'</script>";
			  # code...
			}else{


			   $err="<div class='alert  col-md-12 mt-3  alert-danger text-center'>Invalid OTP Code!!! </div>";
			  # code...
			}
			     
			
			     
			}
?>

<form action="" method="post">


<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 60px; margin-top: -10px;">
					<div class="card col-md-6  col-sm-offset-3" style="margin-bottom: 60px;">
						
						<div class="card-body ">


							<table  class="table  tb table-responsive-md table-bordered" style="border: 1px solid black; font-size: 13px;">
							<img src="images/pay.jpeg" class="" width="100" height="80" style="border-radius: 30px; margin-left: 190px;">
						<h2 align="center" style="font-size: 22px;"> <b>Electrical Appliance Manual Guide Ordering System</b></h2>
						<hr>
						<h6 align="center"> Tudun Wada, Kaduna</h6>
						<h6 align="center"> Kaduna Nigeria</h6>
						<p align="center"><i><u> Payment Confirmation Details</u><i></p>

						
					<tr>
						<td >Payment ID</td>
						<td><b>TRN-</b><?php echo $_SESSION['transaction']; ?></td>
					</tr>

					<tr>
						<td>Full Name</td>
						<td><?php echo $fname." ".$lname." ".$oname;?></td>
					</tr>

				  <table border="1" align="center" class="table table-responsive-md  table-bordered border-dark col-md-offset-0" style="border: 4px thin black; margin-top: -20px; margin-bottom: -5px; font-size: 13px">	
            <tr class="" style="background-color: ; border: 2px dotted gray;">
            <th>Items Ordered</th>
            <th>Price</th>
          </tr>
           <?php
        

               $query = mysqli_query($connection, " SELECT * FROM reservations 
               LEFT JOIN dishes on dishes.dish_id = reservations.dish_id WHERE  customer_id='".$_SESSION['customer']."' AND transaction_id='".$_SESSION['transaction']."'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                  ?>
           <tr style="background-color: ; border: 2px dotted gray;">
            <td><?php echo $row["fname"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
          </tr>
            <?php
          }
          ?>
          


<table  class="table  tb table-responsive-md table-bordered" style="border: 1px solid black; font-size: 13px">
					<tr>
						<td>Total Amount</td>
						<td class="pull-right"> <del ><b>N</b></del> <?php 
						 $query = mysqli_query($connection, "SELECT sum(amount) FROM payment WHERE customer_id='".$_SESSION['customer']."' AND transaction_id='".$_SESSION['transaction']."'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      	echo number_format( $amount=$row["sum(amount)"]);
		 


    }


						?></td>
					</tr>

					<tr>
						<td>Payment Date/Time</td>
						<td><?php echo $entry_date;?></td>
					</tr>

					<tr>
						<td>Mobile</td>
						<td><?php echo $phone;?></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><?php echo $email;?></td>
					</tr>

					<tr>
						<td>Remark</td>
						<td class="text-info" style="font-size: 11px;"> We will offer the Service for the purpose above</td>
					</tr>

				</table>
							  	
 
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