<?php
header("Content-Type:application/json");
require_once("../init.php");
session_start();
@$uname=$_REQUEST["uname"];
@$upwd=$_REQUEST["upwd"];
@$email=$_REQUEST["email"];
@$phone=$_REQUEST["phone"];
@$qrcode=$_REQUEST["qrcode"];
if($uname&&$upwd&&$email){
	
}
