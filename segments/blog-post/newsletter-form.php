<?
  $blog_newsletter_form_title = get_field('blog_newsletter_form_title', 'option');
  $blog_newsletter_form_text = get_field('blog_newsletter_form_text', 'option');
  $blog_newsletter_form_brands_gallery = get_field('blog_newsletter_form_brands_gallery', 'option');
  $type = isset($args['type']) ? $args['type'] : 'footer';
  $add_class = isset($args['class']) ? $args['class'] : '';
  $blog_newsletter_form_text = str_replace(chr(0x0d), '<br>', $blog_newsletter_form_text);
  $brands_count = count($blog_newsletter_form_brands_gallery);
?>

<div class="<?=$type?>-form post-newsletter-form <?=$add_class?>">
  <div class="post-newsletter-form-inner">
    <div class="form-content">
      <div class="title title-font">
        <p><?=$blog_newsletter_form_title?></p>
      </div>
      <div class="text">
        <p>
          <?=$blog_newsletter_form_text?>
        </p>
      </div>
      <? echo $type == 'footer' ? '<div class="brand-owners"><p>Join thousands of brand owners, operators and marketers.</p></div>' : '' ?>
      <div class="form-group">
        <?
          if($type == 'sidebar') {
            echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]');
          } else {
            echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]');
          }
        ?>
      </div>
      <? echo $type == 'sidebar' ? '<div class="read-by sm-content text-center"><p>Read by thousands of brands including:</p></div>' : '' ?>
      <div class="form-brand-gallery">
        <? if($type == 'footer') { ?>
          <div class="brand-gallery-item read-by smd-content">Read by</div>
          <? foreach ($blog_newsletter_form_brands_gallery as $brand_item) { ?>
            <div class="brand-gallery-item">
              <img src="<?=$brand_item['image']?>" alt="<?=get_image_alt_from_image_url($brand_item['image'])?>">
            </div>
          <? } ?>
        <? } else { ?>
          <? foreach ($blog_newsletter_form_brands_gallery as $index => $brand_item) { ?>
            <? if($index % 3 == 0) echo '<div class="brand-gallery-row" style="justify-content: '.(($index + 3 > $brands_count) ? 'space-around' : 'space-between').'">'; ?>
              <div class="brand-gallery-item">
                <img src="<?=$brand_item['image']?>" alt="<?=get_image_alt_from_image_url($brand_item['image'])?>">
              </div>
            <? if($index % 3 == 2 || $index == $brands_count - 1) echo '</div>'; ?>
          <? } ?>
        <? } ?>
      </div>
    </div>
  </div>
</div>