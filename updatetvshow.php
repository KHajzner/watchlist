<?php
	include('database.php');
	$id=$_GET['id'];
	
	$title=addslashes($_POST['tvtitle']);
	$year=$_POST['tvyear'];
	$currentepisode=$_POST['tvcep'];
	$episodes=$_POST['tvallep'];
	$season=$_POST['tvseason'];
	$watchstatus=$_POST['tvwatchStatus'];
	$restriction=$_POST['tvageRestriction'];
	$genre=$_POST['tvgenre'];
	$rating=$_POST['tvrating'];
 
	mysqli_query($mysqli, "UPDATE TVShows SET Title='$title', StartYear='$year', Season='$season', CurrentEpisode='$currentepisode', Episodes='$episodes', WatchStatus='$watchstatus', Restrictions='$restriction', Genre='$genre', Rating='$rating' WHERE ID=$id");
	$mysqli->close();
	header('location:tvshows.php');
?>