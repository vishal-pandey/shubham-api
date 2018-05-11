<?php
	include "./db/connect.php";

	$sql = "select * from switch where sn = '1'";


	$result = $conn->query($sql);
	$obj = new StdClass();
	
	$obj = $result->fetch_object();

	echo json_encode($obj);

?>