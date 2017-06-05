<?php
ob_start();
header('Content-Type:text/html;charset=utf-8');
if($_GET[action] == install)
{
	if(!@mysql_connect($_POST[server], $_POST[username], $_POST[password]) || !@mysql_select_db($_POST[database])){
	
	}else{
		$config = "<?php
if(!mysql_connect(".$_POST[server].",".$_POST[username].",".$_POST[password]."))
die(数据连接失败！);
mysql_select_db(".$_POST[database].");
?>";
		$fp = @fopen("./config.inc.php", "wb");
		if(@fwrite($fp, $config) && @fclose($fp))
		{
			$sql_1 = "CREATE TABLE `room_ddz` (
  `ID` mediumint(9) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `player1_name` varchar(25) NOT NULL,
  `player2_name` varchar(25) NOT NULL,
  `lord` enum('player1','player2') NOT NULL,
  `flag` enum('player1','player2') NOT NULL,
  `player1_p` varchar(100) NOT NULL,
  `player2_p` varchar(100) NOT NULL,
  `lord_p` varchar(20) NOT NULL,
  `player1_time` int(12) NOT NULL,
  `player2_time` int(12) NOT NULL,
  `system_time` int(12) NOT NULL,
  `player1_show` varchar(100) NOT NULL,
  `player2_show` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID`),
  KEY `lord` (`lord`,`flag`,`player1_time`,`player2_time`,`system_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;";
			$sql_2 = "CREATE TABLE `user_ddz` (
  `ID` mediumint(9) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `time` int(12) NOT NULL,
  `face` int(2) NOT NULL,
  `win` int(9) NOT NULL,
  `lost` int(9) NOT NULL,
  `run` int(9) NOT NULL,
  `score` int(9) NOT NULL,
  PRIMARY KEY  (`ID`),
  KEY `name` (`name`,`password`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";
			$sql_3 = "INSERT INTO `room_ddz` (`ID`, `name`, `player1_name`, `player2_name`, `lord`, `flag`, `player1_p`, `player2_p`, `lord_p`, `player1_time`, `player2_time`, `system_time`, `player1_show`, `player2_show`) VALUES 
(1, '房间一号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(2, '房间二号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(3, '房间三号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(4, '房间四号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(5, '房间五号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(6, '房间六号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(7, '房间七号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(8, '房间八号', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(9, '房间九号', '', '', '', '', '', '', '', 0, 0, 0, '', '');";
			$sql_4 = "INSERT INTO `user_ddz` (`ID`, `name`, `password`, `time`, `face`, `win`, `lost`, `run`, `score`) VALUES 
(1, 'guest', '084e0343a0486ff05530df6c705c8bb4', 0, 2, 0, 0, 0, 0);";
			mysql_connect($_POST[server], $_POST[username], $_POST[password]);
			if(@mysql_select_db($_POST[database])){
				mysql_query("SET NAMES 'UTF8'");
				@mysql_query("drop table `room_ddz`");
				@mysql_query("drop table `user_ddz`");
				if(mysql_query($sql_1) && mysql_query($sql_2)&& mysql_query($sql_3)&& mysql_query($sql_4))
				{
					header("location:index.php");
					exit;
				}
				else
				echo "<script>alert('U cài đặt trình điều khiển không lá chắn');</script>";
			}else{
				echo "<script>alert('Kết nối dữ liệu không thành công!');</script>";
			}
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
font-size:15px;
color:white;
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
<title>Setup</title>
</head>

<body bgcolor="#EBF6E8">
<form name=form method=post action=install.php?action=install>
<br />
<br />

<table class="box" align=center><tr><td width="296">
	<table>
		<tr><td align="right">Server:</td>
		<td><input class="box_input" type=text name=server value="localhost"></td></tr>
		<tr><td align="right">Cơ sở dữ liệu:</td>
		<td><input class="box_input" type=text name=database></td></tr>
		<tr><td align="right">Tài khoản DB</td>
		<td><input class="box_input" type=text name=username></td></tr>
		<tr><td align="right">Mật khẩu DB</td>
		<td><input class="box_input" type=text name=password></td></tr>
		<tr><td></td><td><input class="box_submit" type=submit value=Xong></td></tr>
	</table>
	
</td></tr></table>
</form>
</body>
</html>
<span style="display:none">
<script type="text/javascript" src="http://js.tongji.yahoo.com.cn/1/100/33/ystat.js"></script><noscript><a href="http://js.tongji.yahoo.com.cn"><img src=http://js.tongji.yahoo.com.cn/1/100/33/ystat.gif></a></noscript></span>