<?php
include "database.php";
include "newmovie.php";

$newTitle = $_GET["title"];
$newYear = $_GET["year"];
$newRuntime = $_GET["runtime"];
$newWatchStatus = $_GET["watchStatus"];
$newRestriction = $_GET["ageRestriction"];
$newGenre = $_GET["genre"];

$newRating = $_GET["rating"];

$sql = "INSERT INTO Movies (ID, Title, Year, Runtime, WatchStatus, Restriction, Genre, Rating) VALUES (NULL, '$newTitle', '$newYear', '$newRuntime', '$newWatchStatus', '$newRestriction', '$newGenre', '$newRating')";
$result = $mysqli->query($sql);
$mysqli->close();
header('location:movies.php');
?>