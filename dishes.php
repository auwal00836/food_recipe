<?php
 session_start();
 
 include'config/db.php';
$chef= $_SESSION['chef'];
if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);      
$file=$_FILES["file"]["name"];

move_uploaded_file($_FILES["vfile"]["tmp_name"],"uploads/videos/" . $_FILES["vfile"]["name"]);      
$vfile=$_FILES["vfile"]["name"];

$fname=$_POST['fname'];
$price=$_POST['price'];
$ingredient1=$_POST['ingredient1'];
//$ingredient2=$_POST['ingredient2'];

$sql = mysqli_query($connection,"INSERT INTO dishes (fname,price,food_picture,ingredient1,chef_id,file,vfile) VALUES('$fname','$price','$location','$ingredient1','$chef','$file','$vfile')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='add_dishes.php'</script>";
 
 
}
?>
