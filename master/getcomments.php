<?php
	include "../db/connect.php";
	$sql = "select * from comment";

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