<?php
	function echohtml($para2, $para3)
	{
		echo ('<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>ZerUniverse</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper" style="padding:50px;">
	<!-- Begin Content -->
	<h1 class="title">Password Generator</h1>
	<div class="line"></div>
	<form>
    Parameter (input an integer): <input type="text"  id="pa1" value="1"/><br />
    <input type="button" class="btn" id="chk" onclick="goget();" value=" Generate " /> </form><br /><br />
    <span id="r1" class="ppla" style="display:none; color:Red"></span><br />
    <span id="r2" class="ppla" style="display:none; color:Red"></span><br />
    <span id="r3" class="ppla"  style="display:none; color:Red"></span><br /><br /><br /><br /><br />
    <!-- Begin Footer -->
    <div id="footer">
  	&copy;Jeffery Zhao; 2014. Alpha<br /><br />
    </div>
    <!-- End Footer -->
    
    

</div>

</body>
</html>
<script type="text/javascript">
function getcharr(var1)
{
	var var2=parseInt(var1);
	switch(var2)
	{
  case 0: return "0";
  case 1: return "1";
  case 2: return "2";
  case 3: return "3";
  case 4: return "4";
  case 5: return "5";
  case 6: return "6";
  case 7: return "7";
  case 8: return "8";
  case 9: return "9";
  case 10: return "a";
  case 11: return "b";
  case 12: return "c";
  case 13: return "d";
  case 14: return "e";
  case 15: return "f";
  case 16: return "g";
  case 17: return "h";
  case 18: return "i";
  case 19: return "j";
  case 20: return "k";
  case 21: return "l";
  case 22: return "m";
  case 23: return "n";
  case 24: return "o";
  case 25: return "p";
  case 26: return "q";
  case 27: return "r";
  case 28: return "s";
  case 29: return "t";
  case 30: return "u";
  case 31: return "v";
  case 32: return "w";
  case 33: return "x";
  case 34: return "y";
  case 35: return "z";
  case 36: return "A";
  case 37: return "B";
  case 38: return "C";
  case 39: return "D";
  case 40: return "E";
  case 41: return "F";
  case 42: return "G";
  case 43: return "H";
 case  44: return "I";
  case 45: return "J";
  case 46: return "K";
  case 47: return "L";
  case 48: return "M";
  case 49: return "N";
  case 50: return "O";
  case 51: return "P";
 case  52: return "Q";
  case 53: return "R";
  case 54: return "S";
  case 55: return "T";
  case 56: return "U";
  case 57: return "V";
 case  58: return "W";
  case 59: return "X";
 case  60: return "Y";
 case  61: return "Z";
 case  62: return "@";
 case  63: return ".";
	}
}
function goget()
{
        var pa1 = parseInt($("#pa1").val()); 
		var i,j;
		var str1="";
		var str2="";
		var str3="";
		var base="A";
		j=pa1;
        $(".ppla").hide();
		str2=str2+getcharr(pa1 % 36);
		str3=str3+getcharr((pa1+3) % 64);
		for(i=1;i<12;i++)
		{
			if (pa1>1000000) pa1=parseInt(pa1 / 8282);
			pa1=pa1+313;
			pa1=pa1*23;
			pa1=pa1-7;
			str2=str2+getcharr(pa1 % 36);
			pa1=pa1+'.$para2.';
			pa1=pa1*31;
			pa1=pa1-11;
			str3=str3+getcharr(pa1 % 64);
		}
		str3=str3+getcharr((pa1*71+28)% 64);
		str3=str3+getcharr((pa1*99+81)% 64);
		pa1=j;
		while((pa1>=1000000)||(pa1<=100000)) {
		if (pa1<=100000) pa1=(2+Math.abs(pa1))*(2+Math.abs(pa1));
		if (pa1>=1000000) pa1=parseInt(pa1 / 2) -8200;
		}
		j=('.$para3.')?'.$para3.':999;
		for (i=1;i<=3;i++)
		{
			j=j*10;
			pa2=parseInt(((pa1 % j) / parseInt(j / 10)));
			str1=str1+String.fromCharCode(base.charCodeAt()+pa2)
		}
		str1=str1+"-";
		for (i=1;i<=3;i++)
		{
			j=j*10;
			pa2=parseInt((pa1 % j) / parseInt((j / 10)));
			str1=str1+String.fromCharCode(base.charCodeAt()+pa2);
		}
		$("#r1").html("Password 1："+str1);
		$("#r2").html("Password 2："+str2);
		$("#r3").html("Password 3："+str3);
		$(".ppla").show();
}
</script>');
	}
    header("Content-Type: application/octet-stream");
    $para2=(int)$_GET['para2'];
    $para3=(int)$_GET['para3'];
    $filename = "passcalc.html";
    header('Content-Disposition:  attachment; filename="' . $filename . '"');
    echohtml($para2,$para3);
?>
