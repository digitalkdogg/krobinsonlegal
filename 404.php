<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @since vantage 1.0
 *
 * @license GPL 2.0
 */
get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<article id="post-0" class="post error404 not-found">

			<div class="entry-main">

				<?php do_action( 'vantage_entry_main_top' ); ?>

			

				<div class="entry-content" style="text-align: center; min-height: 800px;">

					<h1>Kendra Robinson Law, P.A.</h1>
					<br /><br />
					<h2>404 <br /> Page Not Found</h2>

					<p><?php echo apply_filters( 'vantage_404_message', __( 'It looks like nothing was found at this location.', 'vantage' ) ); ?></p>
					<p><br /><br />
					<a href="http://kendrarobinsonlaw.com/"><button>Return to Home Page</button></a>
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/img/courthouse-404.png" style = "height: 200px; width: 300px;" aria-hidden="true" />

				</div><!-- .entry-content -->

				<?php do_action( 'vantage_entry_main_bottom' ); ?>

			</div><!-- .entry-main -->

		</article><!-- #post-0 .post .error404 .not-found -->

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>
