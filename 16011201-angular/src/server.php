<?php
$uname = $_GET['uname'];
$pwd = $_GET['pwd'];

if($uname == "ye" && $pwd == "123"){
	echo "success";
}else{
	echo "failed";
}

// http://localhost/Project/16011201-angular/src/server.php?uname=123&pwd=123