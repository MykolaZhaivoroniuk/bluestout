<?
  $section3_text1 = get_field('section3_text1');
  $section3_text2 = get_field('section3_text2');
  $text1_list = explode(chr(0x0d), $section3_text1);
  $text2_list = explode(chr(0x0d), $section3_text2);
?>

<section id="increase_rate">
  <div class="container">
    <div class="increase-rate-inner d-none d-md-flex">
      <div class="title fadeInBottom">
        <?
          foreach($text1_list as $text) {
            echo '<p class="sm-title">'.$text.'</p>';
          }
        ?>
      </div>
      <div class="seperator">
      </div>
      <div class="content fadeInBottom">
        <?
          foreach($text2_list as $text) {
            if(trim($text) == '') continue;
            echo '<p class="gray-color md-content">'.$text.'</p>';
          }
        ?>
      </div>
    </div>
    <div class="increase-rate-mobile-inner d-sm-block d-md-none">
      <div class="slideme">
        <div class="content sm-title">
          <?
            foreach ($text1_list as $text) {
              if(trim($text) == '') continue;
              echo '<p class="sm-title">'.$text.'</p>';
            }
          ?>
        </div>
        <?
          foreach($text2_list as $text) {
            if(trim($text) == '') continue;
            echo '<div class="content dark-color sm-title"><p>'.$text.'</p></div>';
          }
        ?>
      </div>
    </div>
  </div>
</section>