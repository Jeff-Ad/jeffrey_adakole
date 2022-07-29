<?php
//require("functions.php");
require("constants.php");

// 1. Create a database connection
$mysqli =new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error()); 
}

/*// 2. Select a database to use 
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}*/
?>
