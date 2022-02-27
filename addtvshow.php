<?php
include "database.php";
include "newtvshow.php";

$newTitle = addslashes($_GET["tvtitle"]);
$newYear = $_GET["tvyear"];
$newCEP = $_GET["tvcep"];
$newAllEP = $_GET["tvallep"];
$newSeason = $_GET["tvseason"];
$newWatchStatus = $_GET["tvwatchStatus"];
$newRestriction = $_GET["tvageRestriction"];
$newGenre = $_GET["tvgenre"];
$newRating = $_GET["tvrating"];

$sql = "INSERT INTO TVShows VALUES (NULL, '$newTitle', '$newYear', '$newSeason', '$newCEP', '$newAllEP', '$newWatchStatus', '$newRestriction', '$newGenre', '$newRating')";
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
header('location:tvshows.php');
?>