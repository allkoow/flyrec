<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="flyrec";

	//Create connection
	$connection = new mysqli($servername,$username,$password,$dbname);

	// Check connection
	if($connection->connect_error)
		die("connection faild: " . $connection->connect_error);

	$sql = "SELECT * FROM artist";
	$result = $connection->query($sql);

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$array[] = $row;
		}

		echo json_encode($array);
	}
	else
		echo "0 results";
?>