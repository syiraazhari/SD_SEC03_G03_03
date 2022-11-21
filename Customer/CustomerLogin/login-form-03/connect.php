<?php
$hostname = "localhost"; $user = "root"; $pass = ""; $db = "zooproject";

//create/open connection
$conn = mysqli_connect($hostname,$user,$pass,$db,);

//check connection
if($conn){
	//echo "connection successful";
}
else{
	die(mysqli_error($conn));
}


?>