/*var x = $(document);

x.ready(inicio);

function inicio(){

	if( $("#alum_").val() != "" && $("#cont_").val() != "" && $("#apel_").val() != "" && $("#sexo_").val() != ""){
		
		$("#enviar_alumnos").attr("disabled", true);
	}else{
		
		$("#enviar_alumnos").attr("disabled", false);
		}

}*/

$(document).ready(function(){

     $('input[type="submit"]').attr('disabled','disabled');

     $('input[type="text"]').keypress(function(){

            if($("#alum_").val() != '' && $("#cont_").val() != '' && $("#apel_").val() != '' && $("#sexo_").val() != '' && $("#seme_").val() != '' &&  $("#matr_").val() != ''   && $("#carr_").val() != ''){
               $('input[type="submit"]').removeAttr('disabled');

            }

     });

 });
