<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php $footer_page = get_page_by_path('footer'); ?>
	
	<?php if ($footer_page) { ?>
		
		<div class = "flex force-margin-width">
			<div class="flex-item margin-right-10">
				<?php require('footer-dets.php'); ?>
			</div>
			<div class="flex-item">
				<?php 
						if ($footer_page) {
							echo apply_filters('the_content', $footer_page->post_content);
						}
				?>
			</div>
		</div>
	<?php } else { ?>
		 <div class="flex-item force-margin-width text-center">
			<?php require('footer-dets.php'); ?>
		</div>
	<?php } ?> 
	<?php

?>
</footer><!-- #colophon .site-footer -->
