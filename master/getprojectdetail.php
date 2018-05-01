<?php
	include "../db/connect.php";
	$pid = $_POST['pid'];
	
	$sql = "select * from project where pid = '{$pid}'";
	
	$result = $conn->query($sql);
	$obj = new StdClass();

	$obj = $result->fetch_object();
	
	echo json_encode($obj);
	

?>