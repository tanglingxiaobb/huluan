<?php
header("Content-type:application/json");
require_once("../init.php")
session_start();
$uid=$_SESSION["uid"];
if($uid){
	$sql="SELECT uname FROM hl_user WHERE uid=$uid";
	$row=mysqli_fetch_row(mysqli_query($conn,$sql));
	if($row){
		echo json_encode("ok"=>1,"uname"=>$row[0]);
	}else{
		echo json_encode(["ok"=>0,"msg"=>])
	}
}