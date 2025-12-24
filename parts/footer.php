<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class = "flex force-margin-width">
		<div class="flex-item margin-right-10">
			<p class = "site-title"><?php bloginfo('name'); ?></p>
			Mailing Address :  P.O. Box 1027, Harrison, AR 72602 <br />
			<br />
			
			<div class = "flex justify-start">
				<a href = '/contact'><button>Contact Us</button></a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/img/courthouse-404.png" style = "height: 100px; width: 200px; opacity: 0.5;" aria-hidden="true" />
			</div>
			Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved 
		</div>
		<div class="flex-item">
			<?php 
				$footer_page = get_page_by_path('footer');
					if ($footer_page) {
    					echo apply_filters('the_content', $footer_page->post_content);
					}
			?>
		</div>
		
	</div>
	<?php

?>
</footer><!-- #colophon .site-footer -->
