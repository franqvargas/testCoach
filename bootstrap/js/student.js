var Load = function(doc){
    var enviar = doc + "?";
    grado = "grado="+document.getElementById("option").value;
    enviar += grado;
    console.log(enviar);
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("content").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET",enviar,true);
    xmlhttp.send();
}

$(document).ready(function(){
	$("#op").click(function(){
		$("#subgen1").slideToggle("slow");
		$("#subgen22").slideUp();
	});	

	$("#noti").click(function(){
		$("#subgen22").slideToggle("slow");
		$("#subgen1").slideUp();

	});
});