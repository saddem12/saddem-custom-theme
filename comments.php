<?php 
            if(! have_comments()){
                comments_number();
            }
            else{
            //    echo  get_comments_count(). "Comments";
            wp_list_comments(

            );
            }
                    
                ?>
