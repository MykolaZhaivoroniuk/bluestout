<?
// Javascript
add_action( 'wp_enqueue_scripts', 'bluestout_enqueue_scripts' );
function bluestout_enqueue_scripts() {
  wp_deregister_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri().'/assets/bootstrap-5.0.2/js/bootstrap.min.js', array(), false, false);
  wp_register_script('jquery', get_template_directory_uri().'/assets/js/vendor/jquery-3.5.1.min.js', array(), false, false);
  wp_register_script('countme', get_template_directory_uri().'/assets/js/vendor/countMe.min.js', array(), false, true);
  wp_register_script('slickslider', get_template_directory_uri().'/assets/slick/slick.js', array(), false, true);
  wp_register_script('videoplayer', get_template_directory_uri().'/assets/appleple-modal-video/js/jquery-modal-video.min.js', array(), false, true);
  wp_register_script('nice_select', get_template_directory_uri().'/assets/jquery-nice-select-1.1.0/js/jquery.nice-select.js', array(), false, true);
  wp_register_script('fastclick', get_template_directory_uri().'/assets/jquery-nice-select-1.1.0/js/fastclick.js', array(), false, true);
  wp_register_script('prism', get_template_directory_uri().'/assets/jquery-nice-select-1.1.0/js/prism.js', array(), false, true);
  wp_register_script('waitme', get_template_directory_uri().'/assets/animation-wait-me/waitMe.js', array(), false, true);
  // wp_register_script('vimeo','//player.vimeo.com/api/player.js', array(), false, true);
  wp_register_script('header_menu', get_template_directory_uri().'/assets/js/header.js', array('jquery'), 2, true);
  wp_register_script('script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), 2, true);

  wp_enqueue_script('bootstrap');
  wp_enqueue_script('jquery');
  wp_enqueue_script('videoplayer');
  wp_enqueue_script('nice_select');
  wp_enqueue_script('fastclick');
  wp_enqueue_script('prism');
  wp_enqueue_script('waitme');
  wp_enqueue_script('countme');
  wp_enqueue_script('slickslider');
  wp_enqueue_script('header_menu');
  wp_enqueue_script('vimeo');
  wp_enqueue_script('script');
}

add_filter( 'the_title', function($title) {
  return $title ==  '' ? esc_html_x( 'Untitled', 'Added to posts and pages that are missing titles') : $title;
});

add_filter ( 'the_content' , function($content) {
  $content = str_replace('<h3', '<h4', $content);
  $content = str_replace('</h3>', '</h4>', $content);
  $content = str_replace('<h2', '<h3', $content);
  $content = str_replace('</h2>', '</h3>', $content);
  $content = str_replace('<h1', '<h2', $content);
  $content = str_replace('</h1>', '</h2>', $content);
  $content = str_replace('/\u2028/', ' ', $content);
  return  $content;  
});

function get_full_url($url) {
  if(str_starts_with( $url, 'http://') || str_starts_with( $url, 'https://' )) return $url;
    return home_url($url);
}

function get_image_alt_from_image_id($iamge_id) {
  $title = get_the_title($iamge_id);
  return $title;
}

function get_image_alt_from_image_url($image_url) {
  $image_id = attachment_url_to_postid($image_url);
  return get_image_alt_from_image_id($image_id);
}

function adjust_text($text, $max_len, $request = true) {
  $text = str_replace('<br>', '', $text);
  if($request && $text == '') return 'Undefined';
  if(strlen($text) <= $max_len) return $text;
  $new_text = substr($text, 0, $max_len - 3);
  $new_text .= ' ...';
  return $new_text;
}

function adjust_photo($photo_url) {
  if($photo_url == '') return get_template_directory_uri().'/assets/img/no_photo.png';
  return $photo_url;
}

function get_master_data($post_type) {
  $args = [
    'post_type' => $post_type,
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'ASC',
    'posts_per_page' => 100,
  ];
  $posts_query = new WP_query($args);
  $posts = $posts_query->posts;

  $result = [];
  foreach ($posts as $post) {
    $result[] = [
      'ID' => $post->ID,
      'name' => $post->post_title,
    ];
  }
  return $result;
}

add_filter( 'gform_confirmation_anchor', '__return_false' );
add_filter( 'gform_error_anchor', '__return_false' );


add_filter( 'gform_pre_submission_filter_3', 'dw_show_confirmation_and_form' );
function dw_show_confirmation_and_form( $form ) {
    $confirmation_pattern = '<div class="message-popup fadeInBottom">
      <div class="main-content">
        <div class="icon"><img src="'.get_template_directory_uri().'/assets/img/mail-logo.svg" alt="mail-logo"></div>
        <div class="content">
          <div class="confirm-message">%msg</div>
        </div>
      </div>
    </div>';

    // Inserts the form before the confirmation message
    if ( array_key_exists( 'confirmations', $form ) ) {
      foreach ( $form['confirmations'] as $key => $confirmation ) {
        $msg = $form['confirmations'][ $key ]['message'];
        $msg = str_replace('!', '!<br>', $form['confirmations'][ $key ]['message']);
        $form['confirmations'][ $key ]['message'] = str_replace(array("\r","\n"),'', str_replace('%msg', $msg, $confirmation_pattern));
      }
    }

    return $form;
}