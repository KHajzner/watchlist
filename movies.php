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
                <h2>Filter</h2>
					
			
					<form action="filtermovie.php">
				<label for="title">Title:</label><br>
				<input type="text" id="title" name="title"><br>
					<label for="year">Release Year:</label><br>
				<input type="number" id="year" name="year"><br>
				<label for="runtime">Runtime:</label><br>
				<input type="number" id="runtime" name="runtime"><br>
				<label for="watchStatus">Watch Status:</label><br>
				<select id="watchStatus" name="watchStatus">
					<option value="completed">Completed</option>
					<option value="watching">Watching</option>
					<option value="abandoned">Abandoned</option>
					<option value="planToWatch">Plan to Watch</option><br>
							</select><br>
				<label for="ageRestriction">Age Restriction:</label><br>
				<input type="text" id="ageRestriction" name="ageRestriction"><br>
					<label for="genre">Genre:</label><br>
					<input type="radio" id="genre1" name="genre" value="Romance">
				<label for="genre1">Romance</label><br>
				<input type="radio" id="genre2" name="genre" value="Comedy">
			<label for="genre2">Comedy</label><br>
				<input type="radio" id="genre3" name="genre" value="Horror">
				<label for="genre3">Horror</label><br>
			<label for="rating">Rating:</label><br>
				<input type="number" id="rating" name="rating"><br>
				<input type="submit" value="Submit">
					</form>
					
					
				</div>
			</div>
		</div>

	</body>
</html>