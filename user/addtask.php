<?php
	include "../db/connect.php";
	$pid = $_POST['pid'];
	$tname = $_POST['tname'];
	$tid = "t_".rand(00000000, 99999999);
	
	$sql = "insert into task (pid, tname, progress, tid) values ('{$pid}', '{$tname}', '0', '{$tid}')";
	

	if($conn->query($sql)){
		echo "success";
	}
	

?>