<?php
	include "../db/connect.php";
	$tid = $_POST['tid'];
	
	$sql = "update task set progress = '0' where tid = '{$tid}' ";
	

	if($conn->query($sql)){
		echo "success";
	}
	

?>