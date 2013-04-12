<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
</div>
<!-- /main -->
</div>
<!-- wrap --> 

    <footer id="footer" class="clearfix">
        <div class="container-fluid">
            <div id="footer-widget-wrap" class="row-fluid clearfix">
                <div id="footer-one" class="span3">
                	<?php dynamic_sidebar('footer-one'); ?>
                </div>
                <!-- /footer-one -->
                
                <div id="footer-two" class="span3">
                	<?php /*dynamic_sidebar('footer-two');*/ ?>
                    <div class="footer-widget clearfix">
                        <h4>Mots Clés</h4>
                        <div class="tagcloud">
                            <?php wp_tag_cloud('smallest=0.75&largest=1.2&unit=em&number=15&orderby=count'); ?>
                        </div>
                    </div>
                </div>
                <!-- /footer-two -->
                
                <div id="footer-three" class="span3">
                	<?php dynamic_sidebar('footer-three'); ?>
                </div>
                <!-- /footer-three -->
                
    			<div id="footer-four" class="span3">
                	<?php dynamic_sidebar('footer-four'); ?>
                </div>
                <!-- /footer-four -->
            </div>
            <!-- /footer-widget-wrap -->
              
    		<div id="footer-bottom" class="clearfix">
                <div id="copyright">
                    &copy; <?php echo date('Y'); ?>  <?php bloginfo( 'name' ) ?>
                </div>
                <!-- /copyright -->
                
                <div id="back-to-top">
                    <a href="#toplink"><?php _e('back up', ''); ?> &uarr;</a>
                </div>
                <!-- /back-to-top -->
            </div>
            <!-- /footer-bottom -->
        </div>    
	</footer>
	<!-- /footer -->

<!-- WP Footer -->
<?php wp_footer(); ?>
</body>
</html>