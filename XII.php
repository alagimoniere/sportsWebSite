<?php include("php/header.php"); ?>

<img class="img-responsive img-rounded logos" src="img/XII.png" alt="Chania">
<hr>


<!-- VIDEOS -->
	<div class="container text-center">
	  <div class="row">
	    <div class="col-md-6">
	        <iframe  width="560" height="315" class="videos" src="https://www.youtube.com/embed/OfUhp9IiASg" frameborder="0" allowfullscreen></iframe>
	    </div>
	    <div class="col-md-6">
	        <iframe width="560" height="315" class="videos" src="https://www.youtube.com/embed/B_SFev8UwEw" frameborder="0" allowfullscreen></iframe>
	      </div>
	    </div>
	</div>
	<!-- END VIDEOS -->


<!-- php to get team names -->
<?php

//db accessed from common.php which is included in header.php

$query = "SELECT * FROM team WHERE conference = 'XII'";
$results = $conn->query($query);

if($results->num_rows > 0) 
{
    echo "<ul class='list-group' style='margin: 10px auto 10px auto; max-width: 400px;'>";
    while($row = $results->fetch_assoc()) 
    {
        echo "<li class='list-group-item'><a href='team.php?team=" . $row["team_name"] . "'>" . $row["team_name"] . "</a></li>";
    }//while
    echo "</ul>";
}//if


?>
<!-- end php -->
<?php include("php/footer.php"); ?>
