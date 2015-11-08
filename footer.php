<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package leo
 */
?>
<?php if(!is_front_page()) { ?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
<?php } ?>
		</div><!-- close .row -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	<div class="row">
			<div class="site-footer-inner col-sm-12">
                            <div class="foot-wid clearfix">
                                <div class="col-xs-3"><?php dynamic_sidebar( 'footer-sidebar-1' ); ?></div>
                                <div class="col-xs-3"><?php dynamic_sidebar( 'footer-sidebar-2' ); ?></div>
                                <div class="col-xs-3"><?php dynamic_sidebar( 'footer-sidebar-3' ); ?></div>
                                <div class="col-xs-3"><?php dynamic_sidebar( 'footer-sidebar-4' ); ?></div>
                            </div>
				<div class="site-info">
					<?php do_action( 'leo_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'leo' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'leo' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'leo' ), 'leo', '<a href="http://github.com/saumya010" rel="designer">Saumya Sharma</a>' ); ?>
				</div><!-- close .site-info -->
			</div>
		</div>
</footer><!-- close #colophon -->

<?php wp_footer(); ?>
</div>
</body>
</html>