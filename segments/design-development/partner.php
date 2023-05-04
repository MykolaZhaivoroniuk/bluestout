<?
  $partner_title = get_field('partner_title');
  $partner_gallery = get_field('partner_gallery');
?>

<section id="partner" class="fadeInBottom">
  <div class="container">
    <div class="partner-inner">
      <div class="title">
        <h2 class=""><?=$partner_title?></h2>
      </div>
      <div class="gallery">
        <?
          foreach ($partner_gallery as $index => $gallery_item) {
            $image = $gallery_item['image'];
            $html = '
              <div class="gallery-item">
                <img src="'.$image.'"/ alt="'.get_image_alt_from_image_url($image).'">
              </div>
            ';

            echo $html;
          }
        ?>
      </div>
    </div>
  </div>
</section>

