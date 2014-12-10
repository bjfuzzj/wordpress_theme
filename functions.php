<?php
/** widgets */
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'First_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Second_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Third_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Fourth_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}


function new_excerpt_length($length){
	return 10;
}
add_filter('excerpt_length','new_excerpt_length');


function wp_list_categories_remove_br_attributes($output) { 
     $output = preg_replace("#<br.+?>#is",chr(10).chr(13),$output);
    return $output; 
} 
add_filter('wp_list_categories', 'wp_list_categories_remove_br_attributes');


/* Pagenavi */  
function pagenavi( $before = '', $after = '', $p = 2 ) {   
if ( is_singular() ) return;   
global $wp_query, $paged;   
$max_page = $wp_query->max_num_pages;   
if ( $max_page == 1 ) return;   
if ( empty( $paged ) ) $paged = 1;   
echo $before.'<ol class="page-navigator">'."\n";   
echo '<li><a>第' . $paged . '/' . $max_page . '页</a></li>';   
if ( $paged > 1 ) p_link( $paged - 1, 'Previous Page', '«' );   
if ( $paged > $p + 1 ) p_link( 1, 'First Page' );   
if ( $paged > $p + 2 ) echo '... ';   
for( $i = $paged - $p; $i <= $paged + $p; $i++ ) {   
if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li><a>{$i}</a></li>" : p_link( $i );   
}   
if ( $paged < $max_page - $p - 1 ) echo '... ';   
if ( $paged < $max_page - $p ) p_link( $max_page, 'Last Page' );   
if ( $paged < $max_page ) p_link( $paged + 1,'Next Page', '»' );   
echo '</ol>'.$after."\n";   
}   
function p_link( $i, $title = '', $linktype = '' ) {   
if ( $title == '' ) $title = "Page {$i}";   
if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }   
echo "<li><a class='page smaller' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a></li>";   
}



?>
