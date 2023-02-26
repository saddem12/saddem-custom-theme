<?php
get_header();
?>
<article class="single-post-main content flex-con">
<section class="main-section">
    <div class="title-wrapper">
        <h1 class="the-title"><?php the_title(); ?></h1>
    </div>


<?php
    if(have_posts() ) {
       while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'article');
       } 
    }
?>
<div class="comments-form-wrapper">
    <?php
        if(comments_open()){
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h2 class="uppr my-heading my-h2">',
                    'title_reply_after'  => '</h2>'
                )
            );
        }
    ?>
</div>

</section>
<section class="side-nav">
    <div class="side-nav-con flex-col">
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Recent posts</h3>
            <!-- <span class="date">
            </span> -->
            <ul class="side-nav-lst">
            <li><a href="#">Aliquam tincidunt mauris</a></li>
			<li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
			<li><a href="#">Nunc dignissim risus consecu</a></li>
			<li><a href="#">Cras ornare tristiqu</a></li>
            </ul>
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Recent comments</h3>
            <p>
            <?php 
            comments_template();
                    
                ?></p>
            <ul class="side-nav-lst">

            </ul>
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Archives</h3>
            <p>
            <?php 
                    the_archive_title();
                ?></p>
            <ul class="side-nav-lst">

            </ul>
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Categories</h3>
            <div class="post-meta-wrapper">
            <p>
                <?php 
                    the_category();
                ?>
            </div></p>
            <ul class="side-nav-lst">

            </ul>
        </div>
    </div>
</section>
</article>
<?php
get_footer();
?>