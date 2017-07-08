<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

	// $serverName = "mysql.hostinger.in.th";
	// $userName = "u476104090_golf";
	// $userPassword = "BVXExcTOZ1ET";
	// $dbName = "u476104090_golf";

	$serverName = "mysql.hostinger.in.th";
	$userName = "root";
	$userPassword = "";
	$dbName = "test";

	$conn = new mysqli($serverName,$userName,$userPassword,$dbName);

	if ($conn->connect_errno) {
		echo $conn->connect_error;
		exit;
	}
	else
	{
		echo "Database Connected.";
	}

	$conn->close();


?>
