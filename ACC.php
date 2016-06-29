<?php include("php/header.php"); ?>
  <img class="img-responsive img-rounded logos" src="img/acc.jpg" alt="Chania">
  <hr>

  <div class="container text-center">
  <div class="row">
    <div class="col-md-6">
        <iframe  width="560" height="315" class="videos" src="https://www.youtube.com/embed/QcsF2Q6Rgdk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
        <iframe width="560" height="315" class="videos" src="https://www.youtube.com/embed/SNsHKKy6eaU" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
</div>



<!-- php to get team names -->
<?php

//db accessed from common.php which is included in header.php
$query = "SELECT * FROM team WHERE conference = 'ACC'";
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
<!-- maybe include comment box later? -->
<?php include("php/footer.php"); ?>
