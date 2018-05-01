<?php
	include "../db/connect.php";
	$pid = $_POST['pid']; 
	$sql = "select * from comment where pid = '{$pid}'";

	$result = $conn->query($sql);
	$obj = new StdClass();

	echo "[";
			while( $obj = $result->fetch_object() ) {

				if (json_encode($obj) != "") {
					echo json_encode($obj);
					echo ",";
				}
			}
			echo "{}]";

?>