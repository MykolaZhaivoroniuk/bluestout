<?
  $newsletter_form_title = get_field('newsletter_form_title');
  $newsletter_form_text = get_field('newsletter_form_text');
  $newsletter_form_mobile_text = get_field('newsletter_form_mobile_text');
?>

<section id="newsletter_form" class="white-newsletter-form .sm-no-border fadeInBottom-3">
  <div class="container">
    <div class="newsletter-form-inner text-center">
      <div class="title lg-content black-color wave-hover">
        <?=$newsletter_form_title?>
      </div>
      <div class="form-group">
        <?=do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');?>
      </div>
      <p class="content lg-content d-none d-md-block black-color"><?=$newsletter_form_text?></p>
      <p class="content lg-content d-block d-md-none black-color"><?=$newsletter_form_mobile_text?></p>
    </div>
  </div>
</section>
