<?php
	include('database.php');
	$id=$_GET['id'];
 
	mysqli_query($mysqli,"DELETE FROM Movies WHERE ID=$id");
	$mysqli->close();
	header('location:movies.php');
?>