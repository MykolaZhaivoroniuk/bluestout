<?
  $quote_text = get_field('quote_text');
  $quote_user_name = get_field('quote_user_name');
  $quote_user_company = get_field('quote_user_company');

 ?>

<? if(trim($quote_text) != '') { ?>
<div id="quote">
    <div class="best-experience-inner text-center quote-box fadeInOpacity">
        <div class="quote-box-inner">
            <div class="quote-mark">
              <img class="quote-sign" src="<?=bloginfo('template_url');?>/assets/img/quote.png">
            </div>
            <div class="content lg-content">
              <?=$quote_text?>
            </div>
            <div class="bottom">
                <div class="user-data smd-content">
                    <p class="user-name text-center"><?=$quote_user_name?></p>
                    <p class="user-company text-center"><?=$quote_user_company?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<? } ?>