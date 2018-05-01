<?php
	include "../db/connect.php";
	$pid = $_POST['pid'];
	$tname = $_POST['tname'];

	
	$sql = "insert into task (pid, tname, progress) values ('{$pid}', '{$tname}', '0')";
	

	if($conn->query($sql)){
		echo "success";
	}
	

?>