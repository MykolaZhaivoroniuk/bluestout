<?
  $trusted_parter_description = get_field('trusted_parter_description');
  $trusted_parter_gallery = get_field('trusted_parter_gallery');
?>

<section id="trusted_parter">
  <div class="trusted-parter-inner">
    <div class="section-title">
      <p class="md-content">Trusted Parter of <img src="<?=bloginfo('template_url');?>/assets/img/logo/logo-shopify-dark.png" alt="shopify-dark-logo"></p>
    </div>
    <div class="description">
      <p class="gray-color"><?=$trusted_parter_description?></p>
    </div>
    <div class="gallery d-none d-md-block">
      <div class="gallery-inner slideme-2">
        <?
          foreach ($trusted_parter_gallery as $index => $gallery_item) {
            $title = $gallery_item['title'];
            $image = $gallery_item['image'];
            $logo = $gallery_item['logo'];

            $html = '
              <div class="gallery-item">
                <div class="image" style="background-image: url('.$image.')">
                  <div class="image-logo">
                    <img src="'.$logo.'" alt="'.get_image_alt_from_image_url($logo).'"/>
                  </div>
                </div>
                <div class="title md-content text-center">
                  <p class="md-content">'.$title.'</p>
                </div>
              </div>
            ';
            echo $html;
          }
        ?>
      </div>
    </div>
    <div class="gallery d-block d-md-none">
      <div class="gallery-inner slideme-3" slide-to-show="1.4">
        <?
          foreach ($trusted_parter_gallery as $index => $gallery_item) {
            $title = $gallery_item['title'];
            $image = $gallery_item['image'];
            $logo = $gallery_item['logo'];

            $html = '
              <div class="gallery-item">
                <div class="prepare-cover"></div>
                <div class="image" style="background-image: url('.$image.')">
                  <div class="image-logo">
                  <img src="'.$logo.'" alt="'.get_image_alt_from_image_url($logo).'"/>
                  </div>
                </div>
                <div class="title md-content text-center">
                  <p class="md-content">'.$title.'</p>
                </div>
              </div>
            ';
            echo $html;
          }
        ?>
      </div>
    </div>
  </div>
</section>

