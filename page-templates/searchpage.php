<?php
/**
 * Template Name: Search Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">
			<div class="col-md-3">
				<div class="facet-box">
					<h3 class="filter-lead">Filter by:</h3>
					<h3>Math Themes</h3>
					<?php echo facetwp_display( 'facet', 'math_themes');?>
					<h3>Science Themes</h3>
					<?php echo facetwp_display( 'facet', 'science_themes');?>		
					<h3>Total Time</h3>
					<?php echo facetwp_display( 'facet', 'time' );?>
					<h3>Material Count</h3>
					<?php echo facetwp_display( 'facet', 'material' );?>
				</div>	
			</div>
			

			<div class="col-md-9 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					

					<?php
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/content', 'page' );
						
					}
					?>
					<?php echo facetwp_display( 'template', 'lesson_display' );?>
					<?php echo do_shortcode('[facetwp pager="true"]') ;?>
					<button class="btn btn-alp btn-dark" value="Reset" onclick="FWP.reset()" class="facet-reset" />Reset Filters</button>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
