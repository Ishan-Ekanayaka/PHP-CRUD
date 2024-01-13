<?php

	$server = "localhost";
	$user = "root";
	$pword = "";
	$db = "task";

	$connection = new mysqli($server,$user,$pword,$db);

	if ($connection->connect_error)
	{
		die("Not connection with Data Base");
	}

?>
