<?php
$hostname = "localhost"; $user = "root"; $pass = " "; $db = "zooproject";

//create/open connection
$con = mysqli_connect($hostname,$user,$pass,$db);

//check connection
if($con){
	
	echo "connection successful";
}
else{
	die(mysqli_error($con));
}


?>