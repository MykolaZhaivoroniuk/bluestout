<?
get_header(null, ['body_id' => 'blog_post', 'header_class' => 'no-header-bg']);
$categories = get_the_category();
$cat_names = [];
$redirect_url = '';
$category_name = '';
$category_id = '';
$category_slug = '';

foreach ($categories as $cat_item) {
  $category = get_category($cat_item);
  $cat_slug = $category->slug;
  $cat_name = $category->name;
  $cat_names[] = $cat_name;
  
  if($cat_slug == CATAGORY_SLGU_CASE_STUDY || $cat_slug == CATAGORY_SLGU_CRO_WINNER 
    || ($category_slug != CATAGORY_SLGU_CASE_STUDY && $category_slug != CATAGORY_SLGU_CRO_WINNER)) {
    $category_id = $category->cat_ID;
    $category_name = $cat_name;
    $category_slug = $cat_slug;

    if($cat_slug == CATAGORY_SLGU_CASE_STUDY) $redirect_url = $redirect_url = get_full_url('case-studies');
    else if($cat_slug == CATAGORY_SLGU_CRO_WINNER) $redirect_url = get_full_url('cro-winners');
    else $redirect_url = get_full_url('blog').'?category_id='.$category_id;
  }
}
?>

<div class="page-hero fluid-padding">
  <div class="container">
    <div class="main-content">
      <article class="article">
        <div class="breadcrumb">
          <ul class="breadmenu">
          <li class="breadcrumb-item all"><a href="<?=get_full_url('blog')?>"><img src="<?=bloginfo('template_url');?>/assets/img/gray-prev.png"></a></li>
            <li class="breadcrumb-item"><a href="<?=$redirect_url?>"><?=$category_name?></a></li>
          </ul>
          <div class="category">
              <? foreach ($cat_names as $category_name) { ?>
                <span class="mini-border-radius category-sign xxs-content"><?=strtoupper($category_name)?></span>
              <? } ?>
            <span class="category-sign"><?=$category_sign?></span>
          </div>
        </div>
        <h1 class="title sm-title title-font">
          <? the_title(); ?>
        </h1>
        <div class="content">
          <? the_content(); ?>
        </div>
      </article>
      <? get_template_part('segments/blog-post/newsletter-form', null, ['type' => 'sidebar', 'class' => 'd-none d-lg-block']); ?>
    </div>
  </div>
  <? get_template_part('segments/blog-post/continue-learning'); ?>
  <? get_template_part('segments/blog-post/newsletter-form', null, ['type' => 'footer', 'class' => 'd-none d-md-block']); ?>
  <? get_template_part('segments/blog-post/newsletter-form', null, ['type' => 'sidebar', 'class' => 'd-sm-block d-md-none']); ?>
</div>

<? get_footer();
