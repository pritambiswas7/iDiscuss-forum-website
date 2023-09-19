<?php 

session_start();
echo "Loggedout.please wait......";

session_destroy();
header("Location: /forum/index.php");

?>