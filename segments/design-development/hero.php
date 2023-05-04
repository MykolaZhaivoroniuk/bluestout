<?
  $hero_small_title = get_field('hero_small_title');
  $hero_big_title = get_field('hero_big_title');
  $hero_text = get_field('hero_text');
  $hero_gallery = get_field('hero_gallery');
  $book_a_call_link = get_field('book_a_call_link', 'option');

  function get_gallery_html($gallery_array) {
    $html = '';
    foreach ($gallery_array as $gallery_item) {
      $content = $gallery_item['content'];
      $value = trim($gallery_item['value']);
      $value_image = $gallery_item['value_image'];

      if($value_image == '') {
        preg_match('/([0-9])+/', $value, $preg_match);
        $match_index = strpos($value, $preg_match[0]);
        $value_prefix = substr($value, 0, $match_index);
        $num_value = $preg_match[0];
        $value_suffix = substr($value, $match_index + strlen($num_value));  
      }

      $html .= '
        <div class="gallery-item">
          <div class="value fadeCount">'.
          ($value_image == '' ? ('<div class="sm-title blue-color">'.$value_prefix.'<span class="countme">'.$num_value.'</span>'.$value_suffix.'</div>') : ('<img src="'.$value_image.'" alt="'.get_image_alt_from_image_url($value_image).'">'))
          .'</div>
          <div class="content">
            <p class="lg-content">'.$content.'</p>
          </div>
        </div>
      ';
    }

    return $html;
  }
?>

<section id="hero" class="page-hero">
  <div class="container">
    <div class="hero-inner">
      <div class="title fadeInBottom-1">
        <div class="small-title lg-content gray-color">
          <p class=""><?=$hero_small_title?></p>
        </div>
        <div class="big-title title-font">
          <h1 class="smd-title"><?=$hero_big_title?></h1>
        </div>
      </div>
      <div class="content-text xg-content fadeInBottom-2">
        <?=$hero_text?>
      </div>
      <div class="book-a-call">
          <a href="<?=$book_a_call_link?>" target="blank" class="btn-book-call fadeInBottom btn btn-blue btn-big blue-button-hover xs-content">BOOK A CALL</a>
      </div>
      <div class="gallery">
        <div class="gallery-inner justify-content-between d-none d-sm-flex">
          <?=get_gallery_html($hero_gallery)?>
        </div>
        <div class="gallery-inner justify-content-between d-flex d-sm-none">
          <?
            $new_gallery_data = [];
            for($i=0; $i<count($hero_gallery); $i+=2) {
              if($i % 4 == 0) {
                $new_gallery_data[] = $hero_gallery[$i];
                if(isset($hero_gallery[$i + 1])) $new_gallery_data[] = $hero_gallery[$i + 1];
              } else {
                if(isset($hero_gallery[$i + 1])) $new_gallery_data[] = $hero_gallery[$i + 1];
                $new_gallery_data[] = $hero_gallery[$i];
              }
            }

            echo get_gallery_html($new_gallery_data);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>