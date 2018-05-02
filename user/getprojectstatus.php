<?php

	include "../db/connect.php";
	$pid = $_POST['pid'];
	$sql = "select count(pid) as total from task where pid = '{$pid}' ";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();

	$total = $obj->total;

	$sql = "select count(pid) as complete from task where pid = '{$pid}' and progress = '1'";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();

	$complete = $obj->complete;


	echo '{
			"total": "'.$total.'",
			"complete": "'.$complete.'"
		}
		';

?>