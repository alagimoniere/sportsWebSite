<?php 
	//include neccesary files
	include("php/header.php");
	include("php/carousel+videos.html") 
?>

<!-- TODO: indicate something that this is the sign up page -->
<div class="accountHeader">
  <h3>Sign up</h3>
  <p>Sign up for advanced features!</p>
</div>


<form class="form-horizontal" role="form" method="post" action="signup.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="password" value="">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Sign Up" class="btn btn-primary">
        </div>
    </div>
</form>

<?php 

	if (isset($_POST['submit'])) 
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if ($user !== "Log in") 
		{
			//db accessed from common.php which is included in header.php
			if ($conn->connect_error) 
			{
		    	die("Connection failed: " . $conn->connect_error);
			} 

			$query = "SELECT * FROM users WHERE username=" . $user . "";
			$results = $conn->query($query);
			if ($results->numOfRows == 0) 
			{
				//this means that this username is unique -- store the information on the server
				$sql = "INSERT INTO users ( username, password, salt) VALUES ('".$user."', '".$pass."', 'temp')";

				if ($conn->query($sql) === TRUE) {
					$conn->query("UPDATE users SET salt = TO_BASE64(RANDOM_BYTES(64)) WHERE username ='" .$user ."'");
                    			$conn->query("UPDATE users SET password = SHA2(CONCAT(password, salt), 256) WHERE username ='" .$user ."'");
				    echo "<div class='alert alert-success' role='alert'>Success! New account created!</div>";
				} else {
				    echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . $conn->error . "</div>";
				   
				}//else
			}//if number of rows == 0
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Error: that username has already been taken. </div>";
			}//if username is already taken
		}//if
		else
			echo "<div class='alert alert-danger' role='alert'>Error: not a valid username, please pick another username. </div>";

		
	}//if submit was pressed
?>
<!-- include footer -->
<?php include("php/footer.php"); ?>


