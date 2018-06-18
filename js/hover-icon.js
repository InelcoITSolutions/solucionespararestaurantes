$(document).ready(function(){
	$(".boxed-grey").mouseover(function(){
        $(this).find(".icono").stop(true,true).css("color", "#fff");	
        $(this).find(".feature_btn a").stop(true,true).css("color", "#EC7623");
        $(this).find(".feature_btn a").stop(true,true).css("background", "#fff");
    });
    $(".boxed-grey").mouseout(function(){
    	$(this).find(".icono").stop(true,true).css("color", "#EC7623");
    	$(this).find(".feature_btn a").stop(true,true).css("color", "#fff");
        $(this).find(".feature_btn a").stop(true,true).css("background", "#EC7623");
    });
});