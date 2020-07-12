<?php

$servername = "your database server name here"; //it's most likely localhost or '127.0.0.1'
$username = "your database user name here"; //most likely 'root'
$password = "your database password here"; //most likely nothing ''
$database = "your database name here"; //the name of your database

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
	die("Could not connect");
}

//your table name should replace "posts" if iti\ is named otherwise
$sql = "select * from posts"; 

$result = $conn->query($sql);

$data = "";
if($result){
	while ($row = $result->fetch_assoc()) {

		$data .= "   <b>post id</b>     " . $row['post_id'];
		$data .= "   <b>post user id</b>      " . $row['post_user_id'];
		$data .= "   <b>user post</b>      ". $row['user_post'];

	
	}

} else {
		echo "no data found";
}

$conn->close();

echo $data;

