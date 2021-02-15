<?php
include('config.php');
?>
<?php
$id=$_GET['id'];
$sql= "SELECT * FROM `users` WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$username=$row['Username'];
$email=$row['Email'];
$gender=$row['Gender'];
$city=$row['City'];
?>
<?php
if(isset($_POST['update'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
$sql="UPDATE `users` SET Username='$username', Email='$email',Gender='$gender',City='$city' WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
	echo"Successfully updated..";
	header('Location:http://localhost/details.php');
}
else{
	echo"Not updated..";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update information</title>
</head>
<body>
	<form method="POST" action="edit.php?id=<?php echo "$id"?>">
	USERNAME<input type="text" name="username" value="<?php echo "$username"?>"><br>
	EMAIL<input type="email" name="email" value="<?php echo "$email"?>"><br>
	GENDER <br> MALE<input type="radio" name="gender" <?php echo($gender=='male')?'checked':''?> value="male">
	FEMALE<input type="radio" name="gender" <?php echo($gender=='female')?'checked':''?> value="female"><br>
	SELECT CITY<select name="city">
		<option value="Dehradun" <?php if($city=="Dehradun"){ echo "selected";}?>>Dehradun</option>
		<option value="Delhi" <?php if($city=="Delhi"){ echo "selected";}?>>Delhi</option>
		<option value="Jaipur" <?php if($city=="Jaipur"){ echo "selected";}?>>Jaipur</option>
		<option value="Lucknow" <?php if($city=="Lucknow"){ echo "selected";}?>>Lucknow</option>
		<option value="Varanasi" <?php if($city=="Varanasi"){ echo "selected";}?>>Varanasi</option>
		<option value="Bhopal"<?php if($city=="Bhopal"){ echo "selected";}?>>Bhopal</option>
		<option value="Chennai"<?php if($city=="Chennai"){ echo "selected";}?>>Chennai</option>
		<option value="Sikkim" <?php if($city=="Sikkim"){ echo "selected";}?>>Sikkim</option>
		<option value="Allahbad" <?php if($city=="Allahbad"){ echo "selected";}?>>Allahbad</option>
		<option value="Chandigarh" <?php if($city=="Chandigarh"){ echo "selected";}?>>Chandigarh</option>
	</select><br>
	<input type="submit" name="update" value="Update">
	
</form>
</body>
</html>
