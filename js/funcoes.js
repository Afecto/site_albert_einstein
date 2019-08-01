//Criando menu scroll fixo (menu-superior)
		
			$(function(){   
				var nav = $('.menu-superior');   
				$(window).scroll(function () { 
					if ($(this).scrollTop() > 220) { 
						nav.addClass("menu-fixo");
						$('container').css('padding-top', 50);
					} else { 
						nav.removeClass("menu-fixo"); 
						$('container').css('padding-top', 0,);
					} 
				});  
			});
		