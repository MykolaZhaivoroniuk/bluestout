<?
add_action('wp_head','bluestout_ajaxurl');
function bluestout_ajaxurl() { ?>
  <script type="text/javascript">
    var ajaxurl = '<?=admin_url('admin-ajax.php');?>';
  </script>
<?}

//case studies ajax pagination
function get_more_case_studies() {
  $paged = $_REQUEST['paged'];
  $category_id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';

  $page_data = get_page_by_path('case-studies/');
  $page_id = $page_data->ID;
  $sort_mode = get_field('sort_mode', $page_id);
  $sort_direction = get_field('sort_direction', $page_id);
  $posts_per_page = get_field('posts_per_page', $page_id);

  if ( $paged) {
    $args = [
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      'post_status' => array( 'publish' ),
      'meta_key' => $sort_mode,
      'orderby' => 'meta_value_num',
      'order' => $sort_direction,
    ];

    if($category_id != '') $args['cat'] = $category_id;

    $post_list = new WP_query($args);
    if($post_list->posts){
      get_template_part( 'segments/global/case-studies-gallery', null, ['posts' => $post_list->posts, 'print_wrapper' => false] );
    }
  }

  die();
}

add_action( 'wp_ajax_get_more_case_studies', 'get_more_case_studies' );
add_action( 'wp_ajax_nopriv_get_more_case_studies', 'get_more_case_studies' );


//blog post ajax pagination
function get_more_posts() {
  $paged = $_REQUEST['paged'];
  $category_id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';

  $page_data = get_page_by_path('blog/');
  $page_id = $page_data->ID;
  $posts_per_page = get_field('post_gallery_posts_per_page', $page_id);
  $post_gallery_display_categories = get_field('post_gallery_display_categories', $page_id);

  if ( $paged) {
    $args = [
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      'post_status' => array( 'publish' ),
      'orderby' => 'publish_date',
      'order' => 'DESC',
    ];

    if($category_id === '-1') {
      $args['category__not_in'] = $post_gallery_display_categories;
    } else if($category_id != '') {
      $args['cat'] = $category_id;
    }

    if($sort_key == 'publish_date') {
      $args['orderby'] = $sort_key;
      unset($args['meta_key']);
    }

    $post_list = new WP_query($args);
    if($post_list->posts) {
      echo '<param total="'.$post_list->found_posts.'" posts_per_page="'.$posts_per_page.'" posts_count="'.count($post_list->posts).'" />';
      get_template_part( 'segments/blog-home/post-gallery-items', null, ['posts' => $post_list->posts] );
    }
  }

  die();
}

add_action( 'wp_ajax_get_more_posts', 'get_more_posts' );
add_action( 'wp_ajax_nopriv_get_more_posts', 'get_more_posts' );



function get_cro_winners_gallery() {
  $param_page_type = $_REQUEST['_page_type'];
  $param_industry = $_REQUEST['_industry'];
  $param_metric = $_REQUEST['_metric'];
  $paged = $_REQUEST['paged'];
  $category_id = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';

  $page_data = get_page_by_path('cro-winners/');
  $page_id = $page_data->ID;
  $posts_per_page = get_field('cro_winners_gallery_posts_per_page', $page_id);
  $sort_key = get_field('cro_winners_gallery_sort_key', $page_id);
  $sort_direction = get_field('cro_winners_gallery_sort_direction', $page_id);

  if ( $paged) {
    $args = [
      'post_type' => 'post',
      'paged' => $paged,
      'post_status' => 'publish',
      'meta_key' => $sort_key,
      'orderby' => 'meta_value_num',
      'order' => $sort_direction,
      'posts_per_page' => $posts_per_page,
      'cat' => $category_id,
    ];

    if($category_id != '') $args['cat'] = $category_id;

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
    if($post_list->posts){
      echo '<param total="'.$post_list->found_posts.'" posts_per_page="'.$posts_per_page.'" posts_count="'.count($post_list->posts).'" />';
      get_template_part( 'segments/cro-winners/cro-winners-gallery-items', null, ['posts' => $post_list->posts] );
    }
  }

  die();
}

add_action( 'wp_ajax_get_cro_winners_gallery', 'get_cro_winners_gallery' );
add_action( 'wp_ajax_nopriv_get_cro_winners_gallery', 'get_cro_winners_gallery' );