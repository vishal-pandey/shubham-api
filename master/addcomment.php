<?php
	include "../db/connect.php";
	$pid = $_POST['pid'];
	$comment = $_POST['comment']; 
	$sql = "insert into comment (pid, comment) values ('{$pid}', '{$comment}')";
	

	if($conn->query($sql)){
		echo "success";
	}
	

?>