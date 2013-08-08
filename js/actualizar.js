

function actualizar(){


	$.get("actualizar.php",{
		algebra:$("#algebra_mostrar").val(),
		calculo:$("#calculo_mostrar").val(),
		sistemas:$("#sistemas_mostrar").val(),
		metodologia:$("#metodologia_mostrar").val(),
		ingles:$("#ingles_mostrar").val(),
		antropologia:$("#antropologia_mostrar").val(),
		user:$("#user").val()
	},realizado);

	
}
function realizado(){
	alert("Calificacions actualizadas");
}