<?php
	include('database.php');
	$id=$_GET['id'];
 
	$title=$_POST['title'];
	$year=$_POST['year'];
	$runtime=$_POST['runtime'];
	$watchstatus=$_POST['watchStatus'];
	$restriction=$_POST['ageRestriction'];
	$genre=$_POST['genre'];
	$rating=$_POST['rating'];
 
	mysqli_query($mysqli,"update Movies set Title='$title', Year='$year', Runtime='$runtime', WatchStatus='$watchstatus', Restriction='$restriction', Genre='$genre', rating='$rating' WHERE ID=$id");
	$mysqli->close();
	header('location:movies.php');
?>