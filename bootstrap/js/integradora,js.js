window.onload = function () {
document.formularioiniciasesion.usuario.focus();
document.formularioiniciasesion.addEventListener('submit', validarFormulario);
}
function validarFormulario(evObject) {
evObject.preventDefault();
var todoCorrecto = true;
var formulario = document.formularioiniciasesion;
var pos=0;
	for (var i=0; i<formulario.length; i++){
		if(formulario[i].type =='text') {
			if (formulario[i].value.length < 8 ){
								alert ('Debes ingresar tu nickname de 8 digitos');todoCorrecto=false;

			//}else if (formulario[i].value == null || formulario[i].value.length <=7 || /^\s*$/.test(formulario[i].value)){
				/*for (var i=0; i<formulario.length; i++) {
					if(formulario[i].type =='password' ) {
						if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
							alert ('Porfavor ingresa tu usuario y contraseña');todoCorrecto=false;
								}else{alert ('Debes ingresar tu numero de usuario');todoCorrecto=false;}}
				}*/
			}else{
				
				for (var i=0; i<formulario.length; i++){if(formulario[i].type =='password' ) {
				if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
					alert ('Debes ingresar una contraseña');todoCorrecto=false;}}}}
		}
	}

if (todoCorrecto ==true) {
	alert('BIENVENIDO ');
	formulario.submit();}
}