<html>

<head>
<?php
include "index.php";

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV Show List</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
</head>

<body>

	<h1 class="title is-1">TV Show List</h1>
    <div class="bar">
        <a href="#watching">Watching</a>
        <a href="#towatch">Plan To Watch</a>
        <a href="#completed">Completed</a>
        <a href="#abandoned">Abandoned</a>
        <a href="newtvshow.php" class="button">New TV Show</a>
    </div>
    <div class="box">
        <div class="mainRow">
            <div class="column left">
				<div id="allMovies">
                <h2 id="watching">Watching</h2>
                <table style="width:100%" class="movies">
                    <tr class="titles">
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
					$q1 = "SELECT * FROM TVShows WHERE watchstatus='Watching' ORDER BY Title, Season ASC";
					$watching = $mysqli->query($q1);
					if (mysqli_num_rows($watching)>0){
						while($row = mysqli_fetch_array($watching)){?>
                        <tr class="entry">
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['StartYear'];?></td>
 <td><?php echo $row['CurrentEpisode'];?>/<?php echo $row['Episodes'];?><a href="addepisode.php?id=<?php echo $row['ID']; ?>">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</a></td>
                            <td><?php echo $row['Season'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restrictions'];?></td>
                            <td><?php echo $row['Rating'];?>/10</td>
							<td><a href="edittvshow.php?id=<?php echo $row['ID'];?>">Edit</a></td>
							<td><a href="deletetvshow.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
                        </tr>
						<tr><td colspan="9"><hr class="entryline"></td></tr>

						<?php
						}
				}
				$mysqli->close();
				?>
                </table>
                 <h2 id="towatch">Plan To Watch</h2>
                <table style="width:100%" class="movies">
                    <tr class="titles">
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
					$q2 = "SELECT * FROM TVShows WHERE watchstatus='PlanToWatch' ORDER BY Title, Season ASC";
					$plantowatch = $mysqli->query($q2);
					if (mysqli_num_rows($plantowatch)>0){
						while($row = mysqli_fetch_array($plantowatch)){?>
						<tr class="entry">
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['StartYear'];?></td>
                            <td><?php echo $row['CurrentEpisode'];?>/<?php echo $row['Episodes'];?></td>
                            <td><?php echo $row['Season'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restrictions'];?></td>
                            <td><?php echo $row['Rating'];?>/10</td>
							<td><a href="edittvshow.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletetvshow.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this tv show?');">Delete</a></td>
                        </tr>
						<tr><td colspan="9"><hr class="entryline"></td></tr>
				<?php
						}
				}
								$mysqli->close();
				?>
                </table>
                <h2 id="completed">Completed</h2>
                <table style="width:100%" class="movies">
                    <tr class="titles">
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
					$q3 = "SELECT * FROM TVShows WHERE watchstatus='Completed' ORDER BY Title, Season ASC";
					$completed = $mysqli->query($q3);
					if (mysqli_num_rows($completed)>0){
						while($row = mysqli_fetch_array($completed)){?>
						<tr class="entry">
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['StartYear'];?></td>
                            <td><?php echo $row['Episodes'];?>/<?php echo $row['Episodes'];?></td>
                            <td><?php echo $row['Season'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restrictions'];?></td>
                            <td><?php echo $row['Rating'];?>/10</td>
							<td><a href="edittvshow.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletetvshow.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this tv show?');">Delete</a></td>
                        </tr>
						<tr><td colspan="9"><hr class="entryline"></td></tr>
			<?php
						}
				}
				$mysqli->close();
				?>
                </table>
                <h2 id="abandoned">Abandoned</h2>
                <table style="width:100%" class="movies">
                    <tr class="titles">
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
					$q4 = "SELECT * FROM TVShows WHERE watchstatus='Abandoned' ORDER BY Title, Season ASC";
					$abandoned = $mysqli->query($q4);
					if (mysqli_num_rows($abandoned)>0){
						while($row = mysqli_fetch_array($abandoned)){?>
						<tr class="entry">
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['StartYear'];?></td>
                            <td><?php echo $row['CurrentEpisode'];?>/<?php echo $row['Episodes'];?><a href="addepisode.php?id=<?php echo $row['ID']; ?>">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</a></td>
                            <td><?php echo $row['Season'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restrictions'];?></td>
                            <td><?php echo $row['Rating'];?>/10</td>
							<td><a href="edittvshow.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletetvshow.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this tv show?');">Delete</a></td>
                        </tr>
						<tr><td colspan="9"><hr class="entryline"></td></tr>
			<?php
						}
				}
				$mysqli->close();
				?>
                </table>
				</div>
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
				<label for="watchStatus" class="formlabel">Watch Status</label><br>
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
<div id="footer">
    <footer>
        <small> © 2022 • Kalina Hajzner</small>
    </footer>
</div>

	</body>
</html>