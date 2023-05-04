<?
  $review2_items = get_field('review2_items');
?>

<section id="review2">
  <div class="container">
    <div class="review2-inner">
      <?
        foreach ($review2_items as $index => $review_item) {
          $photo = $review_item['review_item_photo'];
          $text = $review_item['review_item_text'];
          $user_name = $review_item['review_item_user_name'];
          $user_company = $review_item['review_item_user_company'];
          $user_logo = $review_item['review_item_user_company_logo'];
          $html = '
              <div class="review2-item fadeInBottom-'.($index + 1).'">
                <div class="data">
                  <div class="photo">
                    <img src="'.$photo.'" alt="'.get_image_alt_from_image_url($photo).'">
                  </div>
                  <div class="content">
                    <div class="content-text">
                      <div class="content-text-inner">
                        <img class="quote-sign" src="'.get_template_directory_uri().'/assets/img/dark-quote.png" alt="quote">
                        <blockquote><p class=lg-content>'.$text.'</p></blockquote>
                      </div>
                    </div>
                    <div class="company dark-color">
                      <p class="smd-content">
                        '.$user_name.'
                        &nbsp; | &nbsp;
                        '.($user_logo != '' ? '<img src="'.$user_logo.'" alt="'.get_image_alt_from_image_url($user_logo).'">' : $user_company).'
                      </p>
                  </div>
                  </div>
                </div>
              </div>
          ';
          echo $html;
        }
      ?>
    </div>
  </div>
</section>