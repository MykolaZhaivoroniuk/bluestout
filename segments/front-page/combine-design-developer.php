<?
  $section4_image = get_field('section4_image');
  $section4_text = get_field('section4_text');
?>

<section id="combine_design_developer">
  <div class="container">
    <div class="combine-design-developer-inner text-center">
        <div class="image">
        <?get_template_part('assets/img/info-alternate-reverse');?>
        </div>
        <div class="content wave-hover dark-color sm-title">
          <p class=""><?=$section4_text?></p>
        </div>
    </div>
  </div>
</section>