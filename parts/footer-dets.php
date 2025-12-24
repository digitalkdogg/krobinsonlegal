<?php
/**
 * Part Name: Default Footer Dets
 */
?>
<footer-dets>
    <p class = "site-title"><?php bloginfo('name'); ?></p>
    Mailing Address :  P.O. Box 1027, Harrison, AR 72602 <br />
    <br />
    
    <div class = "flex justify-around">
        <a href = '/contact'><button>Contact Us</button></a>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/img/courthouse-404.png" style = "height: 100px; width: 200px; opacity: 0.5;" aria-hidden="true" />
    </div>
    <span class = "copyright-text">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved<span>

</footer-dets>
