<?
  $hero_small_title = get_field('hero_small_title');
  $hero_big_title = get_field('hero_big_title');
  $hero_text = get_field('hero_text');
?>

<section id="hero" class="page-hero fadeInBottom-1">
  <div class="container">
    <div class="hero-inner text-center">
      <div class="category">
        <p class="lg-content gray-color"><?=$hero_small_title?></p>
      </div>
      <div class="title">
        <h1 class="smd-title title-font"><?=$hero_big_title?></h1>
      </div>
      <div class="content xg-content black-color">
        <?=$hero_text?>
      </div>
    </div>
  </div>
</section>