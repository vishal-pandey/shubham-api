<?php
	include "../db/connect.php";
	
	$userid = $_POST["userid"];
	$pid = "p_".rand(00000000,99999999);
	$pname = $_POST["pname"];
	$startdate = $_POST["startdate"];
	$enddate = $_POST["enddate"];
	$inchargename = $_POST["inchargename"];
	$inchargecontact = $_POST["inchargecontact"];
	$notask = $_POST["notask"];

	
	$sql = "insert into projects (pid, pname, startdate, enddate, inchargename, inchargecontact, notask) values ('{$pid}','{$pname}','{$startdate}','{$enddate}','{$inchargename}','{$inchargecontact}','{$notask}')";
	

	if($conn->query($sql)){
		$sql = "insert into assignment values ('{$userid}', '{$pid}')";
		if ($conn->query($sql)) {
			echo "success";
		}
	}else{
		echo $sql;
	}
	

?>