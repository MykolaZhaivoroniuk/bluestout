<?
  $get_real_crw_title = get_field('get_real_crw_title');
  $get_real_crw_text = get_field('get_real_crw_text');
?>

<section id="get_real_crw" class="fluid-padding">
<div class="img-bg-box text-center white-color" style="background-image:url('<?=bloginfo('template_url');?>/assets/img/want-to-work-us-bg.png)">
        <div class="title">
            <h2 class="sm-title"><?=$get_real_crw_title?></h2>
        </div>
        <div class="content lg-content">
            <?=$get_real_crw_text?>
        </div>
        <div class="book-a-call fadeInBottom text-center newsletter-form">
            <?=do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]');?>
        </div>
    </div>
  </div>
</section>