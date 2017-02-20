<?php 
	$connection = mysqli_connect('localhost', 'tsdea', 'sdW4UUJjc', 'cdea_db');
	$sql = "SELECT * FROM news";
	$request = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($request)) {
        echo "more: ". $row['more'];
    }
?>