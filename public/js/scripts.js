$(document).ready(function(){
	var currentFixedPos = $(".opAtual").position();
	
	//Colocar a barra na posição do menu atual
	$("#barrinha").css("left", currentFixedPos.left);
	//Quando o mouse entra no hover
	$("ul li a").mouseenter(function(){
		var pos = $(this).position();
		$("#barrinha").stop(true, false).animate({
			"left": + (pos.left)
		});		
	});
	//Quando o mouse sai do hover
	$("ul li a").mouseleave(function(){
		$("#barrinha").animate({
			"left": + currentFixedPos.left
		});
	});
	
	//..:: Slide de Projetos ::..
	
	$("a.botaoTop").click(function(){					
		$("#holderProj").animate({
			"margin-top":"+=204px"
		});
	});
	
	$("a.botaoBot").click(function(){
		$("#holderProj").animate({
			"margin-top":"-=204px"
		});
	});
	//:::::::::::::::::::::::::::
});