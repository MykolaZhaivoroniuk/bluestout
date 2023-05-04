<?
  $case_studies_title = get_field('cro_case_studies_title', 'option');
  $case_studies_post_ids = get_field('cro_case_studies_posts', 'option');
  $case_studies_posts = [];
  foreach($case_studies_post_ids as $index => $post_id) {
    $case_studies_posts[] = get_post($post_id['post']);
  }
?>

<section class="case-studies-gallery">
  <div class="case-studies-inner fluid-padding">
    <div class="title text-center dark-color">
      <h2 class="lg-title fadeInOpacity"><?=$case_studies_title?></h2>
    </div>
    <div class="gallery">
      <div class="row">
        <? get_template_part('segments/global/case-studies-gallery', null, ['posts' => $case_studies_posts]) ?>
      </div>
    </div>
    <div class="see-more-work text-center">
      <a href="case-studies/" class="btn-see-more-work btn-normal trans-button-hover xs-content">SEE MORE WORK</a>
    </div>
  </div>
</section>