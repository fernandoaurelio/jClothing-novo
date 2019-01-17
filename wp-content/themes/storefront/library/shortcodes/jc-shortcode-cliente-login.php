<?php 

function check_user ($params, $content = null){
//verifica se o usuário está logado
	$html =  '';
	$user = wp_get_current_user();
	if ( is_user_logged_in() ){
//se o usuário estiver logado, não retorna nada
		$html .='<a href="'.get_permalink( get_option("woocommerce_myaccount_page_id") ).'">Olá, '.$user->display_name.' </a>';
			$html .='<span class="menu-account esconder">';						
				$html .='<ul>';
					foreach ( wc_get_account_menu_items() as $endpoint => $label ) :
						$html .='<li class="'.wc_get_account_menu_item_classes( $endpoint ).'">';
							$html .='<a href="'.esc_url( wc_get_account_endpoint_url( $endpoint ) ).'">'.esc_html( $label ).'</a>';
						$html .='</li>';
					endforeach;
				$html .='</ul>';
			$html .='</span>';
		$html .='</span>';
		return $html;
	}
	else{
//se o usuário estiver logado, retorna o conteúdo
		$html .='<div class="usuario_check">';
			$html .= '<a href="#">';
				$html .= "<div class='user_icon'>";
					$html .= "<i class='material-icons'>person_pin</i><span>Faça Login</span>";			
				$html .= "</div>";
			$html .= "</a>";
		$html .='</div>';
		return $html;
	}
}
//criação do shortcode
add_shortcode('naologado', 'check_user' );


