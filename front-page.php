<? 

/*
* Template Name: Front Page
*/

get_header(null, ['body_id' => 'home']); 
get_template_part('segments/front-page/hero');
get_template_part('segments/front-page/ripple-background', null, ['type' => 'left']);
get_template_part('segments/global/brands-we-helped');
get_template_part('segments/front-page/increase-rate');
get_template_part('segments/front-page/combine-design-developer');
get_template_part('segments/global/brand-average-degree');
get_template_part('segments/global/cro-winners');
get_template_part('segments/front-page/case-studies');
get_template_part('segments/global/return-on-investment');
get_template_part('segments/front-page/ripple-background', null, ['type' => 'right']);
get_template_part('segments/global/how-different');
get_template_part('segments/global/best-experience');
get_template_part('segments/global/want-to-work-us');
get_footer();
