<?
  $we_know_their_stuff_title = get_field('we_know_their_stuff_title', 'option');
  $we_know_their_stuff_text = get_field('we_know_their_stuff_text', 'option');
  $we_know_their_stuff_logo = get_field('we_know_their_stuff_logo', 'option');
  $we_know_their_stuff_user_name = get_field('we_know_their_stuff_user_name', 'option');
  $we_know_their_stuff_user_company = get_field('we_know_their_stuff_user_company', 'option');
?>

<section class="we-know-their-stuff fluid-padding">
    <div class="we-know-their-stuff-inner text-center quote-box fadeInOpacity">
        <div class="quote-box-inner">
            <div class="title">
                <h2 class="sm-title"><?=$we_know_their_stuff_title?></h2>
            </div>
            <div class="quote-mark">
                <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
            </div>
            <div class="content lg-content">
                <?=$we_know_their_stuff_text?>
            </div>
            <div class="bottom">
                <div>
                    <img src="<?=$we_know_their_stuff_logo?>" alt="<?=get_image_alt_from_image_url($we_know_their_stuff_logo)?>" />
                </div>
                <div class="seperator">

                </div>
                <div class="user-data smd-content">
                    <p class="user-name">
                        <?=$we_know_their_stuff_user_name?>
                    </p>
                    <p class="user-company">
                        <strong><?=$we_know_their_stuff_user_company?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>