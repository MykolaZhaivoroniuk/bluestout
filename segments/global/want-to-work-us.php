<?
  $want_to_work_us_title = get_field('want_to_work_us_title', 'option');
  $want_to_work_us_text = get_field('want_to_work_us_text', 'option');
  $book_a_call_link = get_field('book_a_call_link', 'option');
?>

<section class="want-to-work-us fluid-padding">
    <div class="img-bg-box text-center white-color" style="background-image:url('<?=bloginfo('template_url');?>/assets/img/want-to-work-us-bg.png)" alt="want-to-work-us-bg">
        <div class="title">
            <h2 class="sm-title"><?=$want_to_work_us_title?></h2>
        </div>
        <div class="content lg-content">
            <?=$want_to_work_us_text?>
        </div>
        <div class="book-a-call">
            <a href="<?=$book_a_call_link?>" target="blank" class="btn-book-call fadeInBottom blue-button-hover xs-content"><img src="<?=bloginfo('template_url');?>/assets/img/callender-icon.png" alt="calendar"/>&nbsp;&nbsp;BOOK A CALL</a>
        </div>
    </div>
  </div>
</section>