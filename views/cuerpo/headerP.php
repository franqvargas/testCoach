<!DOCTYPE html>
<html ng-app>
<head>
  <title>Test Coach | Plantilla</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/portadas.css"); ?>" />
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap3.3.6.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.0.0.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap-datetimepicker"); ?>"></script>
 <script>
  
$(document).ready(function(){
  document.getElementById('usuario').blur();
  document.getElementById('vinc').focus();
});
</script>
</head>
<header id="main-header" >
  <script src="integradora.js"></script>
  <nav>      
    <ul>
     <li class="logo-header" style="float: left; position: relative; margin-right: 1020px; margin-top: 15px">
      <h2><a  href="<?php echo base_url("index.php");?>">
        TestCoach
      </a> 
    </h2>
  </li>
  <li >
    <a href="<?php echo base_url("index.php/welcome/login");?>" id="vinc4" name="opcion" title="desencadenante">
      Login
    </a> 
  </li>
  <li>
   | 
 </li>
 <li >
  <a href="<?php echo base_url("index.php/welcome/porta")?>" > About</a>
</li>
</ul>
</nav>

<!-- HASTA AQUI -->
<!--<p style="color:#ffffff"> Aquí se puede incluir el navegador de páginas</p> -->
</form>
</header> 
<body class="bg-success">
