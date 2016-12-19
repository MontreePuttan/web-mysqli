<?php require 'connect.php'; ?>

<?php

//$id = $_GET['id'];

$id = implode(",",$_POST['id']);


$sql = "delete from member where id in($id)";
$result = mysqli_query($con,$sql);

if($result){
	echo "delete Complete";
	echo "<br><a href='show.php'>View data</a>";
}else{
	echo "Can not Delete";
}

?>