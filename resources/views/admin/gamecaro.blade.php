
<!DOCTYPE html>
<html>
<head>
    <title>Caro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <!-- 
        <script> 
            function ajax(url,id,eval_str){
                if(document.getElementById){var x=(window.ActiveXObject)?new ActiveXObject("Microsoft.XMLHTTP"):new     XMLHttpRequest();}
                if(x){x.onreadystatechange=function() {
                    el=document.getElementById(id);
                    el.innerHTML='';
                    if(x.readyState==4&&x.status==200){
                        el.innerHTML='';
                        el=document.getElementById(id);
                        el.innerHTML=x.responseText;
                        eval(eval_str);
                    }   
                }
                x.open("GET",url,true);x.send(null);
            }
        }
        </script>  -->
 
   
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <link href="caros/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="caros/js/caro.js"></script>
    <link rel="stylesheet" href="caros/css/animate.css">
    <script src="caros/js/wow.min.js"></script>
</head>
<body>
    <p id="intro" class="wow shake" data-wow-iteration="infinite" data-wow-duration="4s">TRÒ CHƠI CARO</p>
    <p id="chang-style">Đổi định dạng</p>   
    <div id="style-select">
        <p><input type=radio name=style value=1 onclick="changeStyle(this.value);"><img src="caros/img/emotion6.gif" width="35px" height="35px"> <img src="caros/img/emotion5.gif" width="35px" height="35px">
        <p><input type=radio name=style value=2 onclick="changeStyle(this.value);"><img class="wow flip" data-wow-iteration="infinite" src="caros/img/x-icon.png" width="25px" height="25px"> <img class="wow swing" data-wow-iteration="infinite" src="caros/img/o-icon.png" width="25px" height="25px"></p>
        <p><input type=radio name=style value=3 onclick="changeStyle(this.value);" checked><img src="caros/img/emotion1.gif" width="35px" height="35px"> <img src="caros/img/emotion2.gif" width="35px" height="35px"></p>
    </div>
    <p id="msg">Sẵn sàng</p>
    <embed src="caros/img/wow.gif" width="100px" height="100px">  
    <embed id="sad" src="caros/img/sad.gif" width="100px" height="100px">  
    <p id="state"></p>
    <script type="text/javascript">
        drawBoard();
        addCellEvent();
        new WOW().init();
    </script>
</body>
</html>
<script> 
            function ajax(url,id,eval_str){
                if(document.getElementById){var x=(window.ActiveXObject)?new ActiveXObject("Microsoft.XMLHTTP"):new     XMLHttpRequest();}
                if(x){x.onreadystatechange=function() {
                    el=document.getElementById(id);
                    el.innerHTML='';
                    if(x.readyState==4&&x.status==200){
                        el.innerHTML='';
                        el=document.getElementById(id);
                        el.innerHTML=x.responseText;
                        eval(eval_str);
                    }   
                }
                x.open("GET",url,true);x.send(null);
            }
        }
        </script> 
