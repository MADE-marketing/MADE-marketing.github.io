<?php
function mi_tema_enqueue_scripts() {
    // Encolar el archivo CSS
    wp_enqueue_style('mi-estilo', get_template_directory_uri() . '/assets/styles/main.css', array(), null);

    // Encolar el archivo JavaScript
    wp_enqueue_script('mi-script', get_template_directory_uri() . '/assets/scripts/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_scripts');
?>
