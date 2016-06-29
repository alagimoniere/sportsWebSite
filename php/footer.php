<!-- FOOTER -->
	<div class="panel panel-light custom_footer">
	  <div class="panel-body">
		<!-- COPYRIGHT -->
		&copy CollegeFootballCentral.com 2016-<script language="JavaScript">document.write(new Date().getFullYear());</script> 
	  </div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Tablesorter-->
     <link rel="stylesheet" type="text/css" href="../js/tablesorter/themes/green/style.css">
     <script type="text/javascript" src="../js/tablesorter/jquery-latest.js"></script>
     <script type="text/javascript" src="../js/tablesorter/jquery.tablesorter.min.js"></script>
    <script>
     $(document).ready(function () {
        $("#rosterTable").tablesorter();
     });
     </script> 
     
    <?php
        include("common.php");
        mysqli_close($conn);
    ?>
  </body>
</html>
