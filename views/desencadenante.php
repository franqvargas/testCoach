
<style type="text/css">

#popup {
  background-color: rgba(0,0,0,0.8);
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:0;
  -webkit-animation:autopopup 2s;
  -moz-animation:autopopup 2s;
  animation:autopopup 2s;
}
@-webkit-keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}
@-moz-keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}
@keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}

#popup:target {
  -webkit-transition:all 1s;
  -moz-transition:all 1s;
  transition:all 1s;
  opacity: 0;
  visibility: hidden;
}

.popup-contenedor {
  position: relative;
  margin:7% auto;
  padding:20px 50px;
  background-color: #fafafa;
  color:#333;
  border-radius: 3px;
  width:40%;
  height: 80%;
}

a.popup-cerrar {
  position: absolute;
  top:3px;
  right:3px;
  background-color: #333;
  padding:7px 10px;
  font-size: 20px;
  text-decoration: none;
  line-height: 1;
  color:#fff;
}
.adorno{
 
  font-family:'Ubuntu Mono' , monospace;
  text-align: center;        
  width:400px; 
  height: 420px;
  border: groove 7px;
  border-width: 0px;
  margin-top: 30px;
}


.form-control1{
  padding: 20px;
  border: solid 1px;
  border-top: 40px;
  border-left: 0px;
  border-right: 0px;
  border-color: #333333;                
  font-size: 18px;
  text-align: center;
  width: 90%;
  height: 25px;
  border-radius: 2px 2px 2px 2px;
  background-color: rgba(255, 250, 250, 0);
  font-family:'Fira Mono' , monospace;
  color: #333333;  
  outline:none;
  inpu

  
}

.fondos{
  
  background-repeat: no-repeat;
  background-position: center;
}

.aceptar{
  width: 130px; 
  height: 35px;
  font-family:'Ubuntu Mono' , monospace;    
  border: 0px;
  background-color: #06c;
  font-size: 1.2em;
  border-radius: 2px 2px 2px 4px;
  color: white;
  
}
input:focus{
  border-bottom: 3px solid #06c;
}
.titulo{
  font-size: 40px;
  font-family:'Ubuntu Mono' , monospace;
  text-align: left;
  color: black;
  position:static;
  
}
#main-header {
  background: #333;
  color: white;
  height: 80px;
  width: 100%;
  left: 0;
  top: 0;
  position: fixed;
}   
#main-header a {
  color: white;
}

/*
 * Logo
 */
 #logo-header {
  float: left;
  padding: 15px 0 0 20px;
  text-decoration: none;
}
#logo-header:hover {
  color: #0b76a6;
}

#logo-header .site-name {
  display: block;
  font-weight: 700;
  font-size: 1.2em;
}

#logo-header .site-desc {
  display: block;
  font-weight: 300;
  font-size: 0.8em;
  color: #999;
}

#main-content {
  
  
  height: 100%;
  max-width: 1000px;
  margin: 20px auto;
  box-shadow: 0 0 20px rgba(0,0,0,.3);
}

#main-content header,
#main-content .content {
  padding: 40px;
}
/*
 * Navegación
 */
 nav {
  float: right;
}
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  padding-right: 20px;
}

nav ul li {
  display: inline-block;
  line-height: 80px;
}

nav ul li a {
  display: block;
  padding: 0 10px;
  text-decoration: none;
}

nav ul li a:hover {
  background: #0b76a6;
}
#main-footer {
  background: #333;
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: 40px;
  position: fixed;
  width:  100%;
}
#main-footer p {
  margin: 0;
}

#main-footer a {
  color: white;
}

body {
  margin: 0;
  padding: 0;
  
  color: #666;
  background: #f2f2f2; 
  font-size: 1em;
  line-height: 1.5em;    
  padding-top: 80px; /* Relleno superior igual a la altura de la cabecera*/
}

</style>
</head>
<body class="bg-success">
  <header id="main-header" >
    <!-- DESDE AQUI -->
    <nav>      
      <ul>
        <li class="logo-header" style="float: left; position: relative; margin-right: 1020px; margin-top: 15px">
          <h2><a  href="<?php echo base_url("index.php");?>">
            
            TestCoach
          </a> 
        </h2>
      </li>
      <li >
        <a href="#popup" >Log-in </a>          

      </li>
      <li>
       | 
     </li>
     <li >
      <a href="index.html" > About</a>
    </li>
  </ul>
</nav>

<!-- HASTA AQUI -->
<!--<p style="color:#ffffff"> Aquí se puede incluir el navegador de páginas</p> -->
</header> 

<!--
<!DOCTYPE html>
<htm ng-appl>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>Test Coach | Plantilla</title>
<link rel="stylesheet" type="text/css" href="integradoraCss.css" />

</head>

<body class="bg-success">

  <header id="main-header">
    <!-- DESDE AQUI -->
  <!--

  <nav >      
      <ul>
        <li >
  			</li>
  			<li>
  			 | 
  				
  			</li>
  			<li >
  				<a href="index.html" > About</a>
  			</li>
  		</ul>
  </nav>
   	<div style="height:30px "></div>

    <!-- HASTA AQUI -->
	<!--<p style="color:#ffffff"> Aquí se puede incluir el navegador de páginas</p> 
  </header>	-->




        <!--	
      	<form action="#popup"  class="popup-link">
      		<input style="width: 300px;font-size: 1em; float: right;" type="submit" id="vinc4" name="opcion" title="desencadenante.html" class="aceptar" value="Iniciar Sesion" onmouseover="javascript: void(document.getElementById('vinc4').style.fontSize='1.3em')" onmouseout="javascript: void(document.getElementById('vinc4').style.fontSize='1em')" >
      	</form>
        	
      		<form action="lostPassword.html">
					<input type="submit" style="width: 300px; font-size: 1em; float: center;" class="aceptar" id="vinc2" value="Forgot your Password?" onmouseover="javascript: void(document.getElementById('vinc2').style.fontSize='1.3em')" onmouseout="javascript: void(document.getElementById('vinc2').style.fontSize='1em')" >
      		</form>
      	-->
      	



<!--
	<p>&copy; Enero 2018</p>
	<p>Universidad Tecnologica de Manzanillo  |	UTeM</p>
	<script type="text/javascript">
var d = new Date();
document.write('Fecha: '+d.getDate(),' /'+(d.getMonth()+1),'/ '+d.getFullYear());
</script>

</footer>-->

