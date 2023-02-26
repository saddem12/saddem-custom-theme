<?php
get_header();
?>
<article class="home-main content flex-con">
<section class="main-section">
<?php
    if(have_posts() ) {
       while (have_posts()) {
        the_post();
        get_template_part ('template-parts/content','archive');
       } 
    }
?>

<!-- 
<php? the_posts_pagination(); ?> -->
</section>
<section class="side-nav">
    <div class="side-nav-con flex-col">
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Recent posts</h3>
            <ul class="side-nav-lst">
            
					 <li><a href="#">Aliquam tincidunt mauris</a></li>
					 <li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
					 <li><a href="#">Nunc dignissim risus consecu</a></li>
					 <li><a href="#">Cras ornare tristiqu</a></li>
					 </ul>
        
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Recent comments</h3>
            <ul class="side-nav-lst">
            <li><a href="#">Aliquam tincidunt mauris</a></li>
			<li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
			<li><a href="#">Nunc dignissim risus consecu</a></li>
			<li><a href="#">Cras ornare tristiqu</a></li>
            </ul>
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Archives</h3>
            <ul class="side-nav-lst">
            <li><a href="#">Aliquam tincidunt mauris</a></li>
			<li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
			<li><a href="#">Nunc dignissim risus consecu</a></li>
			<li><a href="#">Cras ornare tristiqu</a></li>
            </ul>
        </div>
        <div class="side-nav-card">
            <h3 class="side-nav-ttl uppr">Categories</h3>
            <ul class="side-nav-lst">
            <li><a href="#">Aliquam tincidunt mauris</a></li>
			<li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
			<li><a href="#">Nunc dignissim risus consecu</a></li>
			<li><a href="#">Cras ornare tristiqu</a></li>
            </ul>
        </div>
    </div>
</section>
</article>
<?php
get_footer();
?>
