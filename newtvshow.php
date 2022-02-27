<html>
<head>
</head>
<body>
<?php
include "index.php";
?>
<form action="addtvshow.php">
  <label for="tvtitle">Title:</label><br>
	<input type="text" id="tvtitle" name="tvtitle"><br>
  <label for="tvyear">Year:</label><br>
	<input type="number" id="tvyear" name="tvyear"><br>
	<label for="tvcep">Current Episode:</label><br>
	<input type="number" id="tvcep" name="tvcep"><br>
  <label for="tvallep">All Episodes:</label><br>
	<input type="number" id="tvallep" name="tvallep"><br>
	  <label for="tvseason">Season:</label><br>
	<input type="number" id="tvseason" name="tvseason"><br>
  <label for="tvwatchStatus">Watch Status:</label><br>
	<select id="tvwatchStatus" name="tvwatchStatus">
		<option value="completed">Completed</option>
		<option value="watching">Watching</option>
		<option value="abandoned">Abandoned</option>
		<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
  <label for="tvageRestriction">Age Restriction:</label><br>
	<input type="text" id="tvageRestriction" name="tvageRestriction"><br>
				<label for="genre">Genre:</label><br>
				<input type="radio" id="Romance" name="tvgenre" value="Romance" required>
					<label for="Romance">Romance</label><br>
				<input type="radio" id="Comedy" name="tvgenre" value="Comedy">
					<label for="Comedy">Comedy</label><br>
				<input type="radio" id="Horror" name="tvgenre" value="Horror">
					<label for="Horror">Horror</label><br>
				<input type="radio" id="Action" name="tvgenre" value="Action">
					<label for="Action">Action</label><br>
				<input type="radio" id="Thriller" name="tvgenre" value="Thriller">
					<label for="Thriller">Thriller</label><br>
				<input type="radio" id="Drama" name="tvgenre" value="Drama">
					<label for="Drama">Drama</label><br>
				<input type="radio" id="Fantasy" name="tvgenre" value="Fantasy">
					<label for="Fantasy">Fantasy</label><br>
				<input type="radio" id="Mystery" name="tvgenre" value="Mystery">
					<label for="Mystery">Mystery</label><br>
				<input type="radio" id="Documentary" name="tvgenre" value="Documentary">
					<label for="Documentary">Documentary</label><br>
				<input type="radio" id="Sci-Fi" name="tvgenre" value="Sci-Fi">
					<label for="Sci-Fi">Sci-Fi</label><br>
  <label for="tvrating">Rating:</label><br>
<input type="number" id="tvrating" min="0" max="10" name="tvrating"><br>
  <input type="submit" value="Submit">
  
</form>
</body>
</html>