<?
  $description_cards_gallery = get_field('description_cards_gallery');
  $shopify_requirement_link = get_field('shopify_requirement_link');
?>

<section id="description_cards" class="fluid-padding fadeInBottom">
  <div class="description-cards-inner">
    <div class="description-cards-list card">
      <?
        foreach ($description_cards_gallery as $index => $description_cards_item) {
          $title = $description_cards_item['title'];
          $text = $description_cards_item['text'];

          $html = '
            <div class="card-item">
              <div class="card-head">
                <a href="#card_board_'.$index.'" class="lg-content '.($index == 0 ? '' : 'collapsed').'" data-bs-toggle="collapse">'.$title.'</a>
              </div>
              <div id="card_board_'.$index.'" class="collapse '.($index == 0 ? 'show' : '').'" data-bs-parent="#description_cards">
                <div class="card-board smd-content">'.$text.'</div>
              </div>
            </div>
          ';

          echo $html;
        }
      ?>
    </div>
    <div class="shopify-require black-color">
      To find out how we can help with your Shopify requirements, <a class="blue-color" href="<?=$shopify_requirement_link?>">get in touch.</a>
    </div>
  </div>
</section>
