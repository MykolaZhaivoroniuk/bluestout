<?
  $newsletter_confirmation_title = get_field('newsletter_confirmation_title');
  $newsletter_confirmation_text = get_field('newsletter_confirmation_text');
  $newsletter_confirmation_action_text = get_field('newsletter_confirmation_action_text');
?>

<section id="main_section" class="page-hero">
  <div class="container text-center">
    <div class="check-image fadeInBottom-1">
      <?get_template_part('assets/img/newsletter-confirm-check');?>
    </div>
    <div class="title fadeInBottom-2">
      <h1 class="lg-title title-font"><?=$newsletter_confirmation_title?></h1>
    </div>
    <div class="content fadeInBottom-3">
      <p class="xg-content"><?=$newsletter_confirmation_text?></p>
    </div>
    <div class="action fadeInBottom-4">
      <a href="<?=get_full_url('cro-winners')?>" class="btn btn-blue blue-button-hover"><?=$newsletter_confirmation_action_text?></a>
    </div>
  </div>
</section>