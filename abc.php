<?php
include('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `users` (`Username`, `Email`, `Gender`, `City`) VALUES ('$username', '$email', '$gender', '$city')";
    $sql1="INSERT INTO `student details`(`Username`,`Branch`,`Year`)VALUES('$username','$branch','$year')";
    mysqli_query($conn, $sql);
    mysqli_query($conn,$sql1);
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
	<form method="POST" action="abc.php">
	USERNAME<input type="text" name="username"  required><br>
	EMAIL<input type="email" name="email" required><br>
	GENDER<input type="radio" id="Male" name="gender" value="Male">
	<label for="Male">Male</label>
	<input type="radio"  id-="Female" name="gender" value="Female" checked>
	<label for="Female">Female</label><br>
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
	BRANCH<input type="text" name="branch" required><br>
	YEAR<input type="text" name="year" required><br>
	
	<input type="submit" name="submit" value="submit">
	
</form>
</body>
</html>