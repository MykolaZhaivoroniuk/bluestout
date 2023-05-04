<?
  $newsletter_form_title = get_field('newsletter_form_title');
  $newsletter_form_text = get_field('newsletter_form_text');
  $newsletter_form_read_logos = get_field('newsletter_form_read_logos');
?>

<section id="newsletter_form" class="white-newsletter-form .sm-no-border fadeInBottom-2">
  <div class="container">
    <div class="newsletter-form-inner text-center">
      <div class="title lg-content black-color wave-hover">
        <?=$newsletter_form_title?>
      </div>
      <p class="content lg-content black-color"><?=$newsletter_form_text?></p>
      <div class="form-group">
        <?=do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');?>
      </div>
      <div class="read-logos">
        <div class="read-logos-title smd-content gray-color">
          <span>Read By</span>
        </div>
        <div class="read-logos-gallery d-none d-md-flex">
          <? foreach ($newsletter_form_read_logos as $index => $logo) {
            if($index >= 5) continue;
            $html = '
              <div class="gallery-item">
                <img src="'.$logo['image'].'" alt="'.get_image_alt_from_image_url($logo['image']).'">
              </div>
            ';
            echo $html;
          } ?>
        </div>
        <div class="read-logos-gallery d-block d-md-none">
          <?
            foreach ($newsletter_form_read_logos as $index => $logo) {
              $html = '';
              if($index % 3 == 0) $html .= '<div class="row">';
              $html .= '
                <div class="col-4">
                  <div class="gallery-item">
                  <img src="'.$logo['image'].'" alt="'.get_image_alt_from_image_url($logo['image']).'">
                  </div>
                </div>
              ';
              if($index % 3 == 2 || $index == (count($newsletter_form_read_logos) - 1)) $html .= '</div>';
              echo $html;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
