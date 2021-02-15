<?php
include('config.php');
?>
<?php
$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";
if(mysqli_query($conn,$sql))
{
	header('Location:http://localhost/details.php');
}
else
{
	echo"deletion failed....";
}
?>
