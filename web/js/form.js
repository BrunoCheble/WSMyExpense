$(document).ready(function() {
 	
 	/*
 	$('#carro-valor').maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});

 	var valor_org;
 	
 	var converterToNumber = function(){
		
		if($('#carro-valor').val() == ''){
			valor_org = $('#carro-valor').val();
			return;
		}

		if($('#carro-valor').val().indexOf(',') !== -1){
			
			valor_org = $('#carro-valor').val();
			
			var valor_formated = $('#carro-valor').val().replace('.', '');
		  	var valor_formated = valor_formated.replace('.','');
		  	var valor_formated = valor_formated.replace('.','');
		  	var valor_formated = valor_formated.replace('.','');
		  	var valor_formated = valor_formated.replace(',','.');

		  	return valor_formated;	
		} 
 	}

 	$("form#form-carro").on("beforeValidateAttribute", function (event, messages) {	

 		if(messages.id == 'carro-valor'){
 			valor = converterToNumber();
	 		if(valor != '')
				$('#carro-valor').val(valor);
 		}
 		
	});

	$("form#form-carro").on("afterValidateAttribute", function (event, messages) {

		if(messages.id == 'carro-valor')
			$('#carro-valor').val(valor_org);
	});*/
	/*
	$('form#form-carro').on('beforeSubmit', function(e) {
		
		//$('#carro-valor').val(converterToNumber());

		var foto = [];
	   	$.each($('#list-fotos img'),function(){
			foto.push($(this).attr('alt'));
		});


	   	if(foto != ''){
			$('#carro-fotos').val(JSON.stringify(foto));
			
			if($('#carro-foto_principal').val() == ''){
				$('#carro-foto_principal').val(foto[0]);
			}
			
	   	}

	});

 	$(document).on("click","#list-fotos img",function(){
 		$("#stud-info #img-modal").html($(this).clone());
 		$('#check_principal').attr('checked',$(this).parents('.item').hasClass('principal'));
 		$("#stud-info").modal("show");

 	});

 	$('#del_foto').click(function(){

 		if(confirm('Você tem certeza que deseja excluir essa foto?')){
 			var name = $('#img-modal img').attr('alt');
 			
 			if($('#list-fotos img[alt="'+name+'"]').hasClass('principal'))
 				$('#carro-foto_principal').val('');

 			$('#list-fotos img[alt="'+name+'"]').parents('.item').remove();

 			$("#stud-info").modal("hide");
 		}

 	});

 	$('#check_principal').click(function(){
 		
 		if(!$(this).is(':checked')){
 			$('#list-fotos .item.principal').removeClass('principal');
 			$('#carro-foto_principal').val('');
 			return;	
 		}

 		var name = $('#img-modal img').attr('alt');

 		$('#carro-foto_principal').val(name);
 		$('#list-fotos .item.principal').removeClass('principal');
 		$('#list-fotos img[alt="'+name+'"]').parents('.item').addClass('principal');
 	});*/

 });