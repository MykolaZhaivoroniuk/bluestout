<?
  $we_know_works_title = get_field('we_know_works_title');
  $we_know_works_gallery = get_field('we_know_works_gallery');
?>

<section id="we_know_works" class="">
  <div class="container">
    <div class="we-know-works-inner">
      <div class="section-title text-center fadeInBottom">
        <h2 class="smd-title"><?=$we_know_works_title?></h2>
      </div>
      <div class="row gallery d-none d-md-flex">
        <?
          foreach ($we_know_works_gallery as $index => $gallery_item) {
            $image = $gallery_item['image'];
            $title = $gallery_item['title'];
            $text = $gallery_item['text'];
            $html = '
              <div class="col-sm-6 fadeInBottom-'.($index % 4 + 1).'">
                <div class="gallery-item text-center">
                  <div class="image">
                    <div class="image-inner">
                      <img src="'.$image.'" alt="'.get_image_alt_from_image_url($image).' /">
                    </div>
                  </div>
                  <div class="title">
                    <p class="lg-content">'.$title.'</p>
                  </div>
                  <div class="content">
                    <p class="smd-content">'.$text.'</p>
                  </div>
                </div>
              </div>
            ';
            echo $html;
          }
        ?>
      </div>
      <div class="slideme gallery d-sm-block d-md-none">
        <?
          foreach ($we_know_works_gallery as $gallery_item) {
            $image = $gallery_item['image'];
            $title = $gallery_item['title'];
            $text = $gallery_item['text'];
            $html = '
              <div class="gallery-item text-center fadeInBottom">
                <div class="image">
                  <div class="image-inner">
                    <img src="'.$image.'" alt="'.get_image_alt_from_image_url($image).'" />
                  </div>
                </div>
                <div class="title">
                  <p class="lg-content">'.$title.'</p>
                </div>
                <div class="content">
                  <p class="smd-content">'.$text.'</p>
                </div>
              </div>
            ';
            echo $html;
          }
        ?>
      </div>
      <div class="see-most-recent-cro text-center fadeInBottom">
        <a href="/cro-winners/" class="btn btn-blue btn-see-most-recent-cro d-none d-md-inline-block">SEE OUR MOST RECENT CRO TEST WINNERS</a>
        <a href="/cro-winners/" class="btn btn-blue btn-see-most-recent-cro d-sm-inline-block d-md-none">SEE OUR RECENT CRO TEST WINNERS</a>
      </div>
    </div>
  </div>
</section>