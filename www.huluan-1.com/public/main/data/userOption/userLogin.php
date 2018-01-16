<?php
header("Content-type:application/json,charset=utf-8");
require_once("../init.php");
@$uname=$_REQUEST["uname"];
@$upwd=$_REQUEST["upwd"];
@$logintype=$_REQUEST["logintype"];
@$code=$_REQUEST("code");
if(strtolower($code)!=strtolower($_SESSION["code"]){
	echo json_encode(["ok"=>0,"msg"=>"验证码错误请重新输入"]);
	exit
}
session_start();
if($uname&&$upwd&&$logintype){
	$sql="SELECT uid FROM hl_user WHERE uname=$uname AND upwd=$upwd";
	$result=mysqli_query($conn,$sql);
	if($result){
		$row=mysqli_fetch_row($result);
		$_SESSION["uid"]=$row[0];
		echo json_encode(["ok"=>1,"msg"=>"用户验证成功"]);
		$sql="UPDATE hl_user SET logintype=$logintype";
	}else{
		echo json_encode(["ok"=>0,"msg"=>"用户验证失败"]);
	}
}