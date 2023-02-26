<?php
get_header();
?>

<article class="home-main content flex-con">
<section class="main-section">
    <div class="title-wrapper">
        <h1 class="the-title"><?php the_title(); ?></h1>
    </div>
<?php
    if(have_posts() ) {
       while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'archive');
       } 
    }
?>


</article>


<?php
get_footer();
?>