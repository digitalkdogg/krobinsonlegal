			<?php do_action( 'vantage_main_bottom' ); ?>
		</div><!-- .full-container -->
	</div><!-- #main .site-main -->

	<?php do_action( 'vantage_after_main_container' ); ?>

	<?php do_action( 'vantage_before_footer' ); ?>

	<?php get_template_part( 'parts/footer', apply_filters( 'vantage_footer_type', siteorigin_setting( 'layout_footer' ) ) ); ?>

	<?php do_action( 'vantage_after_footer' ); ?>

</div><!-- #page-wrapper -->

<?php do_action( 'vantage_after_page_wrapper' ); ?>

<?php var_dump(wp_json_encode( get_post_meta( get_the_ID() ) )); ?>
<div id = "meta-data" style="display:none;">
	<script>
		var custom = <?php echo wp_json_encode( get_post_meta( get_the_ID()) ); ?>;
	</script>
</div>

<?php wp_footer(); ?>

</body>
</html>
