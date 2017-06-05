<?php
	include "./dbconnect.php";
	mysql_query("update room_ddz set player1_name = '', player2_name = '' where ID = '".$_GET[ID]."'");
	
			
	mysql_query("update user_ddz set win = win + 1, score = score + 3 where name = '$player_name'");
	
	if ($player1_name == '')
		mysql_query("update user_ddz set run = run + 1, lost = lost + 1 where name = '$player1_name'");
	else
		mysql_query("update user_ddz set run = run + 1, lost = lost + 1 where name = '$player2_name'");
?>