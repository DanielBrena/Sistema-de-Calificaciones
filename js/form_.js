var x =$(document);
x.ready(inicio);

function inicio(){
	var x = $("#boton_mat");
	x.click(enviar_peticion);

}

//var matricula_ = $("#matricula_").val();
//var pass_ = $("#pass_").val();

function enviar_peticion(){

	
	if( $("#matricula").val() != '' && $("#pass").val() != ''  ){
		
		
		$.get("../sistema_calificaciones/include/peticion.php",{matricula:$("#matricula_").val(),pass:$("#pass_").val()},recibir);
	}
}

function recibir(datos){
	$("#calificaciones_box").html(datos);
}