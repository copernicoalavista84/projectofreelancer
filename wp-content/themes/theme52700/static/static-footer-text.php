<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>
	
		<strong><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a></strong> &copy; <?php echo date ('Y'); ?> <?php _e('All rights reserved', CURRENT_THEME); ?> <b><a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a></b>
		
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<a rel="nofollow" href="http://www.templatemonster.com/wordpress-themes.php" target="_blank">TemplateMonster</a> Design. 
	<?php } ?>
</div>