<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($mysqli, "SELECT CurrentEpisode, Episodes from TVShows where ID='$id'");
	$row=mysqli_fetch_array($query);
	if($row['CurrentEpisode']<$row['Episodes']){
		$sql =  "UPDATE TVShows SET CurrentEpisode=CurrentEpisode+1 WHERE ID=$id";
		$result = $mysqli->query($sql);
		}
	$mysqli->close();
	header('location:tvshows.php');
?>