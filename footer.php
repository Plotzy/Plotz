<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
        <div class="custom-class">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
                <div class="container-fluid">
                    <div class="row .custom-class">
                        <div class="col-12 text-center">
                          <p> © COPYRIGHT 2018 &nbsp; / &nbsp; Developed by&nbsp;: Plotz Development &nbsp; / &nbsp; <a href="https://wordpress.org/" alt="WordPress">Powered by Wordpress </a> </p>
                        </div>
                    </div>
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 social-navigation text-center" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
                            </div>
                        </div>
                    </div>
                    <!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>

                    </div>
                </div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

<!--<div class="site-info">
    <a href="</?//php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>">
		<//?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress ' );
		?></a>