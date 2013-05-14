<?php
while (have_posts()) : the_post();
//get featured img
$feat_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'grid-thumb');
?>  

<article class="loop-entry box clearfix">
    <header>
        <h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php
        //show meta only on blog posts
        if ( get_post_type() != 'page' || get_post_type() != 'portfolio') { ?>
        <div class="loop-entry-meta">
            <?php _e('On','surplus'); ?> <time datetime="<?php the_time('Y'); ?>-<?php the_time('m'); ?>-<?php the_time('j'); ?>"><?php the_time('j'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></time>
            <?php _e('By', 'surplus'); ?> <?php the_author_posts_link(); ?>
            <?php _e('With', 'surplus'); ?>  <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
        </div>
    </header>
    <!-- /loop-entry-meta -->
    <?php } ?>
    
    <figure class="loop-entry-thumbnail">
        <a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>">
            <?php if($feat_img) { ?>
                <img src="<?php echo $feat_img[0]; ?>" alt="<?php echo the_title(); ?>" />
            <?php } else { ?>
                <img src="http://www.grafikscript.fr/wp-content/uploads/2012/11/illustation_javascript.jpg" alt="" />
            <?php } ?>
        </a>
    </figure>

	<?php the_excerpt(''); ?>
</article>
<!-- loop-entry -->

<?php endwhile; ?>