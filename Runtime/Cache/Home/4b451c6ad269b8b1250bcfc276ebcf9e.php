<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
<title></title>
<meta charset='utf-8'>
</head>
<body>
<h1>会员登录</h1>
<form action="/studyPHP/DimensionTour/index.php/home/user-logSubmit" method="post">
<table>
	<tr>
		<td>用户名：</td>
		<td><input type='text' name='username'></td>
	</tr>
	<tr>
		<td>登录密码：</td>
		<td><input type='password' name='password'></td>
	</tr>
	<tr>
		<td>验证码：</td>
		<td><input type='text' name='verifyCode'></td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' value='登录'></td>
	</tr>
</table>
</form>
</body>
</html>