<html>

<head>
<?php
include "index.php";

?>
    <title>Watch List</title>

</head>
<body>
	<h1 class="title is-1">Movie</h1>
    <div class="bar">
		<a href="movies.php" class="button">Go Back</a>
        <a href="newmovie.php" class="button">New Movie</a>
    </div>
    <div class="box">
        <div class="mainRow">
            <div class="column left">

				<h2 id="watching">Results</h2>
                <table style="width:100%" class="movies">
                    <tr>
                        <th style="width:40%">Title</th>
                        <th style="width:10%">Release Date</th>
                        <th style="width:10%">Runtime</th>
						<th style="width:10%">Genre</th>
                        <th style="width:10%">Restrictions</th>
                        <th style="width:10%">Rating</th>
						<th style="width:5%">Edit</th>
                        <th style="width:5%">Delete</th>
                    </tr>
					<tr><td colspan="8"><hr class="titleline"></td></tr>
				<?php
					include "database.php";
					
					if(isset($_GET['title']))
					{
						$filtervalues = addslashes($_GET["title"]);
						$query = "SELECT * FROM Movies WHERE Title LIKE '%$filtervalues%' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['year']))
					{
						$filtervalues = $_GET['year'];
						$time = $_GET['time'];
						switch($time){
							case "after":
								$query = "SELECT * FROM Movies WHERE Year>'$filtervalues'  ORDER BY Year, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "before":
								$query = "SELECT * FROM Movies WHERE Year<'$filtervalues' ORDER BY Year, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "during":
								$query = "SELECT * FROM Movies WHERE Year='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					elseif(isset($_GET['runtime']))
					{
						$filtervalues = $_GET['runtime'];
						$long= $_GET['long'];
						switch($long){
							case "longer":
								$query = "SELECT * FROM Movies WHERE Runtime>'$filtervalues'  ORDER BY Runtime, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "shorter":
								$query = "SELECT * FROM Movies WHERE Runtime<'$filtervalues' ORDER BY Runtime, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "exact":
								$query = "SELECT * FROM Movies WHERE Runtime='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					elseif(isset($_GET['watchStatus']))
					{
						$filtervalues = $_GET['watchStatus'];
						$query = "SELECT * FROM Movies WHERE WatchStatus='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['ageRestriction']))
					{
						$filtervalues = $_GET['ageRestriction'];
						$query = "SELECT * FROM Movies WHERE Restrictions='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['genre']))
					{
						$filtervalues = $_GET['genre'];
						$query = "SELECT * FROM Movies WHERE Genre='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['rating']))
					{
						$filtervalues = $_GET['rating'];
						$qual= $_GET['qual'];
						switch($qual){
							case "better":
								$query = "SELECT * FROM Movies WHERE Rating>'$filtervalues' ORDER BY Rating, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "worse":
								$query = "SELECT * FROM Movies WHERE Rating<'$filtervalues' ORDER BY Rating,Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "exact":
								$query = "SELECT * FROM Movies WHERE Rating='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					function display($results){
						if (mysqli_num_rows($results)>0)
						{
							foreach($results as $movies)
							{
								?>

								 <tr>
									<td><?= $movies['Title'];?></td>
									<td><?= $movies['Year'];?></td>
									<td><?= $movies['Runtime'];?></td>
									<td><?= $movies['Genre'];?></td>
									<td><?= $movies['Restriction'];?></td>
									<td><?= $movies['Rating'];?></td>
									<td><a href="editmovie.php?id=<?php echo $movies['ID']; ?>">Edit</a></td>
									<td><a href="deletemovie.php?id=<?php echo $movies['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
								</tr>
													<tr><td colspan="8"><hr class="entryline"></td></tr>
								<?php
							}
						}
						else{
							?>
							<tr>
								<td colspan="8"> No Records Found</td>
							</tr><?php
						}
					}

				$mysqli->close();
				?>
                </table>
            </div>
	<div class="column right">
                <h2>Filter By</h2>

			<form action="filtermovie.php" method="GET">
				<label for="title">Title:</label><br>
				<input type="text" name="title" required value="<?php if(isset($_GET['title'])){echo $_GET['title'];}?>" placeholder="Movie Title">
				<button type="submit">Search</button><br>
			</form>
			
			<form action="filtermovie.php" method="GET">
					<label for="year">Release Year:</label><br>
				<input type="number" name="year" required value="<?php if(isset($_GET['year'])){echo $_GET['year'];}?>" placeholder="Release Year">
				<button type="submit">Search</button><br>
				</form>
				
			<form action="filtermovie.php" method="GET">
				<label for="runtime">Runtime (in minutes):</label><br>
				<input type="number" name="runtime" required value="<?php if(isset($_GET['runtime'])){echo $_GET['runtime'];}?>" placeholder="Runtime"><br>
				<input type="radio" name="long" value="longer" required>
					<label for="genre1">Longer</label><br>
				<input type="radio" name="long" value="shorter">
					<label for="genre2">Shorter</label><br>
				<input type="radio" name="long" value="exact">
					<label for="genre3">Exact</label><br>
				<button type="submit">Search</button><br>
				</form>
				
				
			<form action="filtermovie.php" method="GET">
				<label for="watchStatus">Watch Status:</label><br>
				<select id="watchStatus" name="watchStatus">
					<option value="completed">Completed</option>
					<option value="watching">Watching</option>
					<option value="abandoned">Abandoned</option>
					<option value="planToWatch">Plan to Watch</option><br>
							</select>
					<button type="submit">Search</button><br>
			</form>
			
			<form action="filtermovie.php" method="GET">
				<label for="ageRestriction">Age Restriction:</label><br>
				<input type="text" name="ageRestriction" required value="<?php if(isset($_GET['ageRestriction'])){echo $_GET['ageRestriction'];}?>" placeholder="Age Restrictions">
				<button type="submit">Search</button><br>
			</form>
				
			<form action="filtermovie.php" method="GET">
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
				<button type="submit">Search</button><br>
				</form>
				
			<form action="filtermovie.php" method="GET">
				<label for="rating">Rating:</label><br>
				<input type="number" name="rating" min="0" max="10" required value="<?php if(isset($_GET['rating'])){echo $_GET['rating'];}?>" placeholder="Rating"><br>
				<input type="radio" name="qual" value="better" required>
					<label for="genre1">Better</label><br>
				<input type="radio" name="qual" value="worse">
					<label for="genre2">Worse</label><br>
				<input type="radio" name="qual" value="exact">
					<label for="genre3">Exact</label><br>
				<button type="submit">Search</button><br>
			</form>


				</div>
			</div>
			
		</div>

	</body>
</html>