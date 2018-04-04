<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

    <!-- Practice Your buttons in Word Press-->
    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Single toggle
    </button>


    <button type="button" class="btn btn-outline-dark " data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse4">Read More</button>
    <br /> <br />
    <p class="collapse" id="collapse5">
        In fact, the corn capital of the world is just a hop, skip, and a jump from our center of operations.
        So our crew was happy to be enlisted by AgCentric, a MN
        state program bridging the gap between students and a successful career in agriculture. As a driving force for agricultural education
        and agribusiness, this influential program provides a pathway for K-12, beginning farmers, and the next gen to seek out a future in the
        Ag industry.
    </p>
    <script>$().button('dispose');</script>

    <!-- This is where your practice ends -->


	<div class="container-fluid pt-5">
        <div class="row py-5">
            <div class="col text-center py-3">
                <h1 class="display-4 banner-wrap"> I Develop Custom Responsive Functional Websites! </h1>
            </div>
        </div>
    </div>

        <div class="container py-5 ">
            <div class="row universal-wrap justify-content-center">
                <div class="col-sm-8 col-md-4 custom_img_center">
                    <img src="<?php bloginfo('template_url'); ?> /assets/images/mobile-responsive-icon.png" alt="place holder image" height="250px" width="300px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5 force-image" />
                    <h2 class="pt-3 pr-4 mt-4 pb-3 text-center"> Responsive Development </h2>
                    <p class="text-center"> Responsive Web Development is when a user's behavior & enviorment is based on
                        the screen size platform orientation. <br> <br>

                        <button class="btn change-readme-buttons-color text-center" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            Example
                        </button>
                            <div class="mx-4 collapse" id="collapse1">
                                <div class="card card-body">
                                    <br>
                                     When a user is on a phone, tablet or
                                    computer and the screen changes based on that orientation. </p>
                            </div>
                                </div>
                </div>
                <div class="col-sm-8 col-md-4 custom_img_center">
                    <img src="<?php bloginfo('template_url'); ?> /assets/images/build-website-icon.png" alt="place holder image" height="250px" width="300px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5 force-image" />
                    <h2 class="mt-1 pr-4 pb-2  text-center">QA Building & Testing</h2>
                    <p class="text-center "> QA is a process of diagnosing weather a customer grade product or service meets
                        specific requirements.<br> <br>

                        <button class="btn change-readme-buttons-color text-center " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Example
                        </button>
                            <div class="mx-4 collapse" id="collapse2">
                                <div class="card card-body">
                                    <br> Testing your website on different opperating systems & web browsers to fix bugs that may arise. </p>
                            </div>
                                </div>

                </div>
                <div class="col-sm-8 col-md-4 custom_img_center">
                    <img src="<?php bloginfo('template_url'); ?> /assets/images/seo-icon.jpg" alt="place holder image" height="250px" width="300px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5 rounded-circle force-image" />
                    <h2 class="pt-3 pr-4 text-center"> Search Engine Optimization</h2>
                    <p class="text-center"> SEO stands for "search engine optimization" and is based on key words when using
                        a search engine. <br> <br>

                        <button class="btn change-readme-buttons-color text-center" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Example
                        </button>
                            <div class=" mx-4 collapse" id="collapse3">
                                <div class="card card-body btn_body">
                                   When using a search engine like google, bing or yahoo and searching for pants. The results will be the top websites that sell pants.  </p>
                            </div>
                                </div>

                </div>
            </div>
        </div>



        <div class="container-fluid ">
            <div class="row">
                <div class="col text-center py-3">
                    <hr>
                    <h1 class="display-4 pb-5"> <i>Portfolio</i> </h1>
                    <hr>
                </div>
            </div>
        </div>

        <!-- Portfolio Projects go here -->
                <!--Agcentric Image-->
        <div class="container-fluid pt-5 mt-3">
            <div class="row no-gutters">
                <div class="col-md-6 d-flex text-center">
                    <div class="card text-white">
                        <a href="https://agcentric.org/">
                        <img src="<?php bloginfo('template_url'); ?> /assets/images/agcentric-portfolio.png" alt="agcentric project" height="1000px" width="1000px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5" />
                             <div class="card-img-overlay ovl">
                                <h2 class=" display-4 card-title pt-5 mt-5 ">AgCentric</h2>
                                <h4 class="card-text pt-3 ">Goverment & Education</h4>
                            </div>
                        </a>
                    </div>
                </div>
                        <!--Agcentric Content-->
                <!-- Read Me Button ( Once Button are push I want them to disapear & show the content below ) -->
                   <div class="col-md-6 text-left bg-dark">
                        <h1 class="py-3 pt-5 pl-5 mr-5  mb-1 text-center">Agcentric Project</h1>
                        <h4 class=" pb-3 pr-5 text-center custom-link">  I was part of a team at <a href="https://8bitstudio.com/"> <b><i>8bitstudio</i></b> </a> that built this project.</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-10 justify-content-center text-center mx-5 px-5">
                                        <p class="pl-5 px-5 mx-5">If you’re somewhat familiar with Minnesota, then you’d know that agriculture is not in short supply! <br /> </p>
                                        <button type="button" class="btn btn-outline-dark visible" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Read More</button>
                                        <br /> <br />
                                    <p class="collapse" id="collapse4">
                                        In fact, the corn capital of the world is just a hop, skip, and a jump from our center of operations.
                                        So our crew was happy to be enlisted by AgCentric, a MN
                                        state program bridging the gap between students and a successful career in agriculture. As a driving force for agricultural education
                                        and agribusiness, this influential program provides a pathway for K-12, beginning farmers, and the next gen to seek out a future in the
                                        Ag industry.
                                    </p>
                                    </div>
                                </div>
                            </div>
                   </div>
                    <!-- Wissota Content-->
                <div class="col-md-6 text-right bg-dark">
                    <h1 class="py-3 text-center"> Wissota Project</h1>
                    <p class="text-left pl-5"> I was part of a team at <a href="https://8bitstudio.com/"> <b>8bitstudio</b> </a> that built this project.</p>
                </div>
                <!--Wissota Image-->
                <div class="col-md-6 d-flex justify-content-center text-center ">
                    <div class="card text-white">
                        <a href="https://wissota.com">
                        <img src="<?php bloginfo('template_url'); ?> /assets/images/wissota-portfolio.png" alt="wissota project" height="1000px" width="1000px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5" />
                            <div class="card-img-overlay ovl">
                                <h2 class="display-4 card-title pt-5 mt-5">Wissota Skate Sharpeners</h2>
                                <h4 class="card-text pt-3">Sports & Recreation</h4>
                            </div>
                        </a>
                    </div>
                </div>
        </div>


		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->

<?php get_footer();
