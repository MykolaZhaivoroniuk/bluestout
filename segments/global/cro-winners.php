<?
  $cro_winners_title = get_field('cro_winners_title', 'option');
  $cro_winners_text = get_field('cro_winners_text', 'option');
  $cro_winners_review_button_text = get_field('cro_winners_review_button_text', 'option');
  $cro_winners_review_button_short_text = get_field('cro_winners_review_button_short_text', 'option');
  $cro_winners_review_button_link = get_field('cro_winners_review_button_link', 'option');
  $cro_winners_this_image = get_field('cro_winners_this_image', 'option');
  $cro_winners_not_this_image = get_field('cro_winners_not_this_image', 'option');
?>

<section id="cro_winners" class="fluid-padding">
	<div class="cro-winners-inner dark-block-box">
		<div class="content">
			<h2 class="white-color md-title title-font"><?=$cro_winners_title?></h2>
			<p class="white-color md-content"><?=$cro_winners_text?></p>
			<a href="<?=$cro_winners_review_button_link?>" class="btn btn-review blue-button-hover xs-content d-none d-sm-inline-block"><?=$cro_winners_review_button_text?></a>
			<a href="<?=$cro_winners_review_button_link?>" class="btn btn-review blue-button-hover xs-content d-inline-blox d-sm-none"><?=$cro_winners_review_button_short_text?></a>
		</div>
		<div class="images text-center white-color d-flex">
			<div class="this">
				<p class="xs-content d-none d-md-block">THIS</p>
				<div class="fadeInBottom"><img src="<?=$cro_winners_this_image?>" alt="<?=get_image_alt_from_image_url($cro_winners_this_image)?>"/></div>
				<p class="xs-content d-sm-block d-md-none">THIS</p>
			</div>
			<div class="not-this">
				<p class="xs-content d-none d-md-block">NOT THIS</p>
				<div class="fadeInTop"><img src="<?=$cro_winners_not_this_image?>" alt="<?=get_image_alt_from_image_url($cro_winners_not_this_image)?>"/></div>
				<p class="xs-content d-sm-block d-md-none">NOT THIS</p>
			</div>
		</div>
	</div>
</section>