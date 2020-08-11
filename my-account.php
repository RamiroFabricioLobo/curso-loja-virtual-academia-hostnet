<?php
// Minha conta - Nome do usuário
function my_user_name() {
  $current_user = wp_get_current_user();
  return trim( 'Bem-vindo ' . $current_user->user_firstname . ' ' . $current_user->user_lastname );
}
add_shortcode( 'my-user-name', 'my_user_name' );

// URL Logout
function my_url_logout() {
  return wp_logout_url();
}
add_shortcode( 'my-url-logout', 'my_url_logout' );
?>
