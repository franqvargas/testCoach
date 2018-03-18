<!DOCTYPE html>
<html ng-app>
<head>
	<style type="text/css">
.menu{ 
height:80px;
width:100%;
background:#333;
color:white;
float: right;
}

.fixed{
	position:fixed;
	top:0;
}
	</style>
		<title>Selection</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/css.css");?>"/>

<!--  <link rel="stylesheet" href="<?php //echo base_url("bootstrap/css/portadas.css"); ?>" >-->
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap3.3.6.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.3.1.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/integradora.js"); ?>"></script>


	</head>
	<body>		
		<div id="" class="menu">
			<div class="navbar-header">
				<div class="navbar-brand" id="test">
					Test-Coach
				</div>
				<div class="navbar-brand" id="option">
					<a id="noti" href="#" style="text-decoration: none;">Noti</a>
					<a id="op" href="#" style="text-decoration: none;">Op</a>
				</div>
			</div>
		</div>
		
<script>
posicionarMenu();

$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.menu').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('.menu').addClass('fixed');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.menu').removeClass('fixed');
        $('.wrapper').css('margin-top', '0');
    }
}

</script>
            
<!-- HASTA AQUI -->
<!--<p style="color:#ffffff"> Aquí se puede incluir el navegador de páginas</p> -->
    

