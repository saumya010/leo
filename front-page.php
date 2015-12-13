<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package leo
 */

get_header(); ?>
    <div class="leo-home-flex">
        <div class="flexslider">
            <ul class="slides">
                <li <?php if ( get_theme_mod( 'leo_slider_image_1') !='' ) { ?>
                    data-thumb="
                    <?php echo esc_url(get_theme_mod('leo_slider_image_1')); ?>"
                        <?php } else {  ?>
                            data-thumb="
                            <?php echo esc_url(get_template_directory_uri()); ?>/images/img1.jpg"
                                <?php } ?>
                                    >
                                    <?php if ( get_theme_mod('leo_slider_image_1') !='' ) {  ?>
                                        <div><img src="<?php echo esc_url(get_theme_mod('leo_slider_image_1')); ?>" /></div>
                                        <?php } else {  ?>
                                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img1.jpg"></div>
                                            <?php } ?>
                </li>
                <li <?php if ( get_theme_mod( 'leo_slider_image_2') !='' ) { ?>
                    data-thumb="
                    <?php echo esc_url(get_theme_mod('leo_slider_image_2')); ?>"
                        <?php } else {  ?>
                            data-thumb="
                            <?php echo esc_url(get_template_directory_uri()); ?>/images/img2.jpg"
                                <?php } ?>
                                    >
                                    <?php if ( get_theme_mod('leo_slider_image_2') !='' ) {  ?>
                                        <div><img src="<?php echo esc_url(get_theme_mod('leo_slider_image_2')); ?>" /></div>
                                        <?php } else {  ?>
                                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img2.jpg"></div>
                                            <?php } ?>
                </li>
                <li <?php if ( get_theme_mod( 'leo_slider_image_3') !='' ) { ?>
                    data-thumb="
                    <?php echo esc_url(get_theme_mod('leo_slider_image_3')); ?>"
                        <?php } else {  ?>
                            data-thumb="
                            <?php echo esc_url(get_template_directory_uri()); ?>/images/img3.jpg"
                                <?php } ?>
                                    >
                                    <?php if ( get_theme_mod('leo_slider_image_3') !='' ) {  ?>
                                        <div><img src="<?php echo esc_url(get_theme_mod('leo_slider_image_3')); ?>" /></div>
                                        <?php } else {  ?>
                                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img3.jpg"></div>
                                            <?php } ?>
                </li>
                <li <?php if ( get_theme_mod( 'leo_slider_image_4') !='' ) { ?>
                    data-thumb="
                    <?php echo esc_url(get_theme_mod('leo_slider_image_4')); ?>"
                        <?php } else {  ?>
                            data-thumb="
                            <?php echo esc_url(get_template_directory_uri()); ?>/images/img4.jpg"
                                <?php } ?>
                                    >
                                    <?php if ( get_theme_mod('leo_slider_image_4') !='' ) {  ?>
                                        <div><img src="<?php echo esc_url(get_theme_mod('leo_slider_image_4')); ?>" /></div>
                                        <?php } else {  ?>
                                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img4.jpg"></div>
                                            <?php } ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="leo-contact-me clearfix">
        <div class="col-xs-10">
            <?php if ( get_theme_mod('leo_contact_heading') !='' ) {  ?>
                <h3><?php echo esc_html(get_theme_mod('leo_contact_heading')); ?></h3>
                <?php } else { echo '<h3>'. __( 'Enjoy my work ? Contact me and get a free quote today ' , 'leo' ) ?></h3>
                    <?php  } ?>
                        <?php if ( get_theme_mod('leo_contact_description') !='' ) {  ?>
                            <p>
                                <?php echo esc_html(get_theme_mod('leo_contact_description')); ?>
                            </p>
                            <?php } else {  echo '<p>'.__(' Contact us to know more.', 'leo').'</p>' ?>
                                <?php } ?>
        </div>
        <div class="col-xs-2">
            <?php if ( get_theme_mod('leo_contact_link_text') !='' ) {  ?>
                <a <?php if ( get_theme_mod( 'leo_contact_link') !='' ) { ?>
            href="<?php echo esc_url(get_theme_mod('leo_contact_link')); ?>">
        <?php } ?>
                <?php echo esc_html(get_theme_mod('leo_contact_link_text')); ?></a>
                <?php } else {  ?>
                    <a href="#">
                        <?php echo __('Contact Us', 'leo') ?>
                    </a>
                    <?php } ?>
        </div>
    </div>
    <div class="leo-home-wid clearfix">
        <div class="col-xs-3">
            <?php dynamic_sidebar( 'home-sidebar-1' ); ?>
        </div>
        <div class="col-xs-3">
            <?php dynamic_sidebar( 'home-sidebar-2' ); ?>
        </div>
        <div class="col-xs-3">
            <?php dynamic_sidebar( 'home-sidebar-3' ); ?>
        </div>
        <div class="col-xs-3">
            <?php dynamic_sidebar( 'home-sidebar-4' ); ?>
        </div>
    </div>
    <div class="leo-portfolio clearfix">
        <div class="leo-port-title">
            <?php if ( get_theme_mod('leo_portfolio_heading') !='' ) {  ?>
                <h3><?php echo esc_html(get_theme_mod('leo_portfolio_heading')); ?></h3>
                <?php } else { __( '<h3>Portfolio</h3>','leo' ) ?>
                    <?php } ?>
        </div>
        <div class="col-xs-3">
            <?php if ( get_theme_mod('leo_portfolio_image_1') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('leo_portfolio_image_1')); ?>" /></div>
                <?php } else {  ?>
                    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img5.jpg"></div>
                    <?php } ?>
        </div>
        <div class="col-xs-3">
            <?php if ( get_theme_mod('leo_portfolio_image_2') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('leo_portfolio_image_2')); ?>" /></div>
                <?php } else {  ?>
                    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img6.jpg"></div>
                    <?php } ?>
        </div>
        <div class="col-xs-3">
            <?php if ( get_theme_mod('leo_portfolio_image_3') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('leo_portfolio_image_3')); ?>" /></div>
                <?php } else {  ?>
                    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img7.jpg"></div>
                    <?php } ?>
        </div>
        <div class="col-xs-3">
            <?php if ( get_theme_mod('leo_portfolio_image_4') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('leo_portfolio_image_4')); ?>" /></div>
                <?php } else {  ?>
                    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img8.jpg"></div>
                    <?php } ?>
        </div>
    </div>
    <div class="leo-home-wid-2 clearfix">
        <div class="col-xs-6">
            <?php dynamic_sidebar( 'home-sidebar-5' ); ?>
        </div>
        <div class="col-xs-6">
            <?php dynamic_sidebar( 'home-sidebar-6' ); ?>
        </div>
    </div>
    <div class="leo-home-blog">
            <?php get_template_part('content','frontpost') ?>
    </div>
    <?php get_footer(); ?>