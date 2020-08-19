<?
// Filtrar buscas somente por produtos
add_filter( 'pre_get_posts', 'custom_search' );
function custom_search( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array( 'product' ) );
    }
    return $query;
}
?>
