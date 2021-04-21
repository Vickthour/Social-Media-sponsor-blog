<?php
	
$con = mysqli_connect("localhost", "root", "", "social");
	if(!$con)
	{
    die('Connection error'.mysqli_connect_errno());
	}

?>