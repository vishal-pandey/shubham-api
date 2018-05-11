<?php
	include "./db/connect.php";

	$sql = "update switch set pos = 0 where sn = '1'";

	if($conn->query($sql)){
		echo "success";
	};

?>