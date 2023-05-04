<?
  $review1_conversion_increase_rate = get_field('review1_conversion_increase_rate');
  $review1_revenue_increase_rate = get_field('review1_revenue_increase_rate');
  $review1_text = get_field('review1_text');
  $review1_logo = get_field('review1_logo');
  $review1_user_name = get_field('review1_user_name');
  $review1_user_company = get_field('review1_user_company');

  $review2_title = get_field('review2_title');
  $review2_text = get_field('review2_text');
  $review2_logo = get_field('review2_logo');
  $review2_user_name = get_field('review2_user_name');
  $review2_user_company = get_field('review2_user_company');


  preg_match('/([0-9])+/', $review1_conversion_increase_rate, $conversion_preg_match);
  preg_match('/([0-9])+/', $review1_revenue_increase_rate, $revenue_preg_match);

  $match_index = strpos($review1_conversion_increase_rate, $conversion_preg_match[0]);
  $conversion_rate_value_prefix = substr($review1_conversion_increase_rate, 0, $match_index);
  $conversion_rate_value = $conversion_preg_match[0];
  $conversion_rate_value_suffix = substr($review1_conversion_increase_rate, $match_index + strlen($conversion_rate_value));

  $match_index = strpos($review1_revenue_increase_rate, $revenue_preg_match[0]);
  $revenue_value_prefix = substr($review1_revenue_increase_rate, 0, $match_index);
  $revenue_value = $revenue_preg_match[0];
  $revenue_value_suffix = substr($review1_revenue_increase_rate, $match_index + strlen($revenue_value));
?>

<section id="review" class="fluid-padding">
    <div class="row">
        <div class="col col-lg-6 col-12">
            <div class="quote-box text-center boxed-header">
                <div class="quote-box-inner">
                    <div class="box-header">
                        <div class="box-header-item">
                            <div class="value fadeCount">
                                <?=$conversion_rate_value_prefix?><span class="countme"><?=$conversion_rate_value?></span><?=$conversion_rate_value_suffix?>
                                <img src="<?=bloginfo('template_url');?>/assets/img/arrow-up.png" alt="arrow-up"/>
                            </div>
                            <div class="description">
                                <p class="md-content">Increase In Conversions</p>
                            </div>
                        </div>
                        <div class="box-header-item">
                            <div class="value fadeCount">
                                <?=$revenue_value_prefix?><span class="countme"><?=$revenue_value?></span><?=$revenue_value_suffix?>
                                <img src="<?=bloginfo('template_url');?>/assets/img/arrow-up.png" alt="arrow-up"/>
                            </div>
                            <div class="description">
                                <p class="md-content">Increase in YOY Revenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="quote-mark">
                        <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
                    </div>
                    <div class="content smd-content">
                        <?=$review1_text?>
                    </div>
                    <div class="bottom">
                        <div>
                            <img src="<?=$review1_logo?>" alt="<?=get_image_alt_from_image_url($review1_logo)?>"/>
                        </div>
                        <div class="seperator">

                        </div>
                        <div class="user-data smd-content">
                            <p class="user-name">
                                <?=$review1_user_name?>
                            </p>
                            <p class="user-company">
                                <strong><?=$review1_user_company?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-6 col-12">
            <div class="quote-box text-center">
                <div class="quote-box-inner">
                    <div class="title">
                        <h2 class="sm-title"><?=$review2_title?></h2>
                    </div>
                    <div class="quote-mark">
                        <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
                    </div>
                    <div class="content smd-content">
                        <?=$review2_text?>
                    </div>
                    <div class="bottom">
                        <div>
                            <img src="<?=$review2_logo?>" alt="<?=get_image_alt_from_image_url($review2_logo)?>"/>
                        </div>
                        <div class="seperator">

                        </div>
                        <div class="user-data smd-content">
                            <p class="user-name">
                                <?=$review2_user_name?>
                            </p>
                            <p class="user-company">
                                <strong><?=$review2_user_company?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-case-studies text-center">
      <a href="case-studies" class="btn btn-normal btn-more-case-studies trans-button-hover xs-content">MORE CASE STUDIES</a>
    </div>
  </div>
</section>