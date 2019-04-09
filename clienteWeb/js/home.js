$(document).ready(function(){
	console.log("Jquery charged!!")

$("#recepcionVale").hover(function(){
	console.log("Estoy dentro del div");
	$(this).css("cursor","pointer");
});	

});

