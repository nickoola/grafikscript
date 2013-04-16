<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<header id="page-heading" class="clearfix">
    <h1><?php the_title(); ?></h1>		
</header>
<!-- /page-heading -->
<div class="row-fluid">
	<div class="span9">
		<article class="post box clearfix">
		    <div class="entry clearfix">	
		    	<?php the_content(); ?> 
			</div>
			<!-- /entry -->    
		</article>
	<!-- /post -->
	</div>
	<?php endwhile; ?>
	<?php endif; ?>	  
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>