
<p>&copy; Enero 2018</p>
<p>Universidad Tecnologica de Manzanillo  |	UTeM</p>
<script type="text/javascript">
	var d = new Date();
	document.write('Fecha: '+d.getDate(),' /'+(d.getMonth()+1),'/ '+d.getFullYear());
</script>

</footer>
<script>
  
$(document).ready(function(){
  document.getElementById('usuario').blur();
  //document.getElementById('vinc').focus();
});

</script>
<script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        });
    });
});
</script>
<div class="modal-wrapper" id="popup">

	<div class="popup-contenedor">
		<a class="popup-cerrar" id="vinc3" href="#popup" onmouseover="javascript: void(document.getElementById('vinc3').style.color='red')" onmouseout="javascript: void(document.getElementById('vinc3').style.color='white')">X</a>
		<div align="center">
			<form name="formularioiniciasesion" action="index.html" autocomplete="off" onload="">
				<fieldset class="adorno">
					<legend class="titulo"><h1>Test Coach</h1></legend>
		<div style="height: 80px;"></div>
					<div align="center">
						<input type="text"  name="usuario" class="form-control1" id="usuario" placeholder="User ID" required /> 	
					</div> 
					<br>
					<div align="center">
						<input type="password" name="password" class="form-control1" id="password" placeholder="Password" required />
					</div>
					
					<div style="height: 120px; "></div>
					<div style="float: right">
						<input type="submit" id="vinc" class="aceptar" value="Continue" onmouseover="javascript: void(document.getElementById('vinc').style.fontSize='1.5em')" onmouseout="javascript: void(document.getElementById('vinc').style.fontSize='1.2em')">
					</div>
					<div style="height: 120px; float: left;">
						<a href="">Forgot your password?</a>
					</div>

				</fieldset>
			</form>
		</div>   
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("bootstrap/js/integradora.js");?>"></script>
<script type="text/javascript">
	function Navigate(){   
		window.location.replace('');
		return false;
	}
</script>
<div style="position: static; float: inherit;"></div>

</body>
</html>
