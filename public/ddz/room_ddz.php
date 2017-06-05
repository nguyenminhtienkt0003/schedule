<?php
include "./dbconnect.php";
$sql = mysql_query("select * from room_ddz where ID = '".$_GET[ID]."'");
$num = mysql_num_rows($sql);
if(!$num)
	die(房间不存在！);

$name = mysql_result($sql, 0, name);
$player1_name = mysql_result($sql, 0, player1_name);
$player2_name = mysql_result($sql, 0, player2_name);

if($player_name == '' || ($player_name != $player1_name && $player_name != $player2_name))
{
	header("location:join.php?ID=".$_GET[ID]);
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="landlord onWeb" />
<meta name="author" content="mickie" />
<meta name="keyword" content="mickiedd" />
<meta name="description" content="qq155448883,CSUST" />
<title>斗地主onWeb</title>
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
</style>
<span id="point" style="display:none"><img src=images/point.gif></span>
<span style="display:none">
<img src="images/loading.gif" />
<img src=images/show_hand.gif>
<img src=images/no_show_hand.gif>
<img src=images/lord.gif>
<img src=images/no_lord.gif>
<img src=images/NO.gif>
<img src=images/BG.gif>
</span>
<script>
function copy_url(){
if(window.clipboardData.setData('text',document.location.href.replace('room_ddz.php','guest.php')))
alert('复制成功！Ctrl + v 把地址发送给好友');
}
function pai_v(pai){
	var v;
	if(pai == '3' || pai == 'F3' || pai == 'T3' || pai == 'H3')
		v = 3;
	if(pai == '4' || pai == 'F4' || pai == 'T4' || pai == 'H4')
		v = 4;
	if(pai == '5' || pai == 'F5' || pai == 'T5' || pai == 'H5')
		v = 5;
	if(pai == '6' || pai == 'F6' || pai == 'T6' || pai == 'H6')
		v = 6;
	if(pai == '7' || pai == 'F7' || pai == 'T7' || pai == 'H7')
		v = 7;
	if(pai == '8' || pai == 'F8' || pai == 'T8' || pai == 'H8')
		v = 8;
	if(pai == '9' || pai == 'F9' || pai == 'T9' || pai == 'H9')
		v = 9;
	if(pai == '10' || pai == 'F10' || pai == 'T10' || pai == 'H10')
		v = 10;
	if(pai == '11' || pai == 'F11' || pai == 'T11' || pai == 'H11')
		v = 11;
	if(pai == '12' || pai == 'F12' || pai == 'T12' || pai == 'H12')
		v = 12;
	if(pai == '13' || pai == 'F13' || pai == 'T13' || pai == 'H13')
		v = 13;
	if(pai == '1' || pai == 'F1' || pai == 'T1' || pai == 'H1')
		v = 14;
	if(pai == '2' || pai == 'F2' || pai == 'T2' || pai == 'H2')
		v = 15;
	if(pai == 'JOKE1')
		v = 16;
	if(pai == 'JOKE2')
		v = 17;
	if(pai == 'NO')
		v = 0;
	return v;
}
function pai_a(pai){
//return 1;
	var split_pai = pai.split(",");
	var pai_num = split_pai.length - 1;
		var count = new Array(1,1,1,1,1,1,1,1,1,1,1,1);
		var k = 0;
		for(var i = 1;i < pai_num;i ++)
		{
			if(pai_v(split_pai[i]) == pai_v(split_pai[i - 1]))
			count[k] ++;
			else
			k ++;
		}
		var r = '';
		for(var i = 0;i < count.length;i ++)
		{
			r += count[i]+",";
		}
		//Đôi
		if(pai_num == 2 && r == '2,1,1,1,1,1,1,1,1,1,1,1,')
			return pai_c(pai_v(split_pai[0]), pai_num);
		//Ba con
		if(pai_num == 3 && r == '3,1,1,1,1,1,1,1,1,1,1,1,')
			return pai_c(pai_v(split_pai[0]), pai_num);
		//Bốn con
		if(pai_num == 4 && r == '4,1,1,1,1,1,1,1,1,1,1,1,')
			return pai_c(pai_v(split_pai[0]), pai_num);
		//四带二只
		if(pai_num == 6 && (r == '4,1,1,1,1,1,1,1,1,1,1,1,' || r == '1,4,1,1,1,1,1,1,1,1,1,1,' || r == '1,1,4,1,1,1,1,1,1,1,1,1,'))
		{
			if(count[0] == 4)
			return pai_c(pai_v(split_pai[3]), pai_num);
			else if(count[1] == 4)
			return pai_c(pai_v(split_pai[4]), pai_num);
			else if(count[2] == 4)
			return pai_c(pai_v(split_pai[5]), pai_num);
		}
		//四带二对
		if(pai_num == 8 && (r == '4,2,2,1,1,1,1,1,1,1,1,1,' || r == '2,4,2,1,1,1,1,1,1,1,1,1,' || r == '2,2,4,1,1,1,1,1,1,1,1,1,'))
		{
			if(count[0] == 4)
			return pai_c(pai_v(split_pai[3]), pai_num);
			else if(count[1] == 4)
			return pai_c(pai_v(split_pai[5]), pai_num);
			else if(count[2] == 4)
			return pai_c(pai_v(split_pai[7]), pai_num);
		}
		//三带一
		if(pai_num == 4 && (r == '3,1,1,1,1,1,1,1,1,1,1,1,' || r == '1,3,1,1,1,1,1,1,1,1,1,1,'))
		{
			if(count[0] > count[1])
			return pai_c(pai_v(split_pai[2]), pai_num);
			else
			return pai_c(pai_v(split_pai[3]), pai_num);
		}
		//三带二
		if(pai_num == 5 && (r == '3,2,1,1,1,1,1,1,1,1,1,1,' || r == '2,3,1,1,1,1,1,1,1,1,1,1,'))
		{
			if(count[0] > count[1])
			return pai_c(pai_v(split_pai[2]), pai_num);
			else
			return pai_c(pai_v(split_pai[4]), pai_num);
		}
		//连对
		if((pai_num == 6 && r == '2,2,2,1,1,1,1,1,1,1,1,1,') || (pai_num == 8 && r == '2,2,2,2,1,1,1,1,1,1,1,1,') || (pai_num == 10 && r == '2,2,2,2,2,1,1,1,1,1,1,1,') || (pai_num == 12 && r == '2,2,2,2,2,2,1,1,1,1,1,1,') || (pai_num == 14 && r == '2,2,2,2,2,2,2,1,1,1,1,1,') || (pai_num == 16 && r == '2,2,2,2,2,2,2,3,1,1,1,1,') || (pai_num == 18 && r == '2,2,2,2,2,2,2,2,2,1,1,1,') || (pai_num == 20 && r == '2,2,2,2,2,2,2,2,2,2,1,1,'))
		{
			var flag = 0;
			for(var i = 2;i < pai_num;i += 2)
			{
				if(pai_v(split_pai[i]) - pai_v(split_pai[i - 1]) != 1)
				{
					flag = 1;
					break;
				}
			}		
			if(flag == 0){
			return pai_c(pai_v(split_pai[pai_num - 1]), pai_num);
			}
		}
		//飞机
		if((pai_num == 3+3+2 && (r == '3,3,2,1,1,1,1,1,1,1,1,1,' || r == '2,3,3,1,1,1,1,1,1,1,1,1,')) || (pai_num == 3+3+2+2 && (r == '3,3,2,2,1,1,1,1,1,1,1,1,' || r == '2,3,3,2,1,1,1,1,1,1,1,1,' || r == '2,2,3,3,1,1,1,1,1,1,1,1,')) || (pai_num == 3+3+1+1 && (r == '3,3,1,1,1,1,1,1,1,1,1,1,' || r == '1,3,3,1,1,1,1,1,1,1,1,1,' || r == '1,1,3,3,1,1,1,1,1,1,1,1,')))
		{
			if(count[0] == 3 && count[1] == 3 && pai_v(split_pai[3]) - pai_v(split_pai[2]) == 1)
			return pai_c(pai_v(split_pai[3]), pai_num);//3322,3311,332
			if(count[0] == 2 && count[1] == 3 && pai_v(split_pai[5]) - pai_v(split_pai[4]) == 1)
			return pai_c(pai_v(split_pai[5]), pai_num);//2332,233
			if(count[0] == 1 && count[1] == 3 && pai_v(split_pai[4]) - pai_v(split_pai[3]) == 1)
			return pai_c(pai_v(split_pai[4]), pai_num);//1331
			if(count[0] == 2 && count[1] == 2 && pai_v(split_pai[7]) - pai_v(split_pai[6]) == 1)
			return pai_c(pai_v(split_pai[7]), pai_num);//2233
			if(count[0] == 1 && count[1] == 1 && pai_v(split_pai[5]) - pai_v(split_pai[4]) == 1)
			return pai_c(pai_v(split_pai[5]), pai_num);//1133
		}
		//对王
		if(pai_num == 2 && ((pai_v(split_pai[0]) == 16 && pai_v(split_pai[1]) == 17) || (pai_v(split_pai[0]) == 17 && pai_v(split_pai[1]) == 16)))
		return pai_c(100, pai_num);
		//单
		if(pai_num == 1)
		return pai_c(pai_v(split_pai[0]), pai_num);
		//顺子
		if(pai_v(split_pai[pai_num - 1]) <= pai_v(1) && pai_num >= 5 && r == '1,1,1,1,1,1,1,1,1,1,1,1,')
		{
			var flag = 0;
			for(var i = 1;i < pai_num;i ++)
			{
				if(pai_v(split_pai[i]) - pai_v(split_pai[i - 1]) != 1)
				{
					flag = 1;
					break;
				}
			}
			if(flag == 0)
			return pai_c(pai_v(split_pai[pai_num - 1]), pai_num);
		}

	return 0;
}
function pai_c(v,num){
	var arr = new Array();
	arr[0] = v;
	arr[1] = num;
	return arr;
}
<?php
echo "var player1_name = '".$player1_name."';";
echo "var player2_name = '".$player2_name."';";
echo "var player_name = '".$player_name."';";
if($player_name == $player1_name)
	echo "player_ID = 'player1';";
else
	echo "player_ID = 'player2';";
?>
var p = new Array();
var ani_count = 0;
var lord = '';
var flag = '';
var player1_show = '';
var player2_show = '';
function no_show_p(){
	var p_show_var = 'NO,';
	send_r("show_p.php?ID=<?php echo $_GET[ID];?>&player_ID="+player_ID+"&p_show_var="+p_show_var+"&time="+Math.random(),1);
}
function show_p(){
	if(flag != player_ID)
		alert("It's not your turn now!");
	else{
		var p_show = new Array();
		var p_show_var = '';
		var j = 0;
		for(var i = 0;i < p.length - 1;i ++)
		{
			if(document.getElementById('self_p_top_'+p[i]).innerHTML)
			{
				p_show[j ++] = p[i];
				p_show_var += p[i]+',';
			}
		}
		if(p_show_var == '')
			alert('Chưa chọn bài!');
		else{
			var self_pai = pai_a(p_show_var);
			if(player_ID == 'player1')
			{
				if(player2_show)
					var ani_pai = pai_a(player2_show);
				else
					var ani_pai = new Array(0,0);
			}else{
				if(player1_show)
					var ani_pai = pai_a(player1_show);
				else
					var ani_pai = new Array(0,0);
			}
			if(self_pai[0] && (self_pai[0] == 100 || ani_pai[0] == 0 || (ani_pai[0] != 100 && ((self_pai[1] == ani_pai[1] && self_pai[0] - ani_pai[0] > 0) || self_pai[1] == 4))))
				send_r("show_p.php?ID=<?php echo $_GET[ID];?>&player_ID="+player_ID+"&p_show_var="+p_show_var+"&time="+Math.random(),1);
			else
				alert("Bài không phù hợp quy tắc!");
		}
	}
}
function do_show_p(p_ori,object){

	var split_p = p_ori.split(",");
	var show = '<table align=center border="0" cellpadding="0" cellspacing="0"><tr>';

	for(var i = 0;i < split_p.length - 1;i ++)
	{
	show += '<td background="images/'+split_p[i]+'.gif" width='+(i==split_p.length-1-1?'71':'36')+' height=96></td>';
	
	}
	
	show += '</tr></table>';
	document.getElementById(object).innerHTML = show;
}
function click_p(p){

	if(document.getElementById('self_p_top_'+p).innerHTML)
	document.getElementById('self_p_top_'+p).innerHTML = "";
	else
	document.getElementById('self_p_top_'+p).innerHTML = document.getElementById('point').innerHTML;
}

//用户信息
var user_info = '';
function do_user_info(player1_face, player2_face, player1_win_p, player2_win_p, player1_run_p, player2_run_p){

	user_info = '<table align=center>';
	if(player_ID == 'player1')
	{
		user_info += '<tr><td width=120>Bạn chơi:'+player2_name+'</td><td width=120>Thắng: '+player2_win_p+' %</td><td width=120>Bỏ cuộc: '+player2_run_p+' %</td></tr>';
		user_info += '<tr><td width=120>Bổn gia:'+player1_name+'</td><td width=120>Thắng: '+player1_win_p+' %</td><td width=120>Bỏ cuộc: '+player1_run_p+' %</td></tr>';
	}else{
		user_info += '<tr><td width=120>Bạn chơi:'+player1_name+'</td><td width=120>Thắng: '+player1_win_p+' %</td><td width=120>Bỏ cuộc: '+player1_run_p+' %</td></tr>';
		user_info += '<tr><td width=120>Bổn gia:'+player2_name+'</td><td width=120>Thắng: '+player2_win_p+' %</td><td width=120>Bỏ cuộc: '+player2_run_p+' %</td></tr>';
	
	}
	user_info += '</table>';

}

//本家

var self_p = '';
function do_self_p(P){
	
	
	p = P.split(",");

	self_p = '<table align=center border="0" cellpadding="0" cellspacing="0">';
	
	self_p += '<tr>';
	
	for(var i=0;i<p.length-1;i++)
	{
	self_p += '<td width='+(i==p.length-1?'71':'36')+' height=24 align=center>';
	self_p += '<div id=self_p_top_'+p[i]+'></div>';
	self_p += '</td>';
	}
	
	self_p += '</tr>';
	self_p += '<tr>';
	
	
	for(var i=0;i<p.length-1;i++)
	{
	self_p += '<td background="images/'+p[i]+'.gif" width='+(i==p.length-2?'71':'36')+' height=96>';
	self_p += '<a href="javascript:void(0);" onclick="click_p(\''+p[i]+'\');"><img src=images/blank'+(i==p.length-2?'_full':'')+'.gif border=0></a>';
	self_p += '</td>';
	}
	
	self_p += '</tr>';
	
	self_p += '</table>';
}


//对家
var ani_p = '';
function do_ani_p(ani_num){
	ani_p = '<table align=center border="0" cellpadding="0" cellspacing="0"><tr>';
	for(var i=0;i<ani_num;i++)
	{
		ani_p += '<td background="images/BG.gif" width='+(i==ani_num-1?'71':'36')+' height=96></td>';
	}
	ani_p += '</tr></table>';
}
//对家出牌区
var ani_show = '<table align=center height=100><tr><td><div id=ani_show></div></td></tr></table>';

//本家出牌区
var self_show = '<table align=center height=100><tr><td><div id=self_show></div></td></tr></table>';

//本家按纽
var self_button = '<table align=center><tr><td align=center><div id=self_button></div></td></tr></table>';

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
var type = 0;
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
			if(type == 0){
				var text = http_request.responseText.split("|");
				player1_name = text[0];
				player2_name = text[1];
				

				lord = text[4];
				lord_p = text[5];
				flag = text[6];
				
				if(status != 'wait'){
					do_ani_p(text[3]);
					do_self_p(text[2]);
					do_user_info(text[9], text[10], text[11], text[12], text[13], text[14]);
				}
				player1_show = text[7];
				player2_show = text[8];
				
				
				
			}
		}
	}
}

var allow_c = 1;
var main_echo = '';

var status = 'begin';
var kaiguan_1 = 0;
var now_flag = '';
function get_info(){
//对家逃跑

		if(status == 'ing' && (player1_name == '' || player2_name == ''))
		{
			send_r("end.php?ID=<?php echo $_GET[ID];?>&player_ID="+player_ID+"&time="+Math.random(), 1);			
			alert("Người đối diện đã chạy trốn, Chiến thắng thuộc về bạn!");
			document.location.href = 'hall.php'
		}

//END
	if(now_flag != flag)
	{
		now_flag = flag;
		status = 'begin';

	}

	if(flag && kaiguan_1 == 0)
	{
		status = 'begin';
		kaiguan_1 = 1;
	}

	if(player1_name == '' || player2_name == ''){
		document.getElementById('main_echo').innerHTML = '<br><br><br><table align=center><tr><td align=center><img src=images/loading.gif></td></tr><tr><td align=center>Đợi người đối diện vào!<br/>'+(player_name == 'guest'?'':"<a title=\"Mời bạn vào\" href=javascript:void(0); onclick=copy_url()><img src=\"images/invite.gif\" border=0></a>")+'</td></tr></table>';
		document.getElementById("loading").style.display = "none";
		status = 'wait';
	}else if(status == 'wait'){
		status = 'begin';
	}
	
	if(status == 'begin' && self_p){
		main_echo = '';
		main_echo += ani_p;
		main_echo += ani_show;
		main_echo += user_info;
		main_echo += self_show;
		main_echo += self_button;
		main_echo += self_p;
		allow_c = 0;
		document.getElementById("loading").style.display = "none";
		document.getElementById('main_echo').innerHTML = main_echo;
		
		if(flag == player_ID)
		{
			do_show_p(player_ID == 'player1'?player2_show:player1_show, 'ani_show');
			document.getElementById('self_button').innerHTML = '<a href=javascript:void(0); onclick="show_p();"><img src=images/show_hand.gif border=0></a> ';
			if((player_ID == 'player2' && player1_show != '' && player1_show!= 'NO,') || (player_ID == 'player1' && player2_show != '' && player2_show!= 'NO,'))
			{
			document.getElementById('self_button').innerHTML += '<a href=javascript:void(0); onclick="no_show_p();"><img src=images/no_show_hand.gif border=0></a> ';
			}
		}
		else{
			document.getElementById('self_button').innerHTML = '<table><tr><td align=center><img src=images/loading.gif></td></tr><tr><td align=center>Đợi lượt người chơi!</td></tr></table>';
			do_show_p(player_ID == 'player1'?player1_show:player2_show, 'self_show');
		}
		document.getElementById('self_button').innerHTML += '<a href=hall.php><img src=images/run.gif border=0></a> ';
		status = 'ing';
	}

	if(lord == '' && self_p)
		document.getElementById('self_button').innerHTML = '<a href=javascript:void(0); onclick="send_r(\'get_lord.php?ID=<?php echo $_GET[ID];?>&player_ID='+player_ID+'&time='+Math.random()+'\',1)"><img src=images/lord.gif border=0></a> <a href=javascript:void(0); onclick="send_r(\'get_lord.php?action=no&ID=<?php echo $_GET[ID];?>&player_ID='+player_ID+'&time='+Math.random()+'\',1)"><img src=images/no_lord.gif border=0></a>';

	send_r("get_info.php?ID=<?php echo $_GET[ID];?>&player_ID="+player_ID+"&time="+Math.random(),0);
}

</script>
</head>

<body topmargin="0" leftmargin="0" background="images/room/bg.gif">
<script>
document.write('<div id=loading><br><br><br><table align=center><tr><td align=center><img src=images/loading.gif></td></tr><tr><td align=center>Đăng nhập trò chơi!</td></tr></table></div>');
</script>
<div id="pla" style="display:none">
<table align=center><tr><td>
<div id="main_echo"></div>
</td></tr></table>
</div>
</body>
<script>

setInterval("get_info()", 1000);
function init(){
	document.getElementById("pla").style.display = "";
}
window.onload = init;
</script>
</html>