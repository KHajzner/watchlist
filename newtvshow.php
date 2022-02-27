<?php
include "index.php";
?>

<html>
<head>
<title>Add New TV Show</title>
</head>
<body>
<h3>Add New TV Show</h3>
<div class="square" id="form">
<form action="addtvshow.php">
  <label for="tvtitle" class="formlabel">Title</label><br>
	<input type="text" id="tvtitle" name="tvtitle"><br>
  <label for="tvyear" class="formlabel">Year</label><br>
	<input type="number" id="tvyear" name="tvyear"><br>
	<label for="tvcep" class="formlabel">Current Episode</label><br>
	<input type="number" id="tvcep" name="tvcep"><br>
  <label for="tvallep" class="formlabel">All Episodes</label><br>
	<input type="number" id="tvallep" name="tvallep"><br>
	  <label for="tvseason" class="formlabel">Season:</label><br>
	<input type="number" id="tvseason" name="tvseason"><br>
  <label for="tvwatchStatus" class="formlabel">Watch Status</label><br>
	<select id="tvwatchStatus" name="tvwatchStatus">
		<option value="completed">Completed</option>
		<option value="watching">Watching</option>
		<option value="abandoned">Abandoned</option>
		<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
  <label for="tvageRestriction" class="formlabel">Age Restriction:</label><br>
	<input type="text" id="tvageRestriction" name="tvageRestriction"><br>
		<label for="tvgenre" class="formlabel">Genre:</label><br>
			<div class="choice"> 
				<input type="radio" id="Romance" name="tvgenre" value="Romance" required>
					<label for="Romance">Romance</label>
				<input type="radio" id="Comedy" name="tvgenre" value="Comedy">
					<label for="Comedy">Comedy</label>
				<input type="radio" id="Horror" name="tvgenre" value="Horror">
					<label for="Horror">Horror</label>
				<input type="radio" id="Action" name="tvgenre" value="Action">
					<label for="Action">Action</label><br>
				<input type="radio" id="Thriller" name="tvgenre" value="Thriller">
					<label for="Thriller">Thriller</label>
								<input type="radio" id="Animated" name="tvgenre" value="Animated">
					<label for="Animated">Animated</label>
				<input type="radio" id="Fantasy" name="tvgenre" value="Fantasy">
					<label for="Fantasy">Fantasy</label>
				<input type="radio" id="Mystery" name="tvgenre" value="Mystery">
					<label for="Mystery">Mystery</label><br>
				<input type="radio" id="Documentary" name="tvgenre" value="Documentary">
					<label for="Documentary">Documentary</label>
				<input type="radio" id="Sci-Fi" name="tvgenre" value="Sci-Fi">
					<label for="Sci-Fi">Sci-Fi</label>
				<input type="radio" id="Drama" name="tvgenre" value="Drama">
					<label for="Drama">Drama</label>
				<input type="radio" id="Musical" name="tvgenre" value="Musical">
					<label for="Musical">Musical</label><br>
					</div>
  <label for="tvrating" class="formlabel">Rating</label><br>
<input type="number" id="tvrating" min="0" max="10" name="tvrating"><br>
  <input type="submit" value="Submit">
  
</form>

</div>
</body>
</html>