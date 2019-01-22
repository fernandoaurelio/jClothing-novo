jQuery(document).ready(function(){
	jQuery('.cliente-icon').on('hover', function(){		
		jQuery('.cliente-icon .menu-account').toggleClass('esconder');
	});	

	jQuery(".tamanho, .cor").on("click", function(){
		jQuery(this).toggleClass("selecionado");
	});
	jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 50) {
        jQuery('.storefront-primary-navigation').addClass('fixo');
    } else {
        jQuery('.storefront-primary-navigation').removeClass('fixo');
    }
});

	/*COnfigs mobile*/
	var mobile = '';
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 		mobile = true;
	}else{
		mobile = false;
	}

	if(mobile){
		jQuery(".instagram").hide();
		jQuery(".instagram-mobile").show();
		jQuery(".logo-mobile").show();
	}else{
		jQuery(".instagram").show();
		jQuery(".instagram-mobile").hide();
		jQuery(".logo-mobile").hide();
	}
	if(mobile == /iPad/i.test(navigator.userAgent) ){
		jQuery(".logo-mobile").addClass("logo-mobile-ipad");
	}else if(mobile != /iPad/i.test(navigator.userAgent) ){
		jQuery(".logo-mobile").addClass("logo-mobile-celular");
	}else{
		jQuery(".logo-mobile").removeClass();	
	}

	if(mobile){
		jQuery(".menu-toggle").on("click", function(){
			jQuery("#menu-principal").toggle();
		});
	}
});