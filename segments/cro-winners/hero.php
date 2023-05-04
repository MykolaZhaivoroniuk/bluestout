<?
  $hero_small_title = get_field('hero_small_title');
  $hero_big_title = get_field('hero_big_title');
  $hero_text = get_field('hero_text');
?>

<section id="hero" class="page-hero">
  <div class="container">
    <div class="hero-inner text-center">
      <div class="category">
        <p class="lg-content gray-color fadeInBottom-1"><?=$hero_small_title?></p>
      </div>
      <div class="title">
        <h1 class="lg-title title-font fadeInBottom-1"><?=$hero_big_title?></h1>
      </div>
      <div class="content xg-content black-color fadeInBottom-2">
        <?=$hero_text?>
      </div>
    </div>
  </div>
</section>
