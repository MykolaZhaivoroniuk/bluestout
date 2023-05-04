<?
  $brand_average_degree_text = get_field('brand_average_degree_text', 'option');
  $brand_average_degree_convertion_rate_text = trim(get_field('brand_average_degree_convertion_rate_text', 'option'));
  $brand_average_degree_conversion_rate_value = trim(get_field('brand_average_degree_conversion_rate_value', 'option'));
  $brand_average_degree_attributed_revenue_text = trim(get_field('brand_average_degree_attributed_revenue_text', 'option'));
  $brand_average_degree_attributed_revenue_value = trim(get_field('brand_average_degree_attributed_revenue_value', 'option')); 
  $brand_average_degree_return_on_investment_text = trim(get_field('brand_average_degree_return_on_investment_text', 'option'));
  $brand_average_degree_return_on_investment_value = trim(get_field('brand_average_degree_return_on_investment_value', 'option')); 
  $top_bar_visible = isset($args['top-bar-visible']) ? $args['top-bar-visible'] : true;
  $bottom_bar_visible = isset($args['bottom-bar-visible']) ? $args['bottom-bar-visible'] : true;
  $see_most_cenent_visible = isset($args['see-most-recent-visible']) ? $args['see-most-recent-visible'] : false;
  $top_bar_class = $top_bar_visible ? 'd-block' : 'd-none';
  $bottom_bar_class = $bottom_bar_visible ? 'd-block' : 'd-none';
  $see_most_recent_class = $see_most_cenent_visible ? 'd-blox' : 'd-none';

  preg_match('/([0-9])+/', $brand_average_degree_conversion_rate_value, $conversion_preg_match);
  preg_match('/([0-9])+/', $brand_average_degree_attributed_revenue_value, $revenue_preg_match);
  preg_match('/([0-9])+/', $brand_average_degree_return_on_investment_value, $investment_preg_match);

	$match_index = strpos($brand_average_degree_conversion_rate_value, $conversion_preg_match[0]);
  $conversion_rate_value_prefix = substr($brand_average_degree_conversion_rate_value, 0, $match_index);
  $conversion_rate_value = $conversion_preg_match[0];
  $conversion_rate_value_suffix = substr($brand_average_degree_conversion_rate_value, $match_index + strlen($conversion_rate_value));

	$match_index = strpos($brand_average_degree_attributed_revenue_value, $revenue_preg_match[0]);
  $revenue_value_prefix = substr($brand_average_degree_attributed_revenue_value, 0, $match_index);
  $revenue_value = $revenue_preg_match[0];
  $revenue_value_suffix = substr($brand_average_degree_attributed_revenue_value, $match_index + strlen($revenue_value));

	$match_index = strpos($brand_average_degree_return_on_investment_value, $investment_preg_match[0]);
  $investment_value_prefix = substr($brand_average_degree_return_on_investment_value, 0, $match_index);
  $investment_value = $investment_preg_match[0];
  $investment_value_suffix = substr($brand_average_degree_return_on_investment_value, $match_index + strlen($investment_value));
?>

<section class="brand-average-degree">
    <div class="brand-average-degree-inner">
        <div class="row <?=$top_bar_class?>">
            <div class="col-6 down-bar"></div>
        </div>
        <div class="text-center">
            <p class="title xg-content"><?=$brand_average_degree_text?></p>
        </div>
        <div class="degree-values">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-4 conversion-rates text-center">
                    <p class="xg-content value fadeCount"><?=$conversion_rate_value_prefix?><span class="countme"><?=$conversion_rate_value?></span><?=$conversion_rate_value_suffix?> <img src="<?=bloginfo('template_url');?>/assets/img/arrow-up.png" alt="up"/></p>
                    <p class="lg-content desc dark-color"><?=$brand_average_degree_convertion_rate_text?></p>
                </div>
                <div class="col-md-4 col-sm-4 col-4 attributed-revenue text-center">
                    <p class="xg-content value fadeCount"><?=$revenue_value_prefix?><span class="countme"><?=$revenue_value?></span><?=$revenue_value_suffix?> <img src="<?=bloginfo('template_url');?>/assets/img/arrow-up.png" alt="up"/></p>
                    <p class="lg-content desc dark-color"><?=$brand_average_degree_attributed_revenue_text?></p>
                </div>
                <div class="col-md-4 col-sm-4 col-4 return-on-investment text-center">
                    <p class="xg-content value fadeCount"><?=$investment_value_prefix?><span class="countme"><?=$investment_value?></span><?=$investment_value_suffix?></p>
                    <p class="lg-content desc dark-color"><?=$brand_average_degree_return_on_investment_text?></p>
                </div>
            </div>
        </div>
        <div class="see-most-recent text-center <?=$see_most_recent_class?>">
            <p class="smd-content gray-color">See our most recent <a href="/cro-winners/">CRO Test Winners</a></p>
        </div>
        <div class="row <?=$bottom_bar_class?>">
            <div class="col-6 down-bar"></div>
        </div>
    </div>
</section>