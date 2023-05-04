<?
  $case_studies_posts = isset($args['posts']) ? $args['posts'] : [];
  $print_wrapper = isset($args['print_wrapper']) ? $args['print_wrapper'] : true;
  foreach($case_studies_posts as $index => $post) {
    $post_id = $post->ID;
    $post_url = get_permalink($post_id);
    $post_meta = get_post_meta($post_id);
    $post_photo_id = isset($post_meta['gallery_image'][0]) ? $post_meta['gallery_image'][0] : '';
    $post_white_loto_id = isset($post_meta['gallery_white_logo'][0]) ? $post_meta['gallery_white_logo'][0] : '';
    $post_dark_loto_id = isset($post_meta['gallery_dark_logo'][0]) ? $post_meta['gallery_dark_logo'][0] : '';
    $post_hover_text = isset($post_meta['gallery_big_title'][0]) ? $post_meta['gallery_big_title'][0] : $post->post_title;
    $post_photo_url = wp_get_attachment_url($post_photo_id);
    $post_white_logo_url = wp_get_attachment_url($post_white_loto_id);
    $post_dark_logo_url = wp_get_attachment_url($post_dark_loto_id);

    $html = '
    <div class="col col-md-6 col-sm-12 col-12">
      <div class="gallery-item fadeInBottom-'.($index % 4 + 1).'">
        <div class="gallery-item-link">
          <div class="gallery-bg" style="background-image: url('.adjust_photo($post_photo_url).')"> </div>
          <div class="gallery-logo"><img class="" src="'.$post_dark_logo_url.'" alt="'.get_image_alt_from_image_url($post_dark_logo_url).'"/></div>
          <div class="gallery-hover-layer text-center">
            <p class="hover-text xs-title white-color">'.$post_hover_text.'</p>
            <a href="'.$post_url.'" class="btn-view-case-study blue-button-hover xs-content">VIEW CASE STUDY</a>
            <div class="hover-logo text-center">
              <img src="'.$post_white_logo_url.'" alt="'.get_image_alt_from_image_url($post_white_logo_url).'"/>
            </div>
          </div>
          <a href="'.$post_url.'" class="gallery-item-link-to" data-c="'.$post_hover_text.'" aria-label="'.$post_hover_text.'"></a>
        </div>
      </div>
    </div>
    ';
    echo $html;
  }
?>