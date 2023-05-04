<?
$post_list = isset($args['posts']) ? $args['posts'] : [];
foreach($post_list as $post) {
  $post_id = $post->ID;
  $post_url = get_permalink($post_id);
  $post_meta = get_post_meta($post_id);
  $post_photo_id = isset($post_meta['gallery_image'][0]) ? $post_meta['gallery_image'][0] : '';
  $post_photo_url = wp_get_attachment_url($post_photo_id);
  $post_photo_url = adjust_photo($post_photo_url);
  $post_big_title = isset($post_meta['gallery_big_title'][0]) ? $post_meta['gallery_big_title'][0] : '';
?>
  <div class="col-lg-4 col-md-6 col-12 col">
    <div class="cro-winner-item">
      <a href="<?=$post_url?>">
        <div class="cro-winner-item-content">
          <div class="title text-center">
            <h4 class="md-content dark-color"><?=adjust_text($post_big_title, 100)?></h4>
          </div>
          <div class="image">
            <img src="<?=$post_photo_url;?>" alt="<?=get_image_alt_from_image_url($post_photo_url);?>">
          </div>
        </div>
      </a>
    </div>
  </div>
<? } ?>