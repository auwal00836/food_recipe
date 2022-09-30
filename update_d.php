<?php
 //session_start();
 
 include'config/db.php';
$dish=$_GET['dish_id'];
if (isset($_POST['update_dish'])) {
move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);      
$file=$_FILES["file"]["name"];

move_uploaded_file($_FILES["vfile"]["tmp_name"],"uploads/videos/" . $_FILES["vfile"]["name"]);      
$vfile=$_FILES["vfile"]["name"];

$fname=$_POST['fname'];
$price=$_POST['price'];
$ingredient1=$_POST['ingredient1'];


$sql = mysqli_query($connection,"UPDATE dishes SET fname='$fname', price='$price', ingredient1='$ingredient1',food_picture='$location', file='$file', vfile='vfile' WHERE dish_id= '$dish' ");  
 
echo "<script>alert('Recipe Successfully Updated!!!'); window.location='chef_dishes_list.php'</script>";
 
 
}
?>
