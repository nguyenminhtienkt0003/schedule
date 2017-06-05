<?php
include "./dbconnect.php";
if($player_name != '' && $player_name != 'guest')
{
	header("location:hall.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
font-size:15px;
}
A:visited {
	COLOR: #000000; TEXT-DECORATION: none
}
A:hover {
	COLOR: #000000; TEXT-DECORATION: underline
}
A:active {
	COLOR: #000000; TEXT-DECORATION: none
}
A:link {
	COLOR: #000000; TEXT-DECORATION: none
}
.box{
	padding:1px 1px 1px 1px;
	border:1px solid #487524;
	background:url(images/f_bg.gif);
	color:#FFFFFF;
	FONT-SIZE: 15px
}
.box_input{
	padding:1px 1px 1px 1px;
	border:1px solid #206300;
	background:#387800;
	color:#FFFFFF;
	FONT-SIZE: 15px
}
.box_submit{
	padding:1px 1px 1px 1px;
	border:1px solid #E19D00;
	background:#FFDC04;
	color:#000000;
	FONT-SIZE: 15px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="landlord onWeb" />
<meta name="author" content="mickie" />
<meta name="keyword" content="mickiedd" />
<meta name="description" content="qq155448883,CSUST" />
<title>landlord onWeb</title>

</head>

<body bgcolor="#EBF6E8">
<?php
if(isset($_COOKIE[message]))
{
	echo "<div align=center>".$_COOKIE[message]."</div>";
	setcookie(message, NULL);
}
?>

<form name=form method=post action=login_d.php>
<br />
<br />

<table class="box" align=center><tr><td width="218">
	<table>
	<tr><td colspan="2"></td></tr>
	<tr><td width="69" align="right">帐号：</td>
	<td width="137"><input class=box_input type=text name=name size=12 maxlenth=12></td></tr>
	<tr><td align="right">密码：</td>
	<td><input class=box_input type=password name=password size=12 maxlenth=25></td></tr>
	<tr><td></td><td><input class=box_submit type=submit name=submit value=登陆> <a href=reg.php><font color=white><b>注册</b></font></a></td></tr>
	</table>
</td></tr></table>
</form>
<div align="center">2015 &copy TTPGame</div>
</body>
</html>