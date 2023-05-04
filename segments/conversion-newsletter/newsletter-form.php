<?
  $newsletter_form_text = get_field('newsletter_form_text');
?>

<section id="newsletter_form" class="white-newsletter-form fadeInBottom-2 sm-no-border">
  <div class="container">
    <div class="newsletter-form-inner text-center">
      <p class="content lg-content d-none d-md-block black-color"><?=$newsletter_form_text?></p>
      <div class="form-group">
        <?=do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]');?>
      </div>
      <p class="content lg-content d-block d-md-none black-color"><?=$newsletter_form_text?></p>
    </div>
  </div>
</section>