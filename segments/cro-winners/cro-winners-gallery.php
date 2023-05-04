<?
  $param_page_type = $_GET['_page_type'];
  $param_industry = $_GET['_industry'];
  $param_metric = $_GET['_metric'];
  $page_types = get_master_data('page-type');
  $industries = get_master_data('industry');
  $metrics = get_master_data('metric');

  $case_study_category = get_category_by_slug(CATAGORY_SLGU_CRO_WINNER);
  $category_id = $case_study_category->cat_ID;
  $posts_count_per_page = get_field('cro_winners_gallery_posts_per_page');
  $sort_key = get_field('cro_winners_gallery_sort_key');
  $sort_direction = get_field('cro_winners_gallery_sort_direction');

  $args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'meta_key' => $sort_key,
    'orderby' => 'meta_value_num',
    'order' => $sort_direction,
    'posts_per_page' => $posts_count_per_page,
    'cat' => $category_id,
  ];

  $meta_query = ['relation' => 'AND'];
  if($param_page_type != '') $meta_query[] = ['key' => 'page_type', 'value' => $param_page_type, 'compare' => 'like'];
  if($param_industry != '') $meta_query[] = ['key' => 'industry', 'value' => $param_industry, 'compare' => 'like'];
  if($param_metric != '') $meta_query[] = ['key' => 'metric', 'value' => $param_metric, 'compare' => 'like'];

  if($sort_key == 'publish_date') {
    $args['orderby'] = $sort_key;
    unset($args['meta_key']);
  }

  if(!empty($meta_query)) $args['meta_query'] = $meta_query;

  $post_list = new WP_query($args);
  $rest_posts_count = $post_list->found_posts - count($post_list->posts);
?>

<section id="cro_winners_gallery" class="fluid-padding">
  <div class="cro-winners-gallery-inner">
    <div class="filters desktop d-none d-md-flex">
      <div class="filter-item">
        <select class="filter-selector select-page-type wide">
          <option data-display="Page Type" value="">All</option>
          <?
            foreach ($page_types as $page_type) {
              echo '<option value="'.$page_type['ID'].'" '.($page_type['ID'] == $param_page_type ? 'selected': '').'>'.$page_type['name'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="filter-item">
        <select class="filter-selector select-industry wide">
          <option data-display="Industry" value="">All</option>
          <?
            foreach ($industries as $industry) {
              echo '<option value="'.$industry['ID'].'" '.($industry['ID'] == $param_industry ? 'selected': '').'>'.$industry['name'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="filter-item">
        <select class="filter-selector select-metric wide">
          <option data-display="Metric" value="">All</option>
          <?
            foreach ($metrics as $metric) {
              echo '<option value="'.$metric['ID'].'" '.($metric['ID'] == $param_metric ? 'selected': '').'>'.$metric['name'].'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    <div class="filters mobile d-flex d-md-none">
      <div class="filter-item">
        <span href="javascript:;" class="filter-btn btn-page-type hover-point black-color text-center-color">PAGE TYPE</span>
        <div class="mobile-land-menu">
          <div class="mobile-land-menu-inner">
            <div class="mobile-land-menu-content">
              <div class="menu-close"><span href="javascript:;" class="hover-point btn-menu-close"><img src="<?=bloginfo('template_url');?>/assets/img/close.png" alt="close"/></span></div>
              <div class="menu-title">
                  <span>PAGE TYPE</span>
              </div>
              <ul class="menu-items">
                <li class="menu-item black-color"> <span class="btn-page-type hover-point" data-page-type="">All</span></li>
                <?
                  foreach ($page_types as $page_type) {
                    echo '<li class="menu-item black-color"> <span class="btn-page-type hover-point" data-page-type="'.$page_type['ID'].'">'.$page_type['name'].'</span></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="filter-item">
        <span href="javascript:;" class="filter-btn btn-industry hover-point black-color text-center">INDUSTRY</span>
        <div class="mobile-land-menu">
          <div class="mobile-land-menu-inner">
            <div class="mobile-land-menu-content">
              <div class="menu-close"><span href="javascript:;" class="hover-point btn-menu-close"><img src="<?=bloginfo('template_url');?>/assets/img/close.png" alt="close"/></span></div>
              <div class="menu-title">
                  <span>PAGE TYPE</span>
              </div>
              <ul class="menu-items">
                <li class="menu-item black-color"> <span class="btn-industry hover-point" data-industry="">All</span></li>
                <?
                  foreach ($industries as $industry) {
                    echo '<li class="menu-item black-color"> <span class="btn-industry hover-point" data-industry="'.$industry['ID'].'">'.$industry['name'].'</span></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="filter-item">
        <span href="javascript:;" class="filter-btn btn-metric hover-point black-color text-center">METRIC</span>
        <div class="mobile-land-menu">
          <div class="mobile-land-menu-inner">
            <div class="mobile-land-menu-content">
              <div class="menu-close"><span href="javascript:;" class="hover-point btn-menu-close"><img src="<?=bloginfo('template_url');?>/assets/img/close.png" alt="close"/></span></div>
              <div class="menu-title">
                  <span>PAGE TYPE</span>
              </div>
              <ul class="menu-items">
                <li class="menu-item black-color"> <span class="btn-metric hover-point" data-metric="">All</span></li>
                <?
                  foreach ($metrics as $metric) {
                    echo '<li class="menu-item black-color"> <span class="btn-metric hover-point" data-metric="'.$metric['ID'].'">'.$metric['name'].'</span></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cro-winners-list">
      <div class="row">
        <? get_template_part('segments/cro-winners/cro-winners-gallery-items', null, ['posts' => $post_list->posts]) ?>
      </div>
    </div>
    <div class="gallery-bottom">
      <div class="page-info xs-content text-center gray-color">
        <span><?=count($post_list->posts)?>/<?=$post_list->found_posts?></span>
      </div>
      <div class="see-more-work text-center">
        <a href="javascript:;" class="btn btn-trans-blue xs-content btn-load-more" 
          data-action="get_cro_winners_gallery" data-category-id="<?=$category_id?>" 
          data-rest-posts-count="<?=$rest_posts_count?>"
          data-paged="1" style="display: <? echo ($post_list->found_posts > $posts_count_per_page) ? 'inline-block' : 'none' ?>">
          SHOW MORE
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  let current_category_id = '<?=$category_id?>'
  let current_page_type = '<?=$param_page_type?>';
  let current_industry = '<?=$param_industry?>';
  let current_metric = '<?=$param_metric?>';
</script>
