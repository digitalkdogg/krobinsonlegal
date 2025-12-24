<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class = "flex wp-block-group force-margin-width">
		<div class="flex-item margin-right-10">
			<p class = "site-title"><?php bloginfo('name'); ?><br />
			Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved</p>
			<br /><br /> 
			<a href = '/contact'><button>Contact Us</button></a>
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
