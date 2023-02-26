

 <div class="blog-post-container shadow">
    <div class="post-image-wrapper">
        <img  alt="thumb" class="blog-post-thumb" src="<?php the_post_thumbnail(); ?>
        
    </div>

    <div class="post-meta-wrapper">
        <h2 class="uppr my-heading my-h2">
        <a href="<?php the_permalink(); ?>" class="post-lnk"><?php the_title(); ?></a>
        </h2>
    <p class="meta-inf">
        <span class="date"><?php the_date(); ?></span>
        <span>/</span>
        <span class="comments-count"><?php comments_number(); ?></span>
    </p>
    </div>
    <p class="blog-post-excrept"><?php the_excerpt(); ?></p>
    <div class="blog-btn-wrapper">
    <a href="<?php the_permalink(); ?>" class="btn-read-more">
        <img src="http://localhost:10023/app/uploads/2023/02/more.png" class="arrow"><span class="uppr">Read More</span>
    </a>
</div>
 </div>