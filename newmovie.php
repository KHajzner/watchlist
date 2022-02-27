<html>
<head>
</head>
<body>
<?php
include "index.php";
?>
<form action="addmovie.php">
  <label for="title">Title:</label><br>
	<input type="text" id="title" required name="title"><br>
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
				<input type="radio" id="Romance" name="genre" value="Romance" required>
					<label for="Romance">Romance</label><br>
				<input type="radio" id="Comedy" name="genre" value="Comedy">
					<label for="Comedy">Comedy</label><br>
				<input type="radio" id="Horror" name="genre" value="Horror">
					<label for="Horror">Horror</label><br>
				<input type="radio" id="Action" name="genre" value="Action">
					<label for="Action">Action</label><br>
				<input type="radio" id="Thriller" name="genre" value="Thriller">
					<label for="Thriller">Thriller</label><br>
				<input type="radio" id="Drama" name="genre" value="Drama">
					<label for="Drama">Drama</label><br>
				<input type="radio" id="Fantasy" name="genre" value="Fantasy">
					<label for="Fantasy">Fantasy</label><br>
				<input type="radio" id="Mystery" name="genre" value="Mystery">
					<label for="Mystery">Mystery</label><br>
				<input type="radio" id="Documentary" name="genre" value="Documentary">
					<label for="Documentary">Documentary</label><br>
				<input type="radio" id="Sci-Fi" name="genre" value="Sci-Fi">
					<label for="Sci-Fi">Sci-Fi</label><br>
  <label for="rating">Rating:</label><br>
<input type="number" id="rating" min="0" max="10" name="rating"><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>