<?php
	include'database.php';
	include 'index.php';
	$id=$_GET['id'];
	$query=mysqli_query($mysqli, "SELECT * from Movies where ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updatemovie.php?id=<?php echo $id; ?>">
		<label>Title</label><br><input type="text" value="<?php echo $row['Title']; ?>" name="title"><br>
		<label>Release Year</label><br><input type="number" value="<?php echo $row['Year']; ?>" name="year"><br>
		<label>Runtime</label><br><input type="number" value="<?php echo $row['Runtime']; ?>" name="runtime"><br>
		<label for="watchStatus">Watch Status:</label><br>
		<select id="watchStatus" name="watchStatus", value="<?php echo $row['WatchStatus'];?>">
			<option value="completed">Completed</option>
			<option value="watching">Watching</option>
			<option value="abandoned">Abandoned</option>
			<option value="planToWatch">Plan to Watch</option><br>
		</select><br>
		<label>Age Restriction</label><br><input type="text" name="ageRestriction"><br>
		<label for="genre">Genre:</label><br>
		<input type="radio" id="genre1" name="genre" value="Romance">
			<label for="genre1">Romance</label><br>
		<input type="radio" id="genre2" name="genre" value="Comedy">
			<label for="genre2">Comedy</label><br>
		<input type="radio" id="genre3" name="genre" value="Horror">
			<label for="genre3">Horror</label><br>
		<label>Rating</label><br><input type="number" value="<?php echo $row['Rating']; ?>" name="rating"><br>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>
