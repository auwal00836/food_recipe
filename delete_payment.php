<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM payment  WHERE payment_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='manage_reservations.php'</script>";

?>