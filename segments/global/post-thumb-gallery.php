<?
  $post_list = isset($args['posts']) ? $args['posts'] : [];
  $title = isset($args['title']) ? $args['title'] : '';
  $text = isset($args['text']) ? $args['text'] : '';
  $class = isset($args['class']) ? $args['class'] : '';
?>

<section class="post-thumb-gallery <?=$class?>">
  <div class="post-thumb-inner fluid-padding">
    <div class="title text-center dark-color fadeInOpacity">
      <h2 class="sm-title title-font"><?=$title?></h2>
    </div>
    <? if($text != '')  { ?>
      <div class="content text-center fadeInOpacity">
        <p class="xg-content"><?=$text?></p>
      </div>
    <? } ?>
    <div class="post-list desktop d-none d-md-block">
      <div class="row">
        <? foreach ($post_list as $index => $post) {
          $post_id = $post->ID;
          $post_url = get_permalink($post_id);
          $post_meta = get_post_meta($post_id);
          $post_photo_id = isset($post_meta['gallery_image'][0]) ? $post_meta['gallery_image'][0] : '';
          $categories = wp_get_post_categories($post_id, ['fields ' => 'ids']);
          $category_names = [];
          foreach ($categories as $category_id) {
            $category = get_category($category_id);
            $category_name = $category->name;
            $category_names[] = $category_name;
          }
          $post_small_title = isset($post_meta['gallery_small_title'][0]) ? $post_meta['gallery_small_title'][0] : '';
          $post_big_title = isset($post_meta['gallery_big_title'][0]) ? $post_meta['gallery_big_title'][0] : '';
          $post_photo_url = adjust_photo(wp_get_attachment_url($post_photo_id));
          $add_class = 'fadeInBottom-' . ($index % 3 + 1);
        ?>
          <div class="col-md-4">
            <div class="post-thumb-item <?=$add_class?>">
              <a href="<?=$post_url?>">
                <div class="post-thumb-item-content">
                  <div class="image" style="background-image:url('<?=$post_photo_url?>')">
                  </div>
                  <div class="top">
                    <? foreach ($category_names as $category_name) { ?>
                      <span class="mini-border-radius category-sign xxs-content"><?=strtoupper($category_name)?></span>
                    <? } ?>
                    <span class="small-title xs-content"><?=$post_small_title?></span>
                  </div>
                  <div class="bottom">
                  <span class="big-title gray-color"><?=$post_big_title?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <? } ?>
      </div>
    </div>
    <div class="post-list mobile d-block d-md-none">
      <div class="slideme-3 post-list-innner" slide-max-width="300">
      <? foreach ($post_list as $index => $post) {
        $post_id = $post->ID;
        $post_url = get_permalink($post_id);
        $post_meta = get_post_meta($post_id);
        $post_photo_id = isset($post_meta['gallery_image'][0]) ? $post_meta['gallery_image'][0] : '';
        $categories = wp_get_post_categories($post_id, ['fields ' => 'ids']);
        $category_id = isset($categories[0]) ? $categories[0] : '';
        $category = get_category($category_id);
        $category_name = $category->name;
        $post_small_title = isset($post_meta['gallery_small_title'][0]) ? $post_meta['gallery_small_title'][0] : '';
        $post_big_title = isset($post_meta['gallery_big_title'][0]) ? $post_meta['gallery_big_title'][0] : '';
        $post_photo_url = wp_get_attachment_url($post_photo_id);
      ?>
        <div class="post-thumb-item">
          <div class="prepare-cover"></div>
          <div class="post-thumb-item-content">
            <a href="<?=$post_url?>">
              <div class="post-thumb">
                <div class="image" style="background-image:url('<?=$post_photo_url?>')">
                </div>
                <div class="top">
                  <span class="category-sign xxs-content"><?=$category_name?></span>
                  <span class="small-title xs-content"><?=$post_small_title?></span>
                </div>
                <div class="bottom">
                  <span class="big-title gray-color"><?=$post_big_title?></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      <? } ?>
      </div>
    </div>
  </div>
</section>