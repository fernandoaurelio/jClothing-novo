<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action( 'storefront_before_footer' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="col-full">
		
		<?php			
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->				
	</footer><!-- #colophon -->
	

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<div class="campo-footer">
	<div class="campo-footer-container">
		<div class="pagamentos">
			<h4>Pagamentos</h4>
			<img src="//assets.pagseguro.com.br/ps-integration-assets/banners/pagamento/avista_estatico_550_70.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com as principais bandeiras e bancos, saldo em conta PagSeguro e boleto.">
		</div>
		<div class="seguranca">
			<h4>Segurança</h4>
			<img src="<?= get_template_directory_uri();  ?>/assets/images/selo_ssl.png" alt="certificado ssl">
		</div>
	</div>
</div>	
<div class="footer-rodape">
	<div class="footer-rodape-texto">		
		<div class="footer-rodape-1">		
			<p>J.Clothing - 2019</p>
		</div>
		<div class="footer-rodape-2">		
			<p>Todos os direitos reservados. Leia nossa <a href="">Política de Privacidade</a></p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<div class="footer-sobe-container" id="footer-sobe-container">
	<div class="footer-sobe-bola"></div>
</div>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'XJGED6YhZw';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
