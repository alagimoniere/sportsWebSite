<?php 
  include("php/header.php"); 
  include("php/carousel+videos.html");
?>

<?php

//db accessed from common.php which is included in header.php

$query = "SELECT player_name, player_class, player_position, player_summary FROM roster r JOIN team t ON  r.team_id = t.team_id WHERE team_name='" . htmlspecialchars($_GET["team"]) . "'";
$results = $conn->query($query);

if($results->num_rows > 0) {
    echo "<table id=\"rosterTable\" class='tablesorter'><caption>Roster</caption><thead><tr><th>Name</th>><th>Class</th>><th>Position</th>><th>Summary</th></tr></thead><tbody>";
    while($row = $results->fetch_assoc()) 
    {
    	if ($row['player_name'] == "Nick Chubb")
    		echo "<tr><td>" . "<a href='infographic.php' style='color: white;'>" . $row["player_name"] . "</a>" . "</td><td>" . $row["player_class"] . "</td><td>" . $row["player_position"] . "</td><td>" . $row["player_summary"] . "</td></tr>";
    	else
        	echo "<tr><td>" . $row["player_name"] . "</td><td>" . $row["player_class"] . "</td><td>" . $row["player_position"] . "</td><td>" . $row["player_summary"] . "</td></tr>";
    }
    echo "</tbody></table>";
}


echo getcwd() . "\n";
?>
<?php include("php/commentbox.php"); ?> 
<?php include("php/footer.php"); ?>
