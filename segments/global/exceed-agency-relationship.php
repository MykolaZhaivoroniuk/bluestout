<?
  $exceed_agency_relationship_title = get_field('exceed_agency_relationship_title', 'option');
  $exceed_agency_relationship_text = get_field('exceed_agency_relationship_text', 'option');
  $exceed_agency_relationship_logo = get_field('exceed_agency_relationship_logo', 'option');
  $exceed_agency_relationship_user_name = get_field('exceed_agency_relationship_user_name', 'option');
  $exceed_agency_relationship_user_company = get_field('exceed_agency_relationship_user_company', 'option');
?>

<section class="exceed-agency-relationship fluid-padding">
    <div class="exceed-agency-relationship-inner text-center quote-box fadeInOpacity">
        <div class="quote-box-inner">
            <div class="title">
                <h2 class="sm-title"><?=$exceed_agency_relationship_title?></h2>
            </div>
            <div class="quote-mark">
                <img src="<?=bloginfo('template_url');?>/assets/img/quote.png" alt="quote">
            </div>
            <div class="content lg-content">
                <?=$exceed_agency_relationship_text?>
            </div>
            <div class="bottom">
                <div>
                    <img src="<?=$exceed_agency_relationship_logo?>"/ alt="<?=get_image_alt_from_image_url($exceed_agency_relationship_logo)?>">
                </div>
                <div class="seperator">

                </div>
                <div class="user-data smd-content">
                    <p class="user-name">
                        <?=$exceed_agency_relationship_user_name?>
                    </p>
                    <p class="user-company">
                        <strong><?=$exceed_agency_relationship_user_company?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>