<!DOCTYPE html>
<html>
<head>
	<title>addition</title>
</head>
<body>
	<form method="POST" action="addition.php">
	Variable1<input type="text" name="v1" ><br>
	Variable2<input type="text" name="v2" ><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		if(empty($_POST['v1'])|| empty($_POST['v2']))
		{
			echo "Enter values first";
		}
		else
		{
			$sum=$_POST['v1']+$_POST['v2'];
			echo" SUM=$sum";
		}
	}
	else
	{
		echo"NO input ";
	}
?>
