<?
  $hero_small_title = get_field('hero_small_title');
  $hero_big_title = get_field('hero_big_title');
  $hero_text = get_field('hero_text');
  $hero_text = str_replace(chr(0x0d), '<br>', $hero_text);
  // $hero_video = get_field('hero_video');
  // $hero_video_image = get_field('hero_video_image');
  // $hero_video_hover_text = get_field('hero_video_hover_text');
?>

<section id="hero" class="page-hero">
  <div class="container">
    <div class="hero-inner">
      <div class="title fadeInBottom-1">
        <div class="row">
          <div class="col-lg-10">
            <div class="small-title lg-content gray-color">
              <p class=""><?=$hero_small_title?></p>
            </div>
            <div class="big-title">
              <h1 class="smd-title title-font"><?=$hero_big_title?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row content">
        <div class="col-lg-6">
          <div class="graphic-placeholder fadeInBottom-4 text-center">
            <?get_template_part('assets/img/cro-graphic');?>
          </div>
          <!-- <div class="video fadeInBottom-4">
            <div class="image" style="background-image:url('<?=$hero_video_image?>')">
            </div>
            <div class="video-hover-layout">
              <div class="video-hover-inner">
                <p class="hover-text xs-title"><?=$hero_video_hover_text?></p>
                <span class="hover-point img-wrapper btn-video-play" data-channel="custom" src="<?=$hero_video?>">
                  <img src="<?=bloginfo('template_url');?>/assets/img/video-play.png">
                </span>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col-lg-6">
          <div class="content-text xg-content fadeInBottom-2">
            <p><?=$hero_text?></p>
          </div>
          <div class="fadeInBottom-3">
            <a href="<?=get_field('book_a_call_link', 'option')?>" class="btn btn-book-call btn-blue btn-big" target="blank">BOOK A CALL</a>
          </div>
        </div>
      </div>
      <div class="row fadeInBottom-4">
        <div class="col-lg-6 d-none d-lg-block">
        </div>
        <div class="col-lg-6 col-12">
          <div class="trusted-text-wrapper">
            <p class="trusted-text xxs-content">TRUSTED PARTER OF <img src="<?=bloginfo('template_url');?>/assets/img/logo/logo-shopify-dark.png" alt="shopify-plus"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>