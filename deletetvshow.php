<?php
	include('database.php');
	$id=$_GET['id'];
 
	mysqli_query($mysqli,"DELETE FROM TVShows WHERE ID=$id");
	$mysqli->close();
	header('location:tvshows.php');
?>