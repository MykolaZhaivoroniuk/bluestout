<?
  $most_popular_title = get_field('most_popular_title');
  $most_popular_post_ids = get_field('most_popular_posts');
  $most_popular_posts = [];
  if(is_array($most_popular_post_ids)) {
    foreach($most_popular_post_ids as $index => $post_id) {
      $most_popular_posts[] = get_post($post_id['post']);
    }
  }
?>

<? get_template_part('segments/global/post-thumb-gallery', null, ['posts' => $most_popular_posts, 'title' => $most_popular_title]) ?>
