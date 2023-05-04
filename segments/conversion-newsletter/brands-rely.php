<?
  $brands_rely_text = get_field('brands_rely_text');
  $brands_rely_images = get_field('brands_rely_images');
?>

<section id="brands_rely" class="fadeInBottom">
  <div class="container">
    <div class="brands-rely-inner text-center">
      <div class="content xg-content black-color">
        <p><?=$brands_rely_text?></p>
      </div>
      <div class="brands-gallery">
        <div class="row justify-content-md-center">
          <?
            foreach ($brands_rely_images as $image) {
              $html = '<div class="col-md-7ths col-sm-3 col-4">';
              $html .= '<div class="brands-item">';
              $html .= '<img src="'.$image['image'].'" alt="'.get_image_alt_from_image_url($image['image']).'">';
              $html .= '</div>';
              $html .= '</div>';
              echo $html;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>