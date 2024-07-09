$(function(){
	//Aqui vai todo nosso código de javascript.
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $('nav.mobile ul');

		/*if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-xmark fa-lg');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-xmark fa-lg');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}*/
		if (listaMenu.is(':hidden') == true){
			alert('vanos abrir');
			listaMenu.slideToggle();
		}
		else{
			alert('vamos fechar');
			listaMenu.slideToggle();
		}
   	})
})

//fa-solid fa-bars
//<i class="fa-solid fa-xmark"></i>