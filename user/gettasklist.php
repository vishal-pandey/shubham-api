<?php
	include "../db/connect.php";
	$pid = $_POST['pid'];
	$sql = "select * from task where pid = '{$pid}'";

	$result = $conn->query($sql);
	$obj = new StdClass();


	echo "[";
		while( $obj = $result->fetch_object() ) {
			echo json_encode($obj);
			echo ",";
		}
	echo "{}]";

?>