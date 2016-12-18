<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/core.css">
	<style type="text/css">
	body
	{
		padding: 50px;
	}

	.animate
	{
		transition: all 0.1s;
		-webkit-transition: all 0.1s;
	}

	.action-button
	{
		position: relative;
		padding: 10px 40px;
		margin: 0px 10px 10px 0px;
		float: left;
		border-radius: 10px;
		font-family: 'Pacifico', cursive;
		font-size: 25px;
		color: #FFF;
		text-decoration: none;	
	}

	.blue
	{
		background-color: #3498DB;
		border-bottom: 5px solid #2980B9;
		text-shadow: 0px -2px #2980B9;
		color: #FFF;
	}

	.red
	{
		background-color: #EAEAEA;
		border-bottom: 5px solid #EAEAEA;
		text-shadow: 0px -2px #000;
		color:#645663 ;


		transform: translate(0px,5px);
		-webkit-transform: translate(0px,5px);
		border-bottom: 1px solid;
	}
	.action-button:active
	{
		transform: translate(0px,5px);
		-webkit-transform: translate(0px,5px);
		border-bottom: 1px solid;
	}

	</style>
	<style type="text/css">
	body
	{padding:0; margin:0; font-weight:normal;font-size:13px;}

	
	select.car{
		margin:30px;
		width:220px;
	}

	#targetcarstitle{
		position: absolute;
			-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;


	}
	#sourcecarstitle{
		position: absolute;
			-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;

	}

	</style>


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script language="javascript" type="text/javascript">
	$(function() {
		var  sourceCars=$('#sourceCars option').clone();
		$('#filterDis').change(function() {
			var val = $(this).val();
			$('#sourceCars').empty();
			sourceCars.filter(function(idx, el) {
				var found=false;
				$('#targetCars option').each(function(){
					if ($(this).val()===$(el).text())
						found=true;
				});

				if(found)
					return false;

				return val === 'ALL' || $(el).text().indexOf('[' + val + ']') >= 0;
			}).appendTo('#sourceCars');
		});

		$('#sourceCars').dblclick(function() {
			$('#sourceCars option:selected').appendTo('#targetCars');
		});

		$('#targetCars').dblclick(function() {
			var targetList=$('#targetCars option:selected');
			var filterVal= $('#filterDis').val();
			if( filterVal === 'ALL' || targetList.text().indexOf('[' + filterVal + ']') >= 0)
				targetList.appendTo('#sourceCars');
			else
				targetList.remove();
			var foption = $('#sourceCars option:first');
			var soptions = $.makeArray($('#sourceCars option:not(:first)')).sort(function(a, b) {
				return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
			});
			$('#sourceCars').html(soptions).prepend(foption);
			foption.attr("selected", true).siblings("option").removeAttr("selected");
		});
	});

</script>




<meta charset="utf-8">
<title>Universal brotherhood, show you care.</title>

<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;	
	border-radius: 6px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
}
#sourceCars, #targetCars{

	height: 200px;
}
</style>

<style type="text/css">
body {
	background: #f1f1f1;
}

a{  
	text-decoration: none;  
	color:#333333;  
}  

.container{  
	width: 720px;  
	margin: 50px auto 50px; /* buttons pushed from the top by 10% */  
}  

.button{  
	margin: 8px;  
}  

.button a{  
	font-family: arial, sans-serif;
	font-size: 13px;  
	color: #777;
	text-shadow: 1px 1px 0px white;
	background: #ffffff; /* Old browsers */  
	background: -moz-linear-gradient(top, #ffffff 0%, #dfdfdf 100%); /* FF3.6+ */  
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#dfdfdf)); /* Chrome,Safari4+ */  
	background: -webkit-linear-gradient(top, #ffffff 0%,#dfdfdf 100%); /* Chrome10+,Safari5.1+ */  
	background: -o-linear-gradient(top, #ffffff 0%,#dfdfdf 100%); /* Opera11.10+ */  
	background: -ms-linear-gradient(top, #ffffff 0%,#dfdfdf 100%); /* IE10+ */  
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#dfdfdf',GradientType=0 ); /* IE6-9 */  
	background: linear-gradient(top, #ffffff 0%,#dfdfdf 100%); /* W3C */  
	-moz-border-radius: 3px;  
	-webkit-border-radius: 3px;  
	border-radius: 3px;  
	-moz-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4); 
	-webkit-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4); 
	box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4);  
	padding: 6px 12px;  
}  

.button a:hover{  
	background: #ffffff; /* Old browsers */  
	background: -moz-linear-gradient(top, #ffffff 0%, #eee 100%); /* FF3.6+ */  
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eee)); /* Chrome,Safari4+ */  
	background: -webkit-linear-gradient(top, #ffffff 0%,#eee 100%); /* Chrome10+,Safari5.1+ */  
	background: -o-linear-gradient(top, #ffffff 0%,#eee 100%); /* Opera11.10+ */  
	background: -ms-linear-gradient(top, #ffffff 0%,#eee 100%); /* IE10+ */  
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eee',GradientType=0 ); /* IE6-9 */  
	background: linear-gradient(top, #ffffff 0%,#eee 100%); /* W3C */  
	-moz-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4); 
	-webkit-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4); 
	box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4);  
}  

.button a:active .red{  
	background: #dfdfdf; /* Old browsers */  
	background: -moz-linear-gradient(top, #dfdfdf 0%, #f1f1f1 100%); /* FF3.6+ */  
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#dfdfdf), color-stop(100%,#f1f1f1)); /* Chrome,Safari4+ */  
	background: -webkit-linear-gradient(top, #dfdfdf 0%,#f1f1f1 100%); /* Chrome10+,Safari5.1+ */  
	background: -o-linear-gradient(top, #dfdfdf 0%,#f1f1f1 100%); /* Opera11.10+ */  
	background: -ms-linear-gradient(top, #dfdfdf 0%,#f1f1f1 100%); /* IE10+ */  
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dfdfdf', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-9 */  
	background: linear-gradient(top, #dfdfdf 0%,#f1f1f1 100%); /* W3C */  

	-webkit-box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2) inset, 0px 1px 1px 0 rgba(255,255,255,1);
	-moz-box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2) inset, 0px 1px 1px 0 rgba(255,255,255,1);  
	box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2) inset, 0px 1px 1px 0 rgba(255,255,255,1);  

}

.button a > img{  
	padding-right: 8px;  
	position: relative;  
	top: 2px;  
}  
</style>

<script type="text/javascript">

$(document).ready(function() {
	$("#have").click(function () {
		$('#countryList').text('I have Choco in');

		$('#have').addClass('red');
		$('#have').removeClass('blue');


		$('#need').addClass('blue');
		$('#need').removeClass('red');

	});


	$("#need").click(function () {
		$('#countryList').text('I need Choco in');

		$('#need').addClass('red');
		$('#need').removeClass('blue');


		$('#have').addClass('blue');
		$('#have').removeClass('red');
	});
});

</script>

<style type="text/css">
select {
	padding:3px;
	margin: 0;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	-webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
	-moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
	box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
	background: #f8f8f8;
	color:#888;
	border:none;
	outline:none;
	display: inline-block;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	cursor:pointer;
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
	select {padding-right:18px}
}

label {position:relative}
label:after {
	content:'<>';
	font:11px "Consolas", monospace;
	color:#aaa;
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-ms-transform:rotate(90deg);
	transform:rotate(90deg);
	right:8px; top:2px;
	padding:0 0 2px;
	border-bottom:1px solid #ddd;
	position:absolute;
	pointer-events:none;
}
label:before {
	content:'';
	right:6px; top:0px;
	width:20px; height:20px;
	background:#f8f8f8;
	position:absolute;
	pointer-events:none;
	display:block;
}
</style>

<style type="text/css">

.myButton {
	-moz-box-shadow:inset 0px -2px 11px -4px #bbdaf7;
	-webkit-box-shadow:inset 0px -2px 11px -4px #bbdaf7;
	box-shadow:inset 0px -2px 11px -4px #bbdaf7;
	background-color:#79bbff;
	-moz-border-radius:7px;
	-webkit-border-radius:7px;
	border-radius:7px;
	border:2px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:8px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>

</head>
<body>

	<div id="container">
		<h1>Welcome to Choco Exchange!</h1>

		<div id="body">

			<div class="container">  
				<span class="button fb">  
					<a href="#"><img src="http://png-1.findicons.com/files/icons/2052/social_network/32/facebook.png" alt="">Login with FB</a>  
				</span>  

				<span class="button twit">  
					<a href="#"><img src="http://png-4.findicons.com/files/icons/2192/flavour_extended/48/twitter_standing.png" alt="">Login with Tweet</a>  
				</span>  

				<span class="button mail">  
					<a href="#"><img src="http://www.staceyswellnesspilates.com/images/GoogleLogo.jpg" alt="">Login with Google</a>  
				</span>  
				<div class="container">

					<a href="#" id="need" class="action-button shadow animate blue">I need Choco</a>
					<a href="#" id="have" class="action-button shadow animate red">I have Choco</a>
				</div>
			</div>  
			<br/>
			<div class="container">

				<p><span id="countryList" >I have Choco in</span><?php echo $countryList; ?> </p>
			</div>
			<div class="container">
				<div id="townDiv">
					Select brand.

					<select id="filterDis" class="car">
						<option selected="true" >ALL</option>
						<option>Cadbury</option>
						<option>Ferrero</option>
						<option>Mars</option>
						<option>Mondelēz</option>
						<option>Nestlé</option>
					</select>			
					<div>
						
					<span id='sourcecarstitle'>Double click below to select</span>
					<select id="sourceCars" class="car" size="20" >
						
						<?php

					//var_dump((explode( ',', $chocoList )));
						foreach ( (explode( ',', $chocoList )) as $key => $value) {
							echo '<option>'.$value.'</option>';
						}
						?>					
					</select>

					<span id='targetcarstitle'> Double click below to remove</span>
					<select id="targetCars" class="car" size="20" >
					</select>
				</div>
				
				</div>

			</div>
			<div class="container">
	<a href="#" class="myButton">Continue</a>
			</div>

		</div>
		

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>


</body>
</html>