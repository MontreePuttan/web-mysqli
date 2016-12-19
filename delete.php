<?php require 'connect.php'; ?>

<?php

//$id = $_GET['id'];

$id = '8';

$sql = "delete from member where id='$id'";
$result = mysqli_query($con,$sql);

if($result){
	echo "delete Complete";
	echo "<br><a href='show.php'>View data</a>";
}else{
	echo "Can not Delete";
}
?>