<?php
	include'database.php';
	include 'index.php';
	$id=$_GET['id'];
	$query=mysqli_query($mysqli, "SELECT * from TVShows where ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<html>
<head>
<title>Edit TV Show</title>
</head>
<body>
<h3>Edit TV Show</h3>
<div class="square" id="form">
	<form method="POST" action="updatetvshow.php?id=<?php echo $id; ?>">
		<label class="formlabel">Title</label><br><input type="text" value="<?php echo $row['Title']; ?>" name="tvtitle"><br>
		<label class="formlabel">Year</label><br><input type="number" value="<?php echo $row['StartYear']; ?>" name="tvyear"><br>
		<label class="formlabel">Current Episode</label><br><input type="number" value="<?php echo $row['CurrentEpisode']; ?>" name="tvcep"><br>
		<label class="formlabel">Episodes</label><br><input type="number" value="<?php echo $row['Episodes']; ?>" name="tvallep"><br>
		<label class="formlabel">Season</label><br><input type="number" value="<?php echo $row['Season']; ?>" name="tvseason"><br>
		<label for="watchStatus" class="formlabel">Watch Status</label><br>
		<select id="watchStatus" name="tvwatchStatus">
			<option value="completed">Completed</option>
			<option value="watching">Watching</option>
			<option value="abandoned">Abandoned</option>
			<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
		<label class="formlabel">Age Restriction</label><br><input type="text" name="tvageRestriction"value="<?php echo $row['Restrictions']; ?>"><br>
					<label for="genre" class="formlabel">Genre:</label><br>
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
					<br>
		<label class="formlabel">Rating</label><br><input type="number" min="0" max="10" value="<?php echo $row['Rating']; ?>" name="tvrating"><br>
		<input type="submit" name="submit">&nbsp;
		<a class="second" href="tvshows.php">Back</a>
	</form>
	</div>
	<div id="footer">
    <footer>
        <small> © 2022 • Kalina Hajzner</small>
    </footer>
</div>

</body>
</html>
