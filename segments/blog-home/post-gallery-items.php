<?
$post_list = isset($args['posts']) ? $args['posts'] : [];
foreach($post_list as $post) {
  $post_id = $post->ID;
  $post_url = get_permalink($post_id);
  $post_meta = get_post_meta($post_id);
  $post_photo_id = isset($post_meta['gallery_image'][0]) ? $post_meta['gallery_image'][0] : '';
  $post_photo_url = wp_get_attachment_url($post_photo_id);
  $post_photo_url = adjust_photo($post_photo_url);
  $categories = wp_get_post_categories($post_id, ['fields ' => 'ids']);

  $category_names = [];
  foreach ($categories as $category_id) {
    $category = get_category($category_id);
    $category_name = $category->name;
    $category_names[] = $category_name;
  }

  $post_small_title = isset($post_meta['gallery_small_title'][0]) ? $post_meta['gallery_small_title'][0] : '';
  $post_big_title = isset($post_meta['gallery_big_title'][0]) ? $post_meta['gallery_big_title'][0] : '';
  $post_big_title = adjust_text($post_big_title, 70);
  $post_text = isset($post_meta['gallery_text'][0]) ? $post_meta['gallery_text'][0] : '';
  $post_text = adjust_text($post_text, 200);
?>
  <div class="post-item">
    <a href="<?=$post_url?>">
      <div class="post-item-inner">
        <div class="row">
          <div class="col-lg-5 col-12">
            <div class="image" style="background-image:url('<?=$post_photo_url?>')">
            </div>
          </div>
          <div class="col-lg-7 col-12">
            <div class="content">
              <div class="top">
                <? foreach ($category_names as $category_name) { ?>
                  <span class="mini-border-radius category-sign xxs-content"><?=$category_name?></span>
                <? } ?>
                <span class="small-title xs-content"><?=$post_small_title?></span>
              </div>
              <div class="big-title xg-content">
                <p class=""><?=$post_big_title?></p>
              </div>
              <div class="post-text md-content gray-color">
                <p class=""><?=$post_text?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
<? } ?>