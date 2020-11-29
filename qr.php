<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<script type="text/javascript" src="qrcode.js"></script>
<script src="jquery.min.js"></script>
<form  method="post" onsubmit="generate(); return false;">
<input id="text" type="text" value="" style="displaynone;" id="a" size="30" autofocus><br />
<div id="qrcode" style="  align-items: center; justify-content: center; display: flex;"></div>
</form>
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100

});

function generate () {		
	var elText = document.getElementById("text");
	
	 if (!elText.value) {
    alert("Input a text");
    elText.focus();
    return;
  }
	
	qrcode.makeCode(elText.value);
}

</script>
<form method="post" name="fm" id="form">
<input type="file" id="file" name="file" />
<p><h4>Qr content :<span id="content" style="display:none;" ></span></h4></p>
<input type="text" id="aaa" />
<input type="submit" value="ok" />
</form>
<script src="qrReader.js"></script>
<script>
var con=document.getElementById('content');
var a=document.getElementById('aaa');

form.addEventListener("submit",f);
function f(e){
if(con.textContent=='Wbgb-a915-fgv0-aqw1 $$$'){
e.preventDefault();
location.href = 'form.php';
}}
</script>
</body>
</html>
