<? 

/*
* Template Name: Blog Home
*/

get_header(null, ['body_id' => 'blog_home']);
get_template_part('segments/blog-home/hero');
get_template_part('segments/blog-home/newsletter-form');
get_template_part('segments/blog-home/most-popular');
get_template_part('segments/blog-home/post-gallery');
get_footer();
