<?php

// Adiciona um EndPoint ao My Account. Neste caso a lista de desejos.
add_action( 'init', function() {
	add_rewrite_endpoint( 'wishlist', '/wishlist/' );
} );

// Adiciona um item ao menu do My Account. Neste caso a lista de desejos.
add_filter( 'woocommerce_account_menu_items', function($items) {
	// Guarda dados do item de logout e remove do menu
	// Necessário para que a lista de desejos não fique como último item
	$logout = $items['customer-logout'];
	unset($items['customer-logout']);

	// Adiciona o item de lista de desejos
	$items['wishlist'] = 'Lista de Desejos';
	
	// Adiciona novamente o logout para que ele fique como último item
	$items['customer-logout'] = $logout;
	
	return $items;
}, 99, 1 );

?>
