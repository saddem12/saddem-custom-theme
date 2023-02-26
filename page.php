<?php
get_header();
?>
<article class="page-wrapper content">
    <div class="title-wrapper">
        <h1 class="the-title"><?php the_title(); ?></h1>
    </div>
<?php
    if(have_posts() ) {
       while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'page');
       } 
    }
?>
</article>
<?php
get_footer();
?>