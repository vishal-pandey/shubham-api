<?php
	include "../db/connect.php";
	$userid = $_POST['userid'];
	$sql = "select * from users ";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();
	echo json_encode($obj);
?>