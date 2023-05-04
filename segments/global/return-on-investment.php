<?
  $return_on_investment_title = get_field('return_on_investment_title', 'option');
  $return_on_investment_text = get_field('return_on_investment_text', 'option');
  $return_on_investment_icon = get_field('return_on_investment_icon', 'option');
  $return_on_investment_user_name = get_field('return_on_investment_user_name', 'option');
  $return_on_investment_user_company = get_field('return_on_investment_user_company', 'option');
?>

<section class="return_on_investment fluid-padding">
    <div class="return-on-investment-inner text-center quote-box">
        <div class="quote-box-inner">
            <div class="title">
                <h2 class="sm-title"><?=$return_on_investment_title?></h2>
            </div>
            <div class="quote-mark">
                <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
            </div>
            <div class="content lg-content">
                <?=$return_on_investment_text?>
            </div>
            <div class="bottom">
                <div>
                    <img src="<?=$return_on_investment_icon?>" alt=<?=get_image_alt_from_image_url($return_on_investment_icon)?>/>
                </div>
                <div class="seperator">

                </div>
                <div class="user-data smd-content">
                    <p class="user-name">
                        <?=$return_on_investment_user_name?>
                    </p>
                    <p class="user-company">
                        <strong><?=$return_on_investment_user_company?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>