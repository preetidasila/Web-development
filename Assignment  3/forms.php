<?php
include('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $sql = "INSERT INTO `users` (`Username`, `Email`, `Gender`, `City`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<form method="POST" action="forms.php">
	USERNAME<input type="text" name="username"  required><br>
	EMAIL<input type="email" name="email" required><br>
	GENDER  Male<input type="radio"  name="gender" value="male">
	Female<input type="radio"  name="gender" value="female" >
	<br>
	SELECT CITY<select name="city">
		<option value="Dehradun">Dehradun</option>
		<option value="Delhi">Delhi</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Lucknow" >Lucknow</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Bhopal">Bhopal</option>
		<option value="Chennai">Chennai</option>
		<option value="Sikkim" >Sikkim</option>
		<option value="Allahbad">Allahbad</option>
		<option value="Chandigarh">Chandigarh</option>
	</select><br>
	<input type="submit" name="submit" value="submit">
	
</form>
</body>
</html>
