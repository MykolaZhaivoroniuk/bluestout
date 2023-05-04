<?
  $hero_title = get_field('hero_title');
  $hero_mobile_title = str_replace('and', '&', $hero_title);
  $hero_text = get_field('hero_text');
  $hero_book_a_call_link = get_field('hero_book_a_call_link');
?>

<section id="hero" class="">
  <div class="hero-bg">
    <div class="home-top-left-ellipse-bg"></div>
    <div class="home-cross-line-bg"></div>
    <div class="home-left-bottom-ellipse-bg"></div>
    <div class="home-right-ellipse-bg"></div>
  </div>
  <div class="hero-main">
    <div class="hero-inner text-center page-hero">
      <div class="hero-content">
        <div class="d-flex justify-content-center"><div class="title md-title text-center wave-hover white-color d-none d-sm-block"><?=$hero_title?></div></div>
        <div class="d-flex justify-content-center"><div class="title md-title text-center wave-hover white-color d-block d-sm-none"><?=$hero_mobile_title?></div></div>
        <div class="d-flex justify-content-center"><div class="text text-center xxg-content"><?=$hero_text?></div></div>
        <div class="tell-more d-flex justify-content-center">
          <?=do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]');?>
        </div>
      </div>
      <div class="d-flex justify-content-center xxs-content"><p class="or">OR</p></div>
      <div class="d-flex justify-content-center xs-content">
        <a href="<?=get_field('book_a_call_link', 'option')?>" class="btn-book-call white-button-hover" target="blank">BOOK A CALL</a>
      </div>
      <div class="trusted-text-wrapper">
        <p class="trusted-text xsx-content">TRUSTED PARTER OF &nbsp; <img src="<?=bloginfo('template_url');?>/assets/img/logo/logo-shopify.png" alt="Shopify"></p>
      </div>
      <!-- <div class="scroll-down">
        <a href="javascript:;" class="btn-scroll-down"><div class="arrow-wrapper"><img class="arrow" src="<?=bloginfo('template_url').'/assets/img/arrow-down.png'?>" alt="down"/></div></a>
      </div> -->
    </div>
  </div>
</section>