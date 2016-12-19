<?php require 'connect.php'; ?>

<?php

//$name = $_GET['name'];

$name = "Thai";

$sql = "insert into member(name) values('$name')";
$result = mysqli_query($con,$sql);

if($result){
	echo "insert Complete";
	echo "<br><a href='show.php'>View data</a>";
}else{
	echo "Can not Insert";
}
?>