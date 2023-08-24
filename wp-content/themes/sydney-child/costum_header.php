<?php 
$link1 = get_field('mail_link-header', 'options');
$link2 = get_field('link_facebook-header', 'options');
$link3 = get_field('link_instagram-header', 'options');
$link4 = get_field('menu_item-header_1', 'options');
$link5 = get_field('menu_item-header_2', 'options');
$link6 = get_field('menu_item-header_3', 'options');
$link7 = get_field('menu_item-header_4', 'options');
$link8 = get_field('menu_item-header_5', 'options');
$link9 = get_field('menu_item-header_6', 'options');
$link10 = get_field('menu_item-header_7', 'options');
$linkSliderHome = get_field('link_slider-home');





?>

<header style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php the_field('image_slider-header'); ?>);" class="costumHEADER">
    <div class="costum_header">
        <div class="costum_header_inhoud">
            <div class="logo_costum">
            <?php if( get_field('logo_header', 'options') ): ?>
                <img class="logo_costum-header" src="<?php the_field('logo_header', 'options'); ?>" />
            <?php endif; ?>
            </div>
            <div class="menu-items_custum">
                <div class="contact-items_costum">
                    <div class="mail-div-costum">
                        <?php 
                        if( $link1 ): ?>
                            <a class="mail-link-costum_header" href="<?php echo esc_url( $link1 ); ?>">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <?php the_field('mail_tekst-header', 'options'); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="socialmedia-div-costum">
                        <i class="fa fa-facebook" aria-hidden="true">
                            <a href="<?php echo esc_url( $link2 ); ?>">
                        </i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                            <a href="<?php echo esc_url( $link3 ); ?>">
                        </i>
                    </div>
                </div>
                <div class="menu-link_costum">
                    <div class="topnav" id="myTopnav">
                        <?php 
                        if( $link4 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link4 ); ?>">
                            <?php the_field('menu_item-tekst-header_1', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link5 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link5 ); ?>">
                            <?php the_field('menu_item-tekst-header_2', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link6 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link6 ); ?>">
                            <?php the_field('menu_item-tekst-header_3', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link7 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link7 ); ?>">
                            <?php the_field('menu_item-tekst-header_4', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link8 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link8 ); ?>">
                            <?php the_field('menu_item-tekst-header_5', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link9 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link9 ); ?>">
                            <?php the_field('menu_item-tekst-header_6', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php 
                        if( $link10 ): ?>
                            <a class="costum-link-header" href="<?php echo esc_url( $link10 ); ?>">
                            <?php the_field('menu_item-tekst-header_7', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>     
                    <script>
                    function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                    }
                    </script>
                </div>
            </div>
            </div>
            <div style="display:none;" class="slider-home">
                <div class="slider-home-inhoud">
                    <?php if( get_field('titel-slider-home_1') ): ?>
                        <h2 class="titel-home-1-slider"><?php the_field('titel-slider-home_1'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('titel-slider-home_2') ): ?>
                        <h2 class="titel-home-2-slider"><?php the_field('titel-slider-home_2'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('titel-slider-home_3') ): ?>
                        <h2 class="titel-home-3-slider"><?php the_field('titel-slider-home_3'); ?></h2>
                    <?php endif; ?>
                    <hr>
                    <?php if( get_field('informatie-slider-home') ): ?>
                        <p class="informatie-home-slider"><?php the_field('informatie-slider-home'); ?></p>
                    <?php endif; ?>
                    <?php 
                    if( $linkSliderHome ): ?>
                        <a class="sliderLink" href="<?php echo esc_url( $linkSliderHome ); ?>">
                        <?php the_field('tekst_slider-home'); ?>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                    <?php endif; ?>
                </div>
        </div>
    </div>
    

</header>