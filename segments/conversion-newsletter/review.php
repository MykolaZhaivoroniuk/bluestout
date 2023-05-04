<?
  $review_text = get_field('review_text');
  $review_photo = get_field('review_photo');
  $review_logo = get_field('review_logo');
  $review_user_name = get_field('review_user_name');
  $review_user_company = get_field('review_user_company');
?>

<section id="review" class="fadeInBottom-3">
  <div class="container">
    <div class="review-inner text-center">
      <div class="content lg-content black-color">
        <img class="quote-sign" src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
        <blockquote><p><?=$review_text?></p></blockquote>
      </div>
      <div class="revelator">
        <div class="photo">
          <img src="<?=$review_photo?>" alt="<?=get_image_alt_from_image_url($review_photo)?>">
        </div>
        <div class="logo smd-content text-center dark-color">
          <img src="<?=$review_logo?>" alt="<?=get_image_alt_from_image_url($review_logo)?>">
          <p><span class="user-name"><?=$review_user_name?></span> | <span class="user-company"><?=$review_user_company?></span></p>
        </div>
      </div>
      <div class="down-bar-wrapper">
        <div class="col-12 col-md-6 down-bar">
        </div>
      </div>
    </div>
  </div>
</section>