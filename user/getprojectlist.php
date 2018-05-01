<?php
	include "../db/connect.php";
	
	$userid = $_POST['userid']; 
	$sql = "select * from projects where pid in (select pid from assignment where userid = '{$userid}');";


	$result = $conn->query($sql);
	$obj = new StdClass();
	$data_array = array();

	// echo "[";
			while( $obj = $result->fetch_object() ) {

				//if (json_encode($obj) != "") {
					// echo json_encode($obj);
					array_push(data_array, json_encode($obj));
				//}
			}
			// echo "{}]";

?> 