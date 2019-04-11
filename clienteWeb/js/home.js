$(document).ready(function(){
	console.log("Jquery charged!!")

$("#recepcionVale").hover(function(){
	console.log("Estoy dentro del div");
	$(this).css("cursor","pointer");
});	

$("#recepcionVale").click(function(){
	$(this).toggle("clip",1000);
	$("#panelRecepcionVale").toggle("slide",5000);
});	


$("#salirPanelRecepcionVale").click(function(){
	$("#panelRecepcionVale").toggle("clip");
	$("#recepcionVale").toggle("slide",2000);
});	

$("#verDetalle").hover(function(){
	console.log("Estoy dentro del div");
	$(this).css("cursor","pointer");
});	

$("#salirPanelRecepcionVale").hover(function(){
	console.log("Estoy dentro del div");
	$(this).css("cursor","pointer");
});	

$("#panelRecepcionVale").tabs();

});



