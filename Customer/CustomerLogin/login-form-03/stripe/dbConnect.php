<?php
$hostname = "localhost"; $user = "root"; $pass = ""; $db = "zooproject";

//create/open connection
$db_conn = mysqli_connect($hostname,$user,$pass,$db,);

//check connection
if($db_conn){
	//echo "connection successful";
}
else{
	die(mysqli_error($conn));
}


?>