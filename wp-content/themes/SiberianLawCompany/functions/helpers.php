<?php
function e($sub_field) {
    echo get_sub_field( $sub_field);
}
function g($sub_field) {
    return get_sub_field( $sub_field);
}
function variables() {
    return array(
        'url_home'          => get_bloginfo('template_url') . '/',
        'assets'            => get_bloginfo('template_url') . '/assets/',
        'setting_home'      => get_option('page_on_front'),
        'current_user'      => wp_get_current_user(),
        'current_user_ID'   => wp_get_current_user()->ID,
        'admin_ajax'        => get_bloginfo('url') . '/wp-admin/admin-ajax.php',
        'url'               => get_bloginfo('url'),
    );
}
function get_term_parent_id($term_id, $my_tax = 'product_cat') {
    if($term_id){
        while( $parent_id = wp_get_term_taxonomy_parent_id( $term_id, $my_tax ) ){
            $term_id = $parent_id;
        }
        if( $term_id == 5 )
            return false;
        else
            return $term_id;
    }else {
        return false;
    }
}
function escapeJavaScriptText($string) {
    return str_replace("\n", '\n', str_replace('"', '\"', addcslashes(str_replace("\r", '', (string)$string), "\0..\37'\\")));
}
