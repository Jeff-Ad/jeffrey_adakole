<?php 
require_once("includes/init.php");
session_destroy();
session_start();
$message->messg("Logout Successful");
redirect_to("../login.php");
?>