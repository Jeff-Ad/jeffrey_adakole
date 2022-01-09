<?php
session_start();
include("db_connect.php");
if (!isset($_SESSION['usertype'])) {
	header("location:index.php");
}
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	echo $sql = "DELETE FROM messages WHERE ID=$id";
	$conn->query($sql);
	header("location:index.php?mailbox=Message Deleted");
} else {
	header("location:index.php?mailbox");
}
