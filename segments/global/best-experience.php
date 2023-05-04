<?
  $best_experience_title = get_field('best_experience_title', 'option');
  $best_experience_text = get_field('best_experience_text', 'option');
  $best_experience_icon = get_field('best_experience_icon', 'option');
  $best_experience_user_name = get_field('best_experience_user_name', 'option');
  $best_experience_user_company = get_field('best_experience_user_company', 'option');
?>

<section class="best-experience fluid-padding">
    <div class="best-experience-inner text-center quote-box fadeInOpacity">
        <div class="quote-box-inner">
            <div class="title">
                <h2 class="sm-title"><?=$best_experience_title?></h2>
            </div>
            <div class="quote-mark">
                <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
            </div>
            <div class="content lg-content">
                <?=$best_experience_text?>
            </div>
            <div class="bottom">
                <div>
                    <img src="<?=$best_experience_icon?>" alt="<?=get_image_alt_from_image_url($best_experience_icon)?>"/>
                </div>
                <div class="seperator">

                </div>
                <div class="user-data smd-content">
                    <p class="user-name">
                        <?=$best_experience_user_name?>
                    </p>
                    <p class="user-company">
                        <strong><?=$best_experience_user_company?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>