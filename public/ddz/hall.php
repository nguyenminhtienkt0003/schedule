<?php
include "./dbconnect.php";
$FullURL = explode("?",$_SERVER['HTTP_REFERER']);
$ActionURL = explode("/",$FullURL[0]);
if ($ActionURL[count($ActionURL)-1]=="room_ddz.php")
{
	//Clear out Room
	$mysql  = "update room_ddz set lord = '', flag = '', player1_p = '', player2_p = '', lord_p = '', player1_show = '', player2_show = '', player1_name='' ";
	$mysql .= "where player1_name='$player_name';";
	mysql_query($mysql);
	echo mysql_error();
	
	$mysql  = "update room_ddz set lord = '', flag = '', player1_p = '', player2_p = '', lord_p = '', player1_show = '', player2_show = '', player2_name='' ";
	$mysql .= "where player2_name='$player_name';";
	mysql_query($mysql);
	echo mysql_error();
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
.message_box{
	padding:2px 2px 2px 2px;
	border:1px solid #000000;
	background:#FFFFFF no-repeat;	
	color:#000;
	FONT-SIZE: 13px
}
.moved{
background:url(moved.gif);
}
.over{
background:url(over.gif);
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="landlord onWeb" />
<meta name="author" content="mickie" />
<meta name="keyword" content="mickiedd" />
<meta name="description" content="qq155448883,CSUST" />
<script>
var http_request = false;
function send_request(url) {
	http_request = false;
	if (window.XMLHttpRequest) { 
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
		http_request.overrideMimeType('text/xml');
		}
	} else if (window.ActiveXObject) { 
		try {
		http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
			http_request = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {}
		}
	}
	if (!http_request) {
	alert('不能创建 XMLHttpRequest 对象!');
	return false;
	}
	http_request.onreadystatechange = processRequest;
	http_request.open('GET', url, true);
	http_request.send(null);
}
//处理返回信息
var text = '';
function send_r(url,t){
type = t;
send_request(url);
}
function processRequest() {
	if (http_request.readyState == 1) {
	//alert('正在连接');
	//document.getELementById('network_status').innerHTML = '正在连接..';
	}
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			text = http_request.responseText;
		}
	}
}

</script>
<title>landlord onWeb</title>
</head>

<body bgcolor="#51719E">
<div id="rooms"><font color=white>loading...</font></div>
<script>
function get_rooms(){
	send_request("get_rooms.php?time="+Math.random());
	if(text)
	document.getElementById("rooms").innerHTML = text;
}
get_rooms();
setInterval("get_rooms()", 1000);
</script>
<br />
<table align=center><tr><td><font color=white>2015 &copy TTPGame</font></td></tr>
</body>
</html>
