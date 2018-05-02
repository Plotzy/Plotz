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

<!--
 __        __         _                                             _____    ___
 \ \      / /   ___  | |   ___    ___    _ __ ___     ___          |_   _|  / _ \     _
  \ \ /\ / /   / _ \ | |  / __|  / _ \  | '_ ` _ \   / _ \           | |   | | | |   (_)
   \ V  V /   |  __/ | | | (__  | (_) | | | | | | | |  __/           | |   | |_| |    _
    \_/\_/     \___| |_|  \___|  \___/  |_| |_| |_|  \___|           |_|    \___/    (_)


  ____    _           _                   ____                          _                                              _
 |  _ \  | |   ___   | |_   ____         |  _ \    ___  __   __   ___  | |   ___    _ __    _ __ ___     ___   _ __   | |_
 | |_) | | |  / _ \  | __| |_  /         | | | |  / _ \ \ \ / /  / _ \ | |  / _ \  | '_ \  | '_ ` _ \   / _ \ | '_ \  | __|
 |  __/  | | | (_) | | |_   / /          | |_| | |  __/  \ V /  |  __/ | | | (_) | | |_) | | | | | | | |  __/ | | | | | |_
 | |     |_|  \___/   \__| /___|         |____/   \___|   \_/    \___| |_|  \___/  | .__/  |_| |_| |_|  \___| |_| |_|  \__|
 |_|                                                                               | |
                                                                                   |_|
 -->

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
                    <h1 class="pb-5 banner-wrap"> <i>Portfolio</i> </h1>
                    <hr>
                </div>
            </div>
        </div>

        <!-- Portfolio Projects go here -->
                <!--Agcentric Image-->
        <div class="container-fluid pt-5 mt-3">
            <div class="row no-gutters">
                <div class="col-md-6 d-flex text-center">
                    <div class="card text-white ">
                        <a href="https://agcentric.org/">
                        <img src="<?php bloginfo('template_url'); ?> /assets/images/agcentric-portfolio.png" alt="agcentric project" height="1000px" width="1000px" class="card-img img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5" />
                             <div class="card-img-overlay effect1">
                                <h2 class=" display-4 card-title pt-5 mt-5  ">AgCentric</h2>
                                <h4 class="card-text pt-3 ">Government & Education</h4>
                            </div>
                    </div>
                    </a>
                </div>
                        <!--Agcentric Content-->
                <!-- Read Me Button ( Once Button are push I want them to disapear & show the content below ) -->
                   <div class="col-md-6 text-left bg-dark">
                        <h1 class="py-3 pt-5 pl-5 mr-5 mb-1 text-center">Agcentric Project</h1>
                        <h4 class=" pb-3 pr-5 text-center custom-link">  I was part of a team at <a href="https://8bitstudio.com/"> <b><i>8bitstudio</i></b> </a> that built this project.</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-10 justify-content-center text-center mx-5 px-5">
                                        <p class="pl-5 px-5 mx-5">If you’re somewhat familiar with Minnesota, then you’d know that agriculture is not in short supply! <br /> </p>
                                        <p class="collapse btnAgcentric">
                                            In fact, the corn capital of the world is just a hop, skip, and a jump from our center of operations.
                                            So our crew was happy to be enlisted by AgCentric, a MN
                                            state program bridging the gap between students and a successful career in agriculture. As a driving force for agricultural education
                                            and agribusiness, this influential program provides a pathway for K-12, beginning farmers, and the next gen to seek out a future in the
                                            Ag industry.
                                        </p>
                                        <button id="Agcen">Read More</button>
                                    </div>
                                </div>
                            </div>
                   </div>
                    <!-- Wissota Content-->
                <div class="col-md-6 text-center bg-dark">
                    <h1 class="py-3 text-center"> Wissota Project</h1>
                    <h4 class=" pb-3 pr-5 text-center custom-link">  I was part of a team at <a href="https://8bitstudio.com/"> <b><i>8bitstudio</i></b> </a> that built this project.</h4>
                    <p class="text-center btnWissota px-5">What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the What is Lorem Ipsum? Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...</p>
                    <button id="Wiss">Read More</button>
                </div>
                <!--Wissota Image-->
                <div class="col-md-6 d-flex justify-content-center text-center ">
                    <div class="card bg-dark text-white">
                        <a href="https://wissota.com">
                        <img src="<?php bloginfo('template_url'); ?> /assets/images/wissota-portfolio.png" alt="wissota project" height="1000px" width="1000px" class="img-fluid px-2 ml-lg-0 ml-xl-0 mr-xl-5" />
                            <div class="card-img-overlay effect1">
                                <h2 class="display-4 card-title pt-5 mt-5">Wissota Skate Sharpeners</h2>
                                <h4 class="card-text pt-3">Sports & Recreation</h4>
                            </div>
                        </a>
                    </div>
                </div>
        </div>

            <!-- Testing Zone -->
                <h1 class="text-center">JQuery Syntax</h1> <br>
                    <p class="text-center">Hello there! This is some text.</p> <br>

            <div id="box" class="text-center">a box </div> <br>
            <div class="text-center thing"> a thing </div> <br>
            <div class="text-center"> <br>
            <button id="btnRoar"> A button!</button>
                <p class="Roar">What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the What is Lorem Ipsum? Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the What is Lorem Ipsum? Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ...</p>
            </div>

            <body id="selectors">
            <h1>JQuery Selectors</h1>
                <h2>I'm a level 2 heading!</h2>
                    <p class="lead">And I'm a paragraph tag with the class of "Lead".</p>
            <div id="container">
                <h3>I'm a level 3 heading</h3>
                    <p>This is a </p>
            </div>

            </body>
            <!-- End of Testing Zone -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->

<?php get_footer();
