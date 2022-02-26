<html>
<head>
</head>
<body>
<?php
include "index.php";
?>
<form action="addmovie.php">
  <label for="title">Title:</label><br>
	<input type="text" id="title" name="title"><br>
  <label for="year">Release Year:</label><br>
	<input type="number" id="year" name="year"><br>
  <label for="runtime">Runtime:</label><br>
	<input type="number" id="runtime" name="runtime"><br>
  <label for="watchStatus">Watch Status:</label><br>
	<select id="watchStatus" name="watchStatus">
		<option value="completed">Completed</option>
		<option value="watching">Watching</option>
		<option value="abandoned">Abandoned</option>
		<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
  <label for="ageRestriction">Age Restriction:</label><br>
	<input type="text" id="ageRestriction" name="ageRestriction"><br>
  <label for="genre">Genre:</label><br>
	<input type="radio" id="genre1" name="genre" value="Romance">
  <label for="genre1">Romance</label><br>
	<input type="radio" id="genre2" name="genre" value="Comedy">
  <label for="genre2">Comedy</label><br>
	<input type="radio" id="genre3" name="genre" value="Horror">
  <label for="genre3">Horror</label><br>
  <label for="rating">Rating:</label><br>
<input type="number" id="rating" name="rating"><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>