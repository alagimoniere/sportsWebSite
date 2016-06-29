<form class="form-horizontal " role="form" method="post">
    
    <div class="checkbox" style="margin-left: 10%;">
  		<label><input type="checkbox" name="anon" value="anon">Anonymous</label> <!-- anon checkbox -->
	</div>
    <div class="form-group">
        <label for="comment" class="col-sm-2 control-label">comment: </label>
        <div class="col-sm-10">
            <textarea class="form-control contactForms" rows="2" name="comment" placeholder="Message"></textarea> <!-- comment for form -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="submit" class="btn btn-primary"> <!-- btn -->
        </div>
    </div>
</form>



<!-- PHP FORM CONTROL -->
<?php
$name=$_SESSION['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
$anon = $_POST['anon'];


if($submit)
{
	if ($anon === "anon" || $name != NULL || $name != "") 
	{
		if($comment != '')
		{
			if ($anon === "anon") 
				$conn->query("INSERT INTO comments (Name, page, Text) VALUES ('Anonymous', 'one', '$comment')");
			else
				$conn->query("INSERT INTO comments (Name, page, Text) VALUES ('$name', 'one', '$comment')");
		}//if
		else
		{
			echo "Please add a comment";
		}//else
	}//if logged in
	else echo '<div class="alert alert-danger">You must be logged in or anonymous to submit a comment</div>';
}//if submit
?>

<!-- GRABS COMMENTS FROM BACKEND -->
<?php
$results = $conn->query("SELECT * FROM comments ORDER BY id DESC");

echo "<table id='contactTable' class='table' style='background-color: white;'>
	  <thead>
	    <tr>
	      <th>Name</th>
	      <th>Comment</th>
	    </tr>
	  </thead>
	  <tbody>";
while($rows= $results->fetch_assoc())
{
	//iterate through database
	$id = $rows['ID'];
	$name=$rows['Name'];
	$comment=$rows['Text'];

	//add in table
	echo "<tr><td>" . $name . "</td>" . "<td>" . $comment . "</td></tr>"; //put the data in correct cells
}//while
echo "</tbody></table>"; //close remaining tags
?>
