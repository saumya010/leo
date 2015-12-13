<?php
/**
 * The template for displaying featured posts on Front Page 
 * Template Name : Content-front-page
 * @package Leo
 * @since Leo 1.7
 */
?>

    <?php
    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
    );
    $featuredposts = new WP_Query($featured_post_args);
?>
        <div class="leo-home-blog-inner">
            <div class="leo-page-title">
                <?php if ( get_theme_mod('leo_blog_heading') !='' ) {  ?>
                    <h3><?php echo esc_html(get_theme_mod('leo_blog_heading')); ?></h3>
                    <?php } else {  ?>
                        <h3><?php esc_html_e('Blog', 'leo') ?></h3>
                        <?php } ?>
            </div>
            <div class="leo-home-blog-content">
                <div class="row">
                    <?php if ($featuredposts->have_posts()) : $i = 1; ?>
                        <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>
                            <?php if( $i == 1 || $i == 4 ) { ?>
                                <div class="leo-blog-inner col-md-12">
                                    <div class="leo-post-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <!--end .featured-post-content -->
                                    <div class="leo-post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                    <div class="leo-post-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="leo-blog-btm">
                                        <p class="leo-post-meta">
                                            <span class="author-meta">By <?php the_author_posts_link(); ?></span>
                                            <span>On <?php the_time(esc_html('j M Y','leo')); ?></span>
                                        </p>
                                        <div class="leo-blog-btm-right">
                                            <i class="fa fa-comment-o"></i>
                                            <a href="<?php comments_link(); ?>">
                                                <?php echo comments_number(); ?>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- /.featured-header -->
                                </div>
                                <!-- /.featured-header -->
                                <?php  } else { ?>
                                    <div class="col-md-6 leo-blog-inner">
                                        <div class="leo-post-img">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                        <!--end .featured-post-content -->
                                        <div class="leo-post-title">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                        </div>
                                        <div class="leo-post-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="leo-blog-btm">
                                            <p class="leo-post-meta">
                                                <span class="author-meta">By <?php the_author_posts_link(); ?></span>
                                                <span>On <?php the_time(esc_html('j M Y','leo')); ?></span>
                                            </p>
                                            <div class="leo-blog-btm-right">
                                                <i class="fa fa-comment-o"></i>
                                                <a href="<?php comments_link(); ?>">
                                                    <?php echo comments_number(); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                        <?php $i++; ?>
                                            <?php endwhile; ?>
                                                <?php else : ?>
                                                    <h2 class="center"><?php esc_html_e('Not Found', 'leo'); ?></h2>
                                                    <p class="center">
                                                        <?php esc_html_e('Sorry, but you are looking for something that is not here', 'leo'); ?>
                                                    </p>
                                                    <?php get_search_form(); ?>
                                                        <?php endif; ?>
                </div>
                <!-- /#front-featured-posts -->
            </div>
            <!-- /#front-featured-posts -->
        </div>