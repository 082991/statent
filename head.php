<?php session_start();
// 检测session是否为空是则转到登录页面
	if (empty($_SESSION['usname'])) {
		// unset($_SESSION['usname']);
		header("Refresh:0;url=login.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>北网学生管理系统</title>
	<link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css">
	<link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui-append.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">	
	<style>
	a{
		font-size: 12px;
	}
	.sui-container a{
		font-size: 12px;
	}
	.sui-container td{
		font-size: 13px;
	}
	.sui-container{
		width: 1320px;
		height: 650px;
		background-color: #fdf9f9;
		margin: 20px auto;
		border-radius: 10px 10px 0px 0px;
		font-size: 16px;
		font-family:"Microsoft 宋体",宋体,"MicrosoftJhengHei",华文细黑,STHeiti,MingLiu
	}
	.my-head{
		width: 1300px;
		height: 80px;
		border-bottom: 5px solid grey;
		line-height: 80px;
		text-align: center;
		font-size: 25px;
		font-weight: 600;
		border-radius: 10px 10px 0px 0px;
		background-color: aqua;
		font-family:"Microsoft 宋体",宋体,"MicrosoftJhengHei",华文细黑,STHeiti,MingLiu
		color: #5f5a5a;
	}
	.userinfo{
		position: absolute;
	    width: 200px;
	    height: 50px;
	    line-height:50px;
	    top: 31px;
    	left: 1188px;
	    font-size: 20px;
	}
	.userinfo span{
		color: red;
	}
	.pp{
		padding: 5px 10px 5px 10px;
		height: 100px;
		background-color: #9ea9ff;
		margin: 10px auto;
		text-align: center;
		line-height: 100px;
		border-radius: 10px 10px 10px 10px;
		font-size: 35px;
		display: none;
		/*color: color;*/
	}
	</style>
</head>
<body>
	<div class="sui-container" >
		<div class="my-head">北网学生管理系统</div><div class="userinfo">欢迎<span><?php echo empty($_SESSION['usname'])? "尊敬的会员":$_SESSION['usname']; ?></span>登录&nbsp;&nbsp;<a href="login-out.php">退出</a></div>
		