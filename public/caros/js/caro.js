// hinh anh
var like = '<img src="img/emotion6.gif" width="35px" height="35px">';
var love = '<img src="img/emotion5.gif" width="35px" height="35px">';
var xMark = '<img class="wow flip" data-wow-iteration="infinite" src="img/x-icon.png" width="25px" height="25px">';
var yMark = '<img class="wow swing" data-wow-iteration="infinite" src="img/o-icon.png" width="25px" height="25px">';
var haha = '<img src="img/emotion1.gif" width="35px" height="35px">';
var angry = '<img src="img/emotion2.gif" width="35px" height="35px">';

var TROW = 12; // hang
var TCOL = 20; // cot
var SIZE = [TROW, TCOL]; // so o chieu ngang, chieu doc
var CELL = initArray(); // mang luu diem
var TABLE;
var X = true; // luot danh
var END = false;
var HCOLOR = 'pink';
var VIEW_LOG = false;
 
var signal = new Array();
signal[!X] = haha;
signal[X] = angry;
 
var POINT = new Array();
POINT[X] = 1;
POINT[!X] = 2;
 
var PERSON = new Array();
PERSON[X] = "X";
PERSON[!X] = "Y";

function initArray() {
	var i, j;
	var c = new Array();
	for (i = 0; i < SIZE[0]; i++) {
		c[i] = new Array();
		for (j = 0; j < SIZE[1]; j++)
			c[i][j] = 0;
	}
	return c;
}
 
function loadCell() {
	var c = new Array();
	for (i = 0; i < SIZE[0]; i++) {
		c[i] = new Array();
	}
	var i, cells = document.getElementsByTagName("td");
	for (i = 0; i < cells.length; i++) {
		var cell = cells[i];
		var _pos, _r, _c;
		var r = getAttributes(cell);
		_pos = new String(r["cell"]);
		_r = eval(_pos.split(",")[0]);
		_c = eval(_pos.split(",")[1]);
		c[_r][_c] = cell;
	}
	
	return c;
}

function changeStyle(v) {
	var X = true;
	v = eval(v);
	switch (v) {
		case 1:
			signal[!X] = like;
			signal[X] = love;
			break;
		case 2:
			signal[!X] = xMark;
			signal[X] = yMark;
			break;
		case 3:
			signal[!X] = haha;
			signal[X] = angry;
			break;
		default:
			break;
	}
	repaint();
}
 
function repaint() {
	var i, j;
	var c, r, p;
	for (i = 0; i < SIZE[0]; i++) {
		for (j = 0; j < SIZE[1]; j++) {
			c = TABLE[i][j];
			//alert(i+"-"+j);
			r = getAttributes(c);
			p = eval(r["point"]);
			if (p == POINT[X]) {
				c.innerHTML = signal[X];
			} else if (p == POINT[!X]) {
				c.innerHTML = signal[!X];
			}
		}
	}
}
// ve ban co
function drawBoard() {
	var i, j;
	sBoard = "<table border='0px' cellpadding=0 cellspacing=1 bgcolor=#CCCCCC>";
	for (i = 0; i < SIZE[0]; i++) {
		sBoard += "<tr>";
		for (j = 0; j < SIZE[1]; j++) {
			sBoard += "<td bgcolor=#FFFFFF class=cell cell='" + i + "," + j + "' point=0>&nbsp;</td>";
		}
		sBoard += "</tr>";
	}
	sBoard += "</table>";
	document.write(sBoard);
	TABLE = loadCell();
}
 
// gan su kien click va xu ly
function addCellEvent() {
	var cells = document.getElementsByTagName("td");
	var i;
	var kt=0;
	for (i = 0; i < cells.length; i++) {
		cells[i].onclick = function() {
			var snd = new Audio("theme-music/chat_sound.mp3");
			snd.play();
			if (END) {
				warn("<p class='wow fadeIn' data-wow-iteration='infinite' style='display: inline-block;'>Xong rồi</p>, <p class='wow bounce' data-wow-iteration='infinite' style='display: inline-block;'><a href='javascript:location.href=location.href'>Chơi nữa không !</a></p>");
				return;
			}
			var r;
			r = getAttributes(this);
			//roalert(r["point"]);
			if (r["point"] != 0) { // o da duoc danh dau
				warn("<p class='wow shake'>Ô này được đánh rồi cha nội -_-</p>");
				return;
			}
			X = !X;
			setPoint(this, POINT[X]);
			this.innerHTML = signal[X];
			//alert(i);
			warn(signal[!X] + " <p class='wow tada' data-wow-iteration='infinite' style='display: inline-block; color: aqua; font-weight: bold;'>đi nè :P</i>");
			var _pos, _r, _c;
			_pos = new String(r["cell"]);
			_r = eval(_pos.split(",")[0]);
			_c = eval(_pos.split(",")[1]);
			CELL[_r][_c] = POINT[X];
			log(_r + " x " + _c + " = " + signal[X]);
			//kt++;
			ajax('test.php?x='+_r+'&y='+_c,'hienthi');
			var w = checkWin(_r, _c);
			if (w) {
				var snd2 = new Audio("theme-music/winmsg.m4a");
				var wins = new Audio("theme-music/winning.mp3");
				wins.play();
				wins.addEventListener("ended", function(){
					snd2.currentTime = 0;
					snd2.play();
				});
				warn(signal[X] + " <p class='wow flash' data-wow-iteration='infinite' style='font-weight: bold; color: green; display: inline-block;'>Thắng rồi.</p> <p class='wow bounceIn' data-wow-iteration='infinite' style='display: inline-block;'><a href='javascript:location.href=location.href'>Chơi tiếp hông nè!</a></p>");
			}
		}
	}
}
 
 
// kiem tra sau khi danh o r,c da co ai thang chua
function checkWin(r, c) {
	var i, j;
	var t, v = CELL[r][c], nv, pv;
	var rhead, rtail;
	var chead, ctail;
	// cung hang
	t = 1;
	chead = c;
	rhead = r;
	rtail = r;
	ctail = c;
	for (j = c + 1; j < SIZE[1]; j++) {
		nv = CELL[r][j];
		if (nv == v) {
			t += 1;
			ctail = j;
		}
		else
			break;
	}
	for (j = c - 1; j >= 0; j--) {
		pv = CELL[r][j];
		if (pv == v) {
			t += 1;
			chead = j;
		}
		else
			break;
	}
	
	if (t >= 5) {
		// highlight
		for (j = chead; j <= ctail; j++) {
			TABLE[r][j].style.backgroundColor = "red";
		}
		END = true;
		return true;
	}
	// cung cot
	t = 1;
	chead = c;
	rhead = r;
	rtail = r;
	ctail = c;
	for (i = r + 1; i < SIZE[0]; i++) {
		nv = CELL[i][c];
		if (nv == v) {
			t += 1;
			rtail = i;
		}
		else
			break;
	}
	for (i = r - 1; i >= 0; i--) {
		pv = CELL[i][c];
		if (pv == v) {
			t += 1;
			rhead = i;
		}
		else
			break;
	}
	if (t >= 5) {
		// highlight
		for (i = rhead; i <= rtail; i++) {
			TABLE[i][c].style.backgroundColor = "brown";
		}
		END = true;
		return true;
	}
	// cheo /
	chead = c;
	ctail = c;
	rhead = r;
	rtail = r;
	t = 1;
	i = r - 1;
	for (j = c + 1; j < SIZE[1]; j++) {
		if (i < 0) break;
		pv = CELL[i--][j];
		if (pv == v) {
			t += 1;
			ctail = j;
			rtail = i+1;
		}
		else
			break;
	}
	i = r + 1;
	for (j = c - 1; j >= 0; j--) {
		if (i >= SIZE[0]) break;
		pv = CELL[i++][j];
		if (pv == v) {
			t += 1;
			chead = j;
			rhead = i-1;
		}
		else
			break;
	}
	if (t >= 5) {
		END = true;
		for (j = chead; j <= ctail; j++) {
			TABLE[rhead--][j].style.backgroundColor = "lightgreen";
		}
		return true;
	}
	// cheo \
	chead = c;
	ctail = c;
	rhead = r;
	rtail = r;
	t = 1;
	i = r + 1;
	for (j = c + 1; j < SIZE[1]; j++) {
		if (i >= SIZE[0]) break;
		pv = CELL[i++][j];
		if (pv == v) {
			t += 1;
			ctail = j;
			rtail = i-1;
		}
		else
			break;
	}
	i = r - 1;
	for (j = c - 1; j >= 0; j--) {
		if (i < 0) break;
		pv = CELL[i--][j];
		if (pv == v) {
			t += 1;
			chead = j;
			rhead = i+1;
		}
		else
			break;
	}
	if (t >= 5) {
		END = true;
		for (j = chead; j <= ctail; j++) {
			TABLE[rhead++][j].style.backgroundColor = "lightblue";
		}
		return true;
	}	
}
 
// thay doi diem cho o (khi duoc danh dau)
function setPoint(cell, value) {
	cell.attributes.getNamedItem("point").value = value;
}
 
// lay toan bo cac attribute cua o, tra ve mang dang dictionary
function getAttributes(cell) {
	var r = new Array();
	var as = cell.attributes;
	for (i = 0; i < as.length; i++) {
		r[as[i].name] = as[i].value;
	}
	return r;
}
 
// luu cac buoc danh dau
function log(s) {
	var c;
	c = document.getElementById("state").innerHTML;
	c = (c == "") ? (c) : (c + "<br>");
	document.getElementById("state").innerHTML = c + s;
}
 
// thong bao tuong ung sau su kien click
function warn(s) {
	document.getElementById("msg").innerHTML = s;
}