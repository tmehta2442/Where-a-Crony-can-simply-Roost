<?php
include_once 'header.php'; 
// yeah, changed it to 'dex' otherwise my true homepage is not acting nicely. Will work on later
echo "<br /><span class='main'>Welcome to where the Cronies Roost,";

if ($loggedin) echo "$user, you are logged in.";
else 		   echo ' please sign up and/or log in to join. This is just a test of my engine, so send me a message (via this site) if you encounter errors.';

?>

</span><br /><br /></body></html>