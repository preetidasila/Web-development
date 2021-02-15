<?php
include('config.php');
?>
<?php
$sql="SELECT * FROM `users`";
$result=mysqli_query($conn,$sql);
if($result->num_rows >0)
{
	?>
	<html>
<head>
	<title>Data table</title>
</head>
<body>
	<table border="1px">
	<thead>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Email</th>
		<th>Gender</th>
		<th>City</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
	<?php
	while($row = $result->fetch_assoc())
	{
		?>
		<tr>
			<td><?php echo $row['id']?></td>
		<td><?php echo $row['Username']?></td>
		<td><?php echo $row['Email']?></td>`
		<td><?php echo $row['Gender']?></td>
		<td><?php echo $row['City']?></td>
		<td><a href="edit.php?id=<?php echo $row['id']?>"><input type="button" value="Edit"></a></td>
		<td><a href="delete.php?id=<?php echo $row['id']?>"><input type="button" onclick="return remove()" value = "Delete"></a></td>
	</tr>

	<?php }
	?>
</tbody>
</table>
<?php
}
?>
<script type="text/javascript">
		function remove()
		{
			if(confirm("Do you want to delete this record permanently?"))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	</script>

</body>
</html>
