<?php
	session_start();
	session_destroy();

    exit("You have logged out of College Football Central, back to <a href='login.php'>Log in</a>");
?>