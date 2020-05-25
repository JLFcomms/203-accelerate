<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				    <h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <h1>Our Services</h1>
                <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>

            <?php while ( have_posts() ) : the_post();	
			    $services = get_field('services');
			    $service_description = get_field('service_description'); 
			    $image_1 = get_field('image_1'); 
                $size = "thumbnail"; ?>
                
                <article class="services">
                    <h3><?php echo $services; ?></h3>
				    <p><?php echo $service_description; ?></p>
         	    </article>

		 	    <div class="images-1">
		 		    <?php if($image_1) {
					    echo wp_get_attachment_image( $image_1, $size);
			    	} ?>
			    </div>
            <?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
    </div><!-- #primary -->
    
<?php get_footer(); ?>
