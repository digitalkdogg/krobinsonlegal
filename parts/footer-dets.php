<?php
/**
 * Part Name: Default Footer Dets
 */
?>
<footer-dets>
    <p class = "site-title"><?php bloginfo('name'); ?></p>
    Mailing Address :  P.O. Box 1027, Harrison, AR 72602 <br />
    <br />
    
    <div class = "flex justify-around margin-bottom-20">
        <a href = '/contact'><button class="margin-bottom-20">Contact Us</button></a>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/img/krl_logo_brown.webp" style = "filter: brightness(2); height: 100px; width: 150px; opacity: 0.5;" aria-hidden="true" />
    </div>
    <span class = "copyright-text">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved<span>

</footer-dets>
