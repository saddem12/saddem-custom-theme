<!DOCTYPE HTML>
<html>
<head>

<?php
wp_head();
?>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <?php
            //    if(function_exists('the_custom_logo')) {
                the_custom_logo();
                // $custom_logo_id = get_theme_mod ('custom_logo');
                // $logo = wp_get_attachment_image_src($custom_logo_id);
            //    }
               ?>
            </div>
            <img src="<?php echo $logo[0] ?>" alt="logo" class="custom-logo">
            <div class="header-content-wrapper">
                <div class="top-menu">
                    <form action="" class="search-bar">
                        <input type="search">
                        <button type="submit">
                            <img src="http://localhost:10023/app/uploads/2023/02/search.png" alt="" class="btn-search-icon">
                        </button>
                    </form>
                </div>

                <div class="bottom-menu">
                
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="nav-menu" class="nav-menu">%3$s</ul>'
                        )
                    );
                ?>
                </div>
            </div>
        </div>
    </header>
    <hr class="top-bot-sep"/>