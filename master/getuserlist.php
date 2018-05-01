<?php
	include "../db/connect.php";

	$sql = "select * from users";


	$result = $conn->query($sql);
	$obj = new StdClass();
	// $data_array = array();

	echo "[";
			while( $obj = $result->fetch_object() ) {

				// if (json_encode($obj) != "") {
					echo json_encode($obj);
					echo ",";
					// array_push($data_array, json_encode($obj));
				//}
			}
			echo "{}]";

			// echo json_encode($data_array);

			// var_dump($data_array);
?> 