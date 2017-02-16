<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mars_core";

    // open connection to mysql database
    $connection = mysqli_connect($host, $username, $password, $dbname) or die("Connection Error " . mysqli_error($connection));

	$sql = "SELECT  AVG(APH) from demo";
	$result = mysqli_query($connection, $sql) or die("Selection Error " . mysqli_error($connection));

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
			$AVG = number_format($row["AVG(APH)"], 2, '.', '');
			echo "Average :" . $AVG;
		}
	} else {
		echo "0 results";
	}
	mysqli_close($connection);
?>