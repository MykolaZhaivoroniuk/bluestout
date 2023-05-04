<?
  $brand_we_helped_title = get_field('brand_we_helped_title', 'option');
  $brand_we_helped_images = get_field('brand_we_helped_images', 'option');
  $additio_classes = isset($args['classes']) ? $args['classes'] : '';
?>

<section class="brand-we-helped <?=$additio_classes?>">
  <div class="container">
    <div class="row title md-content text-center">
      <p class="normal-content"><?=$brand_we_helped_title?></p>
    </div>
    <div class="row brand-gallery">
      <? 
        if(count($brand_we_helped_images)) {
          foreach($brand_we_helped_images as $index => $image)  {
            $html = '
            <div class="fadeInBottom col-4 col-sm-4 '.($index >= 14 ? 'd-lg-none' : 'col-md-7ths').'">
              <div class="brand-item text-center d-flex justify-content-center">
                  <img src="'.$image['image'].'" alt="'.get_image_alt_from_image_url($image['image']).'">
              </div>
            </div>
            ';
            echo $html;
          }
        }
      ?>
    </div>
  </div>
</section>