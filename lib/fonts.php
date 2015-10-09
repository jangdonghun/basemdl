<?php
function sage_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $lora = _x( 'on', 'Lora font: on or off', 'sage' );

    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'sage' );

    if ( 'off' !== $lora || 'off' !== $open_sans ) {
        $font_families = array();

        if ( 'off' !== $lora ) {
            $font_families[] = 'Lora:400,700,400italic';
        }

        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:700italic,400,800,600';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}

function sage_scripts_styles() {
    wp_enqueue_style( 'sage-fonts', sage_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'sage_scripts_styles' );

function sage_editor_styles() {
    add_editor_style( array( 'editor-style.css', sage_fonts_url() ) );
}
add_action( 'after_setup_theme', 'sage_editor_styles' );

function sage_custom_header_fonts() {
    wp_enqueue_style( 'sage-fonts', sage_fonts_url(), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'sage_scripts_styles' );