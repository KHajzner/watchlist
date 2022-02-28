<html>

<head>
<?php
include "index.php";

?>
    <title>Watch List</title>
</head>

<body>

	<h1 class="title is-1">TV Shows</h1>
    <div class="bar">
		<a href="tvshows.php" class="button">Go Back</a>
        <a href="newtvshow.php" class="button">New TV Show</a>
    </div>
    <div class="box">
        <div class="mainRow">
            <div class="column left">

				<h2 id="watching">Results</h2>
                <table style="width:100%" class="tvshows">
                    <tr>
                        <th style="width:40%">Title</th>
                        <th style="width:10%">Release Year</th>
                        <th style="width:8%">Episodes</th>
						<th style="width:8%">Season</th>
						<th style="width:7%">Genre</th>
                        <th style="width:10%">Restrictions</th>
                        <th style="width:6%">Rating</th>
						<th style="width:5%">Edit</th>
                        <th style="width:5%">Delete</th>
                    </tr>
					<tr><td colspan="9"><hr class="titleline"></td></tr>

				<?php
					include "database.php";
					
					if(isset($_GET['title']))
					{
						$filtervalues = addslashes($_GET["title"]);
						$query = "SELECT * FROM TVShows WHERE Title LIKE '%$filtervalues%' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['year']))
					{
						$filtervalues = $_GET['year'];
						$time = $_GET['time'];
						switch($time){
							case "after":
								$query = "SELECT * FROM TVShows WHERE StartYear>'$filtervalues'  ORDER BY StartYear, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "before":
								$query = "SELECT * FROM TVShows WHERE StartYear<'$filtervalues' ORDER BY StartYear, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "during":
								$query = "SELECT * FROM TVShows WHERE StartYear='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					elseif(isset($_GET['allep']))
					{
						$filtervalues = $_GET['allep'];
						$long= $_GET['long'];
						switch($long){
							case "longer":
								$query = "SELECT * FROM TVShows WHERE Episodes>'$filtervalues'  ORDER BY Episodes, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "shorter":
								$query = "SELECT * FROM TVShows WHERE Episodes<'$filtervalues' ORDER BY Episodes, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "exact":
								$query = "SELECT * FROM TVShows WHERE Episodes='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					
					elseif(isset($_GET['season']))
					{
						$filtervalues = $_GET['season'];
						$query = "SELECT * FROM TVShows WHERE Season='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['watchStatus']))
					{
						$filtervalues = $_GET['watchStatus'];
						$query = "SELECT * FROM TVShows WHERE WatchStatus='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['ageRestriction']))
					{
						$filtervalues = $_GET['ageRestriction'];
						$query = "SELECT * FROM TVShows WHERE Restrictions='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['genre']))
					{
						$filtervalues = $_GET['genre'];
						$query = "SELECT * FROM TVShows WHERE Genre='$filtervalues' ORDER BY Title ASC";
						$results = mysqli_query($mysqli, $query);
						display($results);
						
					}
					elseif(isset($_GET['rating']))
					{
						$filtervalues = $_GET['rating'];
						$qual= $_GET['qual'];
						switch($qual){
							case "better":
								$query = "SELECT * FROM TVShows WHERE Rating>'$filtervalues' ORDER BY Rating, Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "worse":
								$query = "SELECT * FROM TVShows WHERE Rating<'$filtervalues' ORDER BY Rating,Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
							case "exact":
								$query = "SELECT * FROM TVShows WHERE Rating='$filtervalues' ORDER BY Title ASC";
								$results = mysqli_query($mysqli, $query);
								display($results);
								break;
						}
					}
					function display($results){
						if (mysqli_num_rows($results)>0)
						{
							foreach($results as $tvshows)
							{
								?>

								 <tr>
									<td><?= $tvshows['Title'];?></td>
									<td><?= $tvshows['StartYear'];?></td>
									<td><?= $tvshows['CurrentEpisode'];?>/<?= $tvshows['Episodes'];?></td>
									<td><?= $tvshows['Season'];?></td>
									<td><?= $tvshows['Genre'];?></td>
									<td><?= $tvshows['Restrictions'];?></td>
									<td><?= $tvshows['Rating'];?></td>
									<td><a href="edittvshow.php?id=<?php echo $tvshows['ID']; ?>">Edit</a></td>
									<td><a href="deletetvshow.php?id=<?php echo $tvshows['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
								</tr>
													<tr><td colspan="9"><hr class="entryline"></td></tr>
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

							<div class="filter">
			<form action="filtertvshow.php" method="GET">
				<label for="title" class="formlabel">Title</label><br>
				<input type="text" name="title" required value="<?php if(isset($_GET['title'])){echo $_GET['title'];}?>" placeholder="TV Show Title">&nbsp;
				<button type="submit">Search</button><br>
			</form>
			
			<form action="filtertvshow.php" method="GET">
					<label for="year" class="formlabel">Release Year</label><br>
				<input type="number" name="year" required value="<?php if(isset($_GET['year'])){echo $_GET['year'];}?>" placeholder="Release Year">&nbsp;
				<button type="submit">Search</button><br>
				<input type="radio" name="time" value="after" required>
					<label for="genre1">After</label>&nbsp;
				<input type="radio" name="time" value="before">
					<label for="genre2">Before</label>&nbsp;
				<input type="radio" name="time" value="during">
					<label for="genre3">During</label><br>
				</form>
				
			<form action="filtertvshow.php" method="GET">
				<label for="allep" class="formlabel">Total Episodes</label>
				<input type="number" name="allep" required value="<?php if(isset($_GET['allep'])){echo $_GET['allep'];}?>" placeholder="Total Episodes">&nbsp;
				<button type="submit">Search</button><br>
				<input type="radio" name="long" value="longer" required>
					<label for="genre1">Longer</label>&nbsp;
				<input type="radio" name="long" value="shorter">
					<label for="genre2">Shorter</label>&nbsp;
				<input type="radio" name="long" value="exact">
					<label for="genre3">Exact</label>&nbsp;
				</form>
			<form action="filtertvshow.php" method="GET">
				<label for="season" class="formlabel">Season</label><br>
				<input type="text" name="season" required value="<?php if(isset($_GET['season'])){echo $_GET['season'];}?>" placeholder="Season">&nbsp;
				<button type="submit">Search</button><br>
			</form>
				
			<form action="filtertvshow.php" method="GET">
				<label for="watchStatus" class="formlabel">Watch Status:</label><br>
				<select id="watchStatus" name="watchStatus">
					<option value="completed">Completed</option>
					<option value="watching">Watching</option>
					<option value="abandoned">Abandoned</option>
					<option value="planToWatch">Plan to Watch</option><br>
							</select>
					&nbsp;<button type="submit">Search</button><br>
			</form>
			
			<form action="filtertvshow.php" method="GET">
				<label for="ageRestriction" class="formlabel">Age Restriction</label><br>
				<select id="ageRestriction" name="ageRestriction">
						<option value="G">G</option>
						<option value="PG">PG</option>
						<option value="PG-13">PG-13</option>
						<option value="R">R</option>
						<option value="NC-17">NC-17</option>
						</select>
				&nbsp;<button type="submit">Search</button><br>
			</form>
				
			<form action="filtertvshow.php" method="GET">
				<label for="genre" class="formlabel">Genre</label><br>
			<div class="choice" id="filterchoice"> 
				<input type="radio" id="Romance" name="tvgenre" value="Romance" required>
					<label for="Romance">Romance</label>
				<input type="radio" id="Comedy" name="tvgenre" value="Comedy">
					<label for="Comedy">Comedy</label>
				<input type="radio" id="Horror" name="tvgenre" value="Horror">
					<label for="Horror">Horror</label><br>
				<input type="radio" id="Action" name="tvgenre" value="Action">
					<label for="Action">Action</label>
				<input type="radio" id="Thriller" name="tvgenre" value="Thriller">
					<label for="Thriller">Thriller</label>
								<input type="radio" id="Animated" name="tvgenre" value="Animated">
					<label for="Animated">Animated</label><br>
				<input type="radio" id="Fantasy" name="tvgenre" value="Fantasy">
					<label for="Fantasy">Fantasy</label>
				<input type="radio" id="Mystery" name="tvgenre" value="Mystery">
					<label for="Mystery">Mystery</label>
				<input type="radio" id="Documentary" name="tvgenre" value="Documentary">
					<label for="Documentary">Documentary</label><br>
				<input type="radio" id="Sci-Fi" name="tvgenre" value="Sci-Fi">
					<label for="Sci-Fi">Sci-Fi</label>
				<input type="radio" id="Drama" name="tvgenre" value="Drama">
					<label for="Drama">Drama</label>
				<input type="radio" id="Musical" name="tvgenre" value="Musical">
					<label for="Musical">Musical</label><br>
					</div>
				<button type="submit">Search</button><br>
				</form>
				
			<form action="filtertvshow.php" method="GET">
				<label for="rating" class="formlabel">Rating</label><br>
				<input type="number" name="rating" min="0" max="10" required value="<?php if(isset($_GET['rating'])){echo $_GET['rating'];}?>" placeholder="Rating">&nbsp;
								<button type="submit">Search</button><br>
				<input type="radio" name="qual" value="better" required>
					<label for="genre1">Better</label>&nbsp;
				<input type="radio" name="qual" value="worse">
					<label for="genre2">Worse</label>&nbsp;
				<input type="radio" name="qual" value="exact">
					<label for="genre3">Exact</label><br>

			</form>
			</div>

				</div>
			</div>
			
		</div>
<div id="footer">
    <footer>
        <small> © 2022 • Kalina Hajzner</small>
    </footer>
</div>

	</body>
</html>