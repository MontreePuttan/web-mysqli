<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<script type="text/javascript">
	function checkAll(){
		lang = document.forms[0].length;
		for(i=0;i<lang-1;i++){
			document.forms[0].elements[i].checked=true;
		}
	}

	function uncheckAll(){
		lang = document.forms[0].length;
		for(i=0;i<lang-1;i++){
			document.forms[0].elements[i].checked=false;
		}
	}
	
	</script>

</head>
<body>
	<?php  
	$sql = "select * from member";
	$result = mysqli_query($con,$sql);
	?>

	<h4>mysqli fetch row</h4>
	<?php  
	$row = mysqli_fetch_row($result);
	echo "id : ".$row[0]."<br>";
	echo "Name : ".$row[1]."<br>";
	?>
<hr>
	<h4>mysqli fetch Assoc</h4>
	<?php  
	$row = mysqli_fetch_assoc($result);
	echo "id : ".$row['id']."<br>";
	echo "Name : ".$row['name']."<br>";
	?>
<hr>



<form action="deleteQueryString.php" method="post">
<table border="1">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Action 1</td>
		<td>Action 2</td>
	</tr>
	<?php  
	while ($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><a href="delete.php?id<?php echo $row['id']; ?>">Delete</a></td>
		<td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"></td>
	</tr>
	<?php } ?>
</table>
	<br>
	<input type="submit" value="Delete">
</form>
<button onclick="checkAll()">Check All</button>
<button onclick="uncheckAll()">UnCheck All</button>
</body>
</html>