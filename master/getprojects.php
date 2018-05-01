<?php
	include "../db/connect.php";
	$userid = $_POST['projects'];
	$sql = "select * from projects ";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();
	echo json_encode($obj);
?>