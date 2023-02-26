 <div class="this-post-thumb-wrapper">
 <?php
 the_post_thumbnail();
 ?>
 </div>
 
 <?php
 the_content();
 ?>

 <div class="autor-box">
    <h2 class="written-by">
        Written by <a href="#">
            <?php the_author(); ?>
        </a>   
    </h2>
    <div class="author-card">
        <img src="http://localhost:10023/app/uploads/2023/02/avatar.png" class="avatar">
        <p class="view-all">View all posts by:<a href="#">
            <?php the_author(); ?>
        </a></p>
    </div>
 </div>