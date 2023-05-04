<?
  $continue_learning_title = 'Continue learning';
  $continue_learning_text = 'Here\'s what we recommend you read next.';
  $continue_learning_post_ids = get_field('continue_learning_posts');
  $continue_learning_posts = [];
  if(is_array($continue_learning_post_ids)) {
    foreach($continue_learning_post_ids as $index => $post_id) {
      $continue_learning_posts[] = get_post($post_id['post']);
    }

    get_template_part(
      'segments/global/post-thumb-gallery', 
      null, 
      ['posts' => $continue_learning_posts, 'title' => $continue_learning_title, 'text' => $continue_learning_text, 'class' => 'no-bg']
    ); 
  }
 
 ?>