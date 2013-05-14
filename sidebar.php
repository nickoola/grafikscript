<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
 $options = get_option( 'adapt_theme_settings' );
?>
<aside id="sidebar" class="span3 clearfix" role="complementary">
	<?php dynamic_sidebar('sidebar'); ?>
</aside>
<!-- /sidebar -->