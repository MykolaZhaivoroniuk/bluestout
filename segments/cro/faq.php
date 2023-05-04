<?
  $page_data = get_page_by_path('cro/');
  $page_id = $page_data->ID;
  $faq_list = get_field('faq_list', $page_id);
?>

<section id="faq" class="fluid-padding fadeInBottom">
  <div class="faq-inner">
    <div class="title">
      <h2 class="lg-title text-center">FAQ</h2>
    </div>
    <div class="faq-list card">
      <?
        foreach ($faq_list as $index => $faq_item) {
          $title = $faq_item['title'];
          $text = $faq_item['text'];

          $html = '
            <div class="card-item">
              <div class="card-head">
                <a href="#card_board_'.$index.'" class="md-content '.($index == -1 ? '' : 'collapsed').'" data-bs-toggle="collapse">'.$title.'</a>
              </div>
              <div id="card_board_'.$index.'" class="collapse '.($index == -1 ? 'show' : '').'" data-bs-parent="#faq">
                <div class="card-board"><div class="smd-content card-board-content">'.$text.'</div></div>
              </div>
            </div>
          ';

          echo $html;
        }
      ?>
    </div>
  </div>
</section>
