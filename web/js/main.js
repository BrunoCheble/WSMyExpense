$(document).ready(function()
{

  	$('#endereco').geocomplete().bind("geocode:result", function(event, result){
	    console.log(result);
  	});
  

});