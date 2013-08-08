var x = $(document);
x.ready(iniciar);

function iniciar(){
	var x =$("#crear");
	x.click(crear_calificacion);
}
function crear_calificacion(){
	//var a = $("#user").val();
	$.get("crear.php",{alumno:$("#user").val()},mostrar);
}
function mostrar(){
	alert("Se han creado calificaciones" );
}