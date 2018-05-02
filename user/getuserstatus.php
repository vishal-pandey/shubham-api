<?php
	include "../db/connect.php";
	echo $_POST['userid'];
	$sql = " select count(pid) as total from task where pid in (select pid from assignment where userid = '{$userid}')";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();

	echo $total = $obj->total;
	echo $sql;


	$sql = " select count(pid) as complete from task where pid in (select pid from assignment where userid = '{$userid}') and progress = '1'";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();

	$complete = $obj->complete;
	echo $sql;

	$sql = " select count(pid) as uncomplete from task where pid in (select pid from assignment where userid = '{$userid}') and progress = '0'";

	$result = $conn->query($sql);
	$obj = new StdClass();
	$obj = $result->fetch_object();

	$uncomplete = $obj->uncomplete;
	echo $sql;
	
	echo '{
					"total": "'.$total.'",
					"complete": "'.$complete.'",
					"uncomplete": "'.$uncomplete.'"
				}
					';
?>