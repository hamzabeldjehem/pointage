<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>lancement</title>
<body background="im/3.jpg">
</head>
<body>
<style>
.sel{
font-size:17px;
}
</style>
<br><br><br><br><br><br><br>
<center>
<form method="post" name="fm" id="form">
<input type="file" class="sel" id="file" name="file" />
<p><h4><span id="content" style="display:none;" ></span></h4></p>

<input type="submit" class="sel" value="ok" />
</form>
</center>
<script src="qrReader.js"></script>
<script>
var con=document.getElementById('content');

form.addEventListener("submit",f);
function f(e){
if(con.textContent=='Wbgb-a915-fgv0-aqw1 $$$'){
e.preventDefault();
location.href = 'form.php';
}
else alert('Incorrect');
}
</script>
</body>
</html>

