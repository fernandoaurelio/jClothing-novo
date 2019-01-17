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
});