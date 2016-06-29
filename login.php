<?php 
	//include neccesary files
	include("php/header.php");
	include("php/carousel+videos.html") 

    // session_destroy(); //logs out the user //TODO: this should log the user out but is causing an error
?>


<!-- TODO: Implement something indicating that this is the login page -->
<div class="accountHeader">
  <h3>Log in</h3>
  <p>Login for advanced features!</p>
</div>

<form class="form-horizontal" role="form" method="post" action="login.php">
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
            <input id="submit" name="submit" type="submit" value="Log in" class="btn btn-primary">
        </div>
    </div>
</form>

<?php 
	if (isset($_POST['submit'])) 
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
        $tempLog = false;

	    $results = $conn->query("SELECT * FROM users");
        while($rows = $results->fetch_assoc())
        {
            $salt = $rows['salt'];
            $password = $rows['password'];
            if($password == hash('sha256', $pass.$salt))
            {
                $tempLog = true;
                $_SESSION['valid'] = true;
                $_SESSION['name'] = $user;
                echo '<div class="alert alert-success">Success You logged in</div>';
                break;
            }//if
            else
            {
            	$_SESSION['valid'] = FALSE;
            }
        }//while
        if ($tempLog == false) 
            echo '<div class="alert alert-danger">Error, wrong username/password.</div>';;
    }

?>
<!-- include footer -->
<?php include("php/footer.php"); ?>

