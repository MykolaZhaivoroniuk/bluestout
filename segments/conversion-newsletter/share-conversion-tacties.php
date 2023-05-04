<?
  $share_conversion_tacties_title = get_field('share_conversion_tacties_title');
  $share_conversion_tacties_text = get_field('share_conversion_tacties_text');
  $share_conversion_tacties_this_image = get_field('share_conversion_tacties_this_image');
  $share_conversion_tacties_not_this_image = get_field('share_conversion_tacties_not_this_image');
?>

<section id="share_conversion_tacties" class="fluid-padding">
    <div class="dark-block-box">
        <div class="content">
            <h2 class="white-color md-title"><?=$share_conversion_tacties_title?></h2>
            <p class="white-color md-content"><?=$share_conversion_tacties_text?></p>
            <span class="btn btn-sign-up btn-review hover-point blue-button-hover xs-content">SIGN UP (IT'S FREE)</span>
        </div>
        <div class="images text-center white-color d-flex">
            <div class="this">
                <p class="xs-content d-none d-md-block">THIS</p>
                <div class="fadeInBottom"><img src="<?=$share_conversion_tacties_this_image?>" alt="<?=get_image_alt_from_image_url($share_conversion_tacties_this_image)?>"/></div>
                <p class="xs-content d-sm-block d-md-none">THIS</p>
            </div>
            <div class="not-this">
                <p class="xs-content d-none d-md-block">NOT THIS</p>
                <div class="fadeInTop"><img src="<?=$share_conversion_tacties_not_this_image?>" alt="<?=get_image_alt_from_image_url($share_conversion_tacties_not_this_image)?>"/></div>
                <p class="xs-content d-sm-block d-md-none">NOT THIS</p>
            </div>
        </div>
    </div>
</section>