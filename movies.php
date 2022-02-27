<html>

<head>
<?php
include "index.php";

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Watch List</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
</head>

<body>

	<h1 class="title is-1">Movie</h1>
    <div class="bar">
        <a href="#watching">Watching</a>
        <a href="#towatch">Plan To Watch</a>
        <a href="#completed">Completed</a>
        <a href="#abandoned">Abandoned</a>
        <a href="newmovie.php" class="button">New Movie</a>
    </div>
    <div class="box">
        <div class="mainRow">
            <div class="column left">

                <h2 id="watching">Watching</h2>
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

				<?php
					include "database.php";
					$q1 = "SELECT * FROM Movies WHERE watchstatus='Watching'";
					$watching = $mysqli->query($q1);
					if (mysqli_num_rows($watching)>0){
						while($row = mysqli_fetch_array($watching)){?>
                        <tr>
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['Year'];?></td>
                            <td><?php echo $row['Runtime'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restriction'];?></td>
                            <td><?php echo $row['Rating'];?></td>
							<td><a href="editmovie.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletemovie.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
                        </tr>
			
						<?php
						}
				}
				$mysqli->close();
				?>
                </table>
                 <h2 id="towatch">Plan To Watch</h2>
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
				<?php
								  include "database.php";
					$q2 = "SELECT * FROM Movies WHERE watchstatus='PlanToWatch'";
					$plantowatch = $mysqli->query($q2);
					if (mysqli_num_rows($plantowatch)>0){
						while($row = mysqli_fetch_array($plantowatch)){?>
						<tr>
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['Year'];?></td>
                            <td><?php echo $row['Runtime'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restriction'];?></td>
                            <td><?php echo $row['Rating'];?>/10</td>
							<td><a href="editmovie.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletemovie.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
                        </tr>
				<?php
						}
				}
								$mysqli->close();
				?>
                </table>
                <h2 id="completed">Completed</h2>
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

                  <?php
				  include "database.php";
					$q3 = "SELECT * FROM Movies WHERE watchstatus='Completed'";
					$completed = $mysqli->query($q3);
					if (mysqli_num_rows($completed)>0){
						while($row = mysqli_fetch_array($completed)){?>
						<tr>
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['Year'];?></td>
                            <td><?php echo $row['Runtime'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restriction'];?></td>
                            <td><?php echo $row['Rating'];?></td>
							<td><a href="editmovie.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletemovie.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
                        </tr>
			<?php
						}
				}
				$mysqli->close();
				?>
                </table>
                <h2 id="abandoned">Abandoned</h2>
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
					<?php
				  include "database.php";
					$q4 = "SELECT * FROM Movies WHERE watchstatus='Abandoned'";
					$abandoned = $mysqli->query($q4);
					if (mysqli_num_rows($abandoned)>0){
						while($row = mysqli_fetch_array($abandoned)){?>
						<tr>
                            <td><?php echo $row['Title'];?></td>
                            <td><?php echo $row['Year'];?></td>
                            <td><?php echo $row['Runtime'];?></td>
							<td><?php echo $row['Genre'];?></td>
                            <td><?php echo $row['Restriction'];?></td>
                            <td><?php echo $row['Rating'];?></td>
							<td><a href="editmovie.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
							<td><a href="deletemovie.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a></td>
                        </tr>
			<?php
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
				<input type="number" name="year" required value="<?php if(isset($_GET['year'])){echo $_GET['year'];}?>" placeholder="Release Year"><br>
				<input type="radio" name="time" value="after" required>
					<label for="genre1">After</label><br>
				<input type="radio" name="time" value="before">
					<label for="genre2">Before</label><br>
				<input type="radio" name="time" value="during">
					<label for="genre3">During</label><br>
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
	</body>
</html>