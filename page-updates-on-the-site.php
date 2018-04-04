<?php
/**
 * Created by PhpStorm.
 * User: Plotz
 * Date: 2/22/2018
 * Time: 1:31 PM
 *Template Name: updates
 */

get_header(); ?>


    <div class="container">
        <div  class="row">
            <div class="col" ">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page', 'home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


             </div><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();