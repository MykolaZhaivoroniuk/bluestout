<?

function interview($atts, $content = null) {
    return '<div class="interview">'.do_shortcode($content).'</div>';
}
add_shortcode('interview', 'interview');