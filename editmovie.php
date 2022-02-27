<?php
	include'database.php';
	include 'index.php';
	$id=$_GET['id'];
	$query=mysqli_query($mysqli, "SELECT * from Movies where ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<html>
<head>
<title>Edit Movie</title>
</head>
<body>
<h3>Edit Movie</h3>
<div class="square" id="form">
	<form method="POST" action="updatemovie.php?id=<?php echo $id; ?>">
		<label class="formlabel">Title</label><br><input type="text" required value="<?php echo $row['Title']; ?>" name="title"><br>
		<label class="formlabel">Release Year</label><br><input type="number" value="<?php echo $row['Year']; ?>" name="year"><br>
		<label class="formlabel">Runtime</label><br><input type="number" value="<?php echo $row['Runtime']; ?>" name="runtime"><br>
		<label for="watchStatus" class="formlabel">Watch Status:</label><br>
		<select id="watchStatus" name="watchStatus">
			<option value="completed">Completed</option>
			<option value="watching">Watching</option>
			<option value="abandoned">Abandoned</option>
			<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
		<label class="formlabel">Age Restriction</label><br><input type="text" name="ageRestriction"value="<?php echo $row['Restriction']; ?>"><br>
					<label for="genre" class="formlabel">Genre:</label><br>
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
		<label class="formlabel">Rating</label><br><input min="0" max="10"  type="number" value="<?php echo $row['Rating']; ?>" name="rating"><br>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
	</div>
</body>
</html>
