<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<script type="text/javascript">

		a=0;
		old=0;
		scr=0;
		scrnew=0;
		first_num=0;
		second_num=0;
		sig=0;
		sign=0;
		var tot=0;
		var si=0;
	
		function ac(){
		a=parseInt(0);
		old=parseInt(0);
		scr=parseInt(0);
		scrnew=parseInt(0);
		first_num=parseInt(0);
		second_num=parseInt(0);
		sig=parseInt(0);
		sign=parseInt(0);
		var tot=parseInt(0);
		si=parseInt(0);
		document.getElementById("screen").innerHTML = 0;
		document.getElementById("sml").innerHTML =" ";
		}
		function num(a){
			if(sig==0){
				if (scr==0) {
					scr=a;
					first_num=a;
					old=a;
				}
				else{
					scr=parseInt(scr) + a;
					first_num=parseInt(first_num)+a;
					old=a;
				}
				document.getElementById("screen").innerHTML = first_num;
			}
			else
			{
				if (scrnew==0) {
					scrnew=a;
					second_num=parseInt(a);
					old=a;
				}
				else{
					scrnew=parseInt(scrnew) + a;
					second_num=parseInt(second_num)+a;
					old=a;
				}
				document.getElementById("screen").innerHTML = second_num;
				second_num=parseInt(scrnew);
			}
			
		}
		function equal(){

			switch(sign){
						case 1:{
							var tot=parseInt(first_num)/parseInt(second_num);
							document.getElementById("screen").innerHTML = tot;
							document.getElementById("sml").innerHTML =" ";
							first_num=tot;
							second_num=0;
							break;
						};
						case 2:{
							var tot=parseInt(first_num)*parseInt(second_num);
							document.getElementById("screen").innerHTML = tot;
							document.getElementById("sml").innerHTML =" ";
							first_num=tot;
							second_num=0;
							break;
						};
						case 3:{
							var tot=parseInt(first_num)-parseInt(second_num);
							document.getElementById("screen").innerHTML = tot;
							document.getElementById("sml").innerHTML =" ";
							first_num=tot;
							second_num=0;
							break;
						};
						case 4:{
							var tot=parseInt(first_num)+parseInt(second_num);
							document.getElementById("screen").innerHTML = tot;
							document.getElementById("sml").innerHTML =" ";
							first_num=tot;
							second_num=0;
							break;
						};
						default:{
							break;
						}

					}
		}
		function less(){
			if(sig!=1){
				first_num=parseInt(scr)/10;
				document.getElementById("screen").innerHTML = parseInt(first_num);
				scr=parseInt(first_num);
			}
			else{
				second_num=parseInt(scrnew)/10;
				document.getElementById("screen").innerHTML = parseInt(second_num);	
				scrnew=parseInt(second_num);
			}
		}
		function operations(si){
			sig=1;

			if(tot==0)
			{
				switch(si){
					case 1:{
						first_num=parseInt(scr);
						document.getElementById("sml").innerHTML = scr + " / ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 2:{
						first_num=parseInt(scr);
						document.getElementById("sml").innerHTML = scr + " x ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 3:{
						first_num=parseInt(scr);
						document.getElementById("sml").innerHTML = scr + " - ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 4:{
						first_num=parseInt(scr);
						document.getElementById("sml").innerHTML = scr + " + "; 
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};

					default:{

					};
				}	
			}
			else
			{
				switch(si){
					case 1:{
						document.getElementById("sml").innerHTML = tot + " / ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 2:{
						document.getElementById("sml").innerHTML = tot + " x ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 3:{
						document.getElementById("sml").innerHTML = tot + " - ";
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};
					case 4:{
						alert(tot)
						document.getElementById("sml").innerHTML = tot + " + "; 
						document.getElementById("screen").innerHTML =" ";
						sign=si;
						break;
					};

					default:{

					};
				}	
			}
		}

	</script>
	<div class="leftbdy">
		<h1 class="tit">The JS Calculator</h1>
		<div class="desc">The JS(javascript) calculator is purely developed using vanilla javascript. This calculator can perform simple operations like adding, substracting, multiplying, dividing. The input can be directly given through on-screen buttons. In case of any issue try reloding the page or just press 'ac' button. This project is under developing stage.<!--  Consider refreshing after each operation. -->
		</div>
		<div class="cred">Designed and developed by <a href="http://omkarrane.cf">Omkar Rane </a>
		</div>
		<a href="http://omkarrane.cf">
		<img src="IMG_20171018_173044cpy.jpg" style="position: absolute;width: 60px;
		height: 60px; border-radius: 50%; margin-top: -45px;
		margin-left: 60px;">
		</a>
	</div>
	<div class="mainbdy">

		<div class="smlscreen" id="sml" style="width: 100px;height: 50px; position: absolute; top: 60px; left:25px;font-size: 30px;z-index: 999;"></div>
		<div class="screen" id="screen">
					
		</div>
		<div class="btnset">
			<div class="buttons" id="7" onclick="num('7')">7</div>
			<div class="buttons" id="8" onclick="num('8')">8</div>
			<div class="buttons" id="9" onclick="num('9')">9</div>
			<div class="buttons" id="4" onclick="num('4')">4</div>
			<div class="buttons" id="5" onclick="num('5')">5</div>
			<div class="buttons" id="6" onclick="num('6')">6</div>
			<div class="buttons" id="1" onclick="num('1')">1</div>
			<div class="buttons" id="2" onclick="num('2')">2</div>
			<div class="buttons" id="3" onclick="num('3')">3</div>
		</div>
		<div class="buttons" style="width: 74px; height: 410px;float: left; margin: 0px;margin-top: 9px;" id="0" onclick="num('0')">0</div>
		<div class="btnset sign">
			<div class="buttons sg" id="/" onclick="operations(1)">/</div>
			<div class="buttons sg" id="x" onclick="operations(2)">x</div>
			<div class="buttons sg" id="-" onclick="operations(3)">-</div>
			<div class="buttons sg" id="+" onclick="operations(4)">+</div>
			<!-- <a href="index.php"> --><div class="buttons sg" id="+"  style="background-color: #994444;" onclick="ac()">ac</div><!-- </a> -->
			<div class="buttons sg" id="<" onclick="less()" style="background-color: #994444;"><</div>
			<div class="buttons sg" id="=" onclick="equal()" style="width: 150px;">=</div>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById("screen").innerHTML = 0;
	</script>
</body>
</html>