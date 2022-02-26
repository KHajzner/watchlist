
<html>

<head>
<?php
include "index.php";

?>

</head>
<body>
	<h1 class="title is-1">Movie</h1>
    <div class="box">
        <div class="mainRow">
            <div class="column left">
                <table style="width:100%">
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
					$title=$_GET['title'];
					$year=$_GET['year'];
					$runtime=$_GET['runtime'];
					$watchstatus=$_GET['watchStatus'];
					$restriction=$_GET['ageRestriction'];
					$rating=$_GET['rating'];
 
					$q1 = "SELECT * FROM Movies WHERE (Title LIKE '%$title%') OR (Year='$year')";

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

	</body>
</html>