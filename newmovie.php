<html>
<head>
<title>Add New Movie</title>
</head>
<body>
<?php
include "index.php";
?>
<h3>Add New Movie</h3>
<div class="square" id="form">
	<form action="addmovie.php">
  <label for="title" class="formlabel">Title</label><br>
	<input type="text" id="title" required name="title"><br>
  <label for="year" class="formlabel">Release Year</label><br>
	<input type="number" id="year" name="year"><br>
  <label for="runtime" class="formlabel">Runtime</label><br>
	<input type="number" id="runtime" name="runtime"><br>
  <label for="watchStatus" class="formlabel">Watch Status</label><br>
	<select id="watchStatus" name="watchStatus">
		<option value="completed">Completed</option>
		<option value="watching">Watching</option>
		<option value="abandoned">Abandoned</option>
		<option value="planToWatch">Plan to Watch</option>
		</select><br>
  <label for="ageRestriction" class="formlabel">Age Restriction</label><br>
	<select id="ageRestriction" name="ageRestriction">
		<option value="G">G</option>
		<option value="PG">PG</option>
		<option value="PG-13">PG-13</option>
		<option value="R">R</option>
		<option value="NC-17">NC-17</option>
		</select><br>
	<label for="genre" class="formlabel">Genre</label><br>
	<div class="choice"> 
				<input type="radio" id="Romance" name="genre" value="Romance" required>
					<label for="Romance">Romance</label>
				<input type="radio" id="Comedy" name="genre" value="Comedy">
					<label for="Comedy">Comedy</label>
				<input type="radio" id="Horror" name="genre" value="Horror">
					<label for="Horror">Horror</label>
				<input type="radio" id="Action" name="genre" value="Action">
					<label for="Action">Action</label><br>
				<input type="radio" id="Thriller" name="genre" value="Thriller">
					<label for="Thriller">Thriller</label>
				<input type="radio" id="Animated" name="genre" value="Animated">
					<label for="Animated">Animated</label>
				<input type="radio" id="Fantasy" name="genre" value="Fantasy">
					<label for="Fantasy">Fantasy</label>
				<input type="radio" id="Mystery" name="genre" value="Mystery">
					<label for="Mystery">Mystery</label><br>
				<input type="radio" id="Documentary" name="genre" value="Documentary">
					<label for="Documentary">Documentary</label>
				<input type="radio" id="Sci-Fi" name="genre" value="Sci-Fi">
					<label for="Sci-Fi">Sci-Fi</label>
				<input type="radio" id="Drama" name="genre" value="Drama">
					<label for="Drama">Drama</label>
				<input type="radio" id="Musical" name="genre" value="Musical">
					<label for="Musical">Musical</label><br>
					</div>
  <label for="rating" class="formlabel">Rating</label><br>
<input type="number" id="rating" min="0" max="10" name="rating"><br>
  <input type="submit" value="Submit">&nbsp;		
  <a class="second" href="movies.php">Back</a>
</form>

</div>
<div id="footer">
    <footer>
        <small> © 2022 • Kalina Hajzner</small>
    </footer>
</div>

</body>
</html>