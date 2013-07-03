<?php
ob_start();// test
include_once 'header.php';
if (isset($_SESSION['user']))
{
	destroySession();
	echo "<div class='main'>You have been logged out. Please " .
		 "<a href='dex.php'>click here</a> to refresh the screen.";
}
else echo "<div class='main'><br />" .
		  "You cannot log out because you are not logged in";
ob_end_flush();//test
?>

<br /><br /></div></body</html>