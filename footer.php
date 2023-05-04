
<?
  $footer_menu_list = get_field('footer_menu_list', 'option');
  $footer_newsletter_form_title = get_field('footer_newsletter_form_title', 'option');
  $footer_newsletter_form_text = get_field('footer_newsletter_form_text', 'option');
  $footer_copyright = get_field('footer_copyright', 'option');
?>

<footer id="footer">
	<div class="footer-inner">
    <div class="row">
      <div class="col col-lg-4 col-12">
        <div class="newsletter-wrapper">
          <div class="newsletter text-center white-color">
            <div class="title xg-content">
                <span><?=$footer_newsletter_form_title?></span>
            </div>
            <div class="flow">
                <img src="<?=bloginfo('template_url');?>/assets/img/flow.png" alt=" ~ "/>
            </div>
            <div class="content md-content">
                <p class="">
                  <?=$footer_newsletter_form_text?>
                </p>
            </div>
            <div class="email-form">
              <?=do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
            </div>
            <?  ?>
          </div>
        </div>
      </div>
      <div class="col col-lg-8 col-12">
        <div class="footer-menu-wrapper">
          <div class="footer-menu">
            <div class="footer-menu-content">
              <?
                foreach($footer_menu_list as $index => $footer_menu) {
                  echo '<div class="menu-column">';
                  $menu_title = $footer_menu['menu_title'];
                  $sub_menu = $footer_menu['submenu'];
                  echo '<span class="title xxs-content">'.$menu_title.'</span>';
                  echo '<ul class="menu-item-list">';
                  foreach($sub_menu as $sub_menu_item) {
                    $sub_menu_text = $sub_menu_item['menu_text'];
                    $sub_menu_link = $sub_menu_item['menu_link'];
                    echo '<li><a href="'.$sub_menu_link.'" class="xxs-content">'.$sub_menu_text.'</a></li>';
                  }
                  echo '</ul>';
                  if($index + 1 == count($footer_menu_list)) {
                    echo '<div class="social-links d-flex d-none d-lg-flex">';
                  ?>
                    <a target="blank" href="https://www.instagram.com/blue.stout/" data-c="instagram" aria-label="instagram"> <? get_template_part('assets/img/logo/instagram') ?> </a>
                    <a target="blank" href="https://www.twitter.com/allenburt/" data-c="twitter" aria-label="twitter"> <? get_template_part('assets/img/logo/twitter') ?> </a>
                    <a target="blank" href="https://www.linkedin.com/in/allenburt/" data-c="linkedin" aria-label="linkedin"> <? get_template_part('assets/img/logo/linkedin') ?> </a>
                  <?
                    echo '</div>';
                  }
                  echo '</div>';
                }
              ?>
            </div>
            <div>
              <div class="social-links d-flex justify-content-center d-sm-flex d-lg-none">
                <a target="blank" href="https://www.instagram.com/blue.stout/" data-c="instagram" aria-label="instagram"> <? get_template_part('assets/img/logo/instagram') ?> </a>
                <a target="blank" href="https://www.twitter.com/allenburt/" data-c="twitter" aria-label="twitter"> <? get_template_part('assets/img/logo/twitter') ?> </a>
                <a target="blank" href="https://www.linkedin.com/in/allenburt/" data-c="linkedin" aria-label="linkedin"> <? get_template_part('assets/img/logo/linkedin') ?> </a>
              </div>
              <div class="copyright xxs-content">
                <p class="">
                  <?=$footer_copyright?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</footer>

<script>
  var theme_directory_uri = "<?=get_template_directory_uri()?>";
</script>

<? wp_footer(); ?>

		<!-- <?if(is_single() || $post->ID==1175 || $post->ID==400 || get_page_template_slug()=='thanks.php' ){?>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":false,"data_track_clickback":false};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-538d86a702eb68db"></script>
    <?}?>

    <script type="text/javascript">
    var google_conversion_id = 941331036;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/941331036/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <? if($post->ID == 414){ ?>
      <script type="text/javascript">
        var google_conversion_id = 941331036;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "LLlqCJ_HgGAQ3KTuwAM";
        var google_conversion_value = 1.00;
        var google_conversion_currency = "USD";
        var google_remarketing_only = false;
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/941331036/?value=1.00&amp;currency_code=USD&amp;label=LLlqCJ_HgGAQ3KTuwAM&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>
    <? } ?>

    <? if($post->ID == 796){ ?>
      <script type="text/javascript">
      var google_conversion_id = 941331036;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "sNu7CPHH-18Q3KTuwAM";
      var google_conversion_value = 1.00;
      var google_conversion_currency = "USD";
      var google_remarketing_only = false;
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/941331036/?value=1.00&amp;currency_code=USD&amp;label=sNu7CPHH-18Q3KTuwAM&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>
    <? } ?> -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-42073134-1', 'auto');
      ga('send', 'pageview');
    </script>

    <script type="text/javascript" src="https://zp264.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6e3113acfe53b8c42065f5755b65a1b3"></script>

    <script type="text/javascript">
    _linkedin_partner_id = "4459684";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script><script type="text/javascript">
    (function(l) {
    if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
    window.lintrk.q=[]}
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);})(window.lintrk);
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4459684&fmt=gif" />
    </noscript>


    <script type="text/javascript">
    _linkedin_partner_id = "4463180";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script><script type="text/javascript">
    (function(l) {
    if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
    window.lintrk.q=[]}
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);})(window.lintrk);
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4463180&fmt=gif" />
    </noscript>

  </body>
</html>