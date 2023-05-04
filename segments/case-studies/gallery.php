<?
  $case_studies_title = get_field('case_studies_title', 'option');
  $sort_key = get_field('sort_key');
  $sort_direction = get_field('sort_direction');
  $posts_count_per_page = get_field('posts_per_page');
  $case_study_category = get_category_by_slug(CATAGORY_SLGU_CASE_STUDY);
  $category_id = $case_study_category->cat_ID;

  $args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'meta_key' => $sort_key,
    'orderby' => 'meta_value_num',
    'order' => $sort_direction,
    'posts_per_page' => $posts_count_per_page,
    'cat' => $category_id,
  ];

  if($sort_key == 'publish_date') {
    $args['orderby'] = $sort_key;
    unset($args['meta_key']);
  }

  $post_list = new WP_query($args);
  $rest_posts_count = $post_list->found_posts - count($post_list->posts);
?>

<section class="case-studies-gallery page-hero">
  <div class="case-studies-inner fluid-padding">
    <div class="title text-center dark-color">
      <h1 class="lg-title fadeInOpacity"><?=$case_studies_title?></h1>
    </div>
    <? get_template_part('segments/global/brand-average-degree', null, ['top-bar-visible' =>true, 'bottom-bar-visible' => false])?>
    <div class="gallery">
      <div class="row">
        <? get_template_part('segments/global/case-studies-gallery', null, ['posts' => $post_list->posts]) ?>
      </div>
    </div>
    <div class="see-more-work text-center">
      <a href="javascript:;" class="btn-see-more-work btn-normal trans-button-hover xs-content btn-load-more" 
        data-action="get_more_case_studies" data-category-id="<?=$category_id?>" 
        data-rest-posts-count="<?=$rest_posts_count?>"
        data-paged="1" style="display: <? echo ($post_list->found_posts > $posts_count_per_page) ? 'inline-block' : 'none' ?>">
        LOAD MORE
      </a>
    </div>
  </div>
</section>