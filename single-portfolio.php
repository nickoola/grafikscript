<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   

<article>
    <header id="page-heading">
        <h1><?php the_title(); ?></h1>
        <nav id="single-nav" class="clearfix">
            <ul> 
                <?php next_post_link('<li id="single-nav-left">%link</li>', '<span class="awesome-icon-chevron-left"></span> '.__('Précédent','adapt').'', false); ?>
                <?php previous_post_link('<li id="single-nav-right">%link</li>', ''.__('Suivant','adapt').' <span class="awesome-icon-chevron-right"></span>', false); ?>
            </ul>
        </nav>
        <!-- /single-nav --> 
    </header>
    <!-- /page-heading -->
    
    <div id="single-portfolio" class="post row-fluid clearfix">
        
        <div id="single-portfolio-left" class="span8">
            <div class="viewer_container">
                <div id="project_slider" class="viewer">
                    <?php   
                        //attachement loop
                        $args = array(
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            'post_type' => 'attachment',
                            'post_parent' => get_the_ID(),
                            'post_mime_type' => 'image',
                            'post_status' => null,
                            'posts_per_page' => -1
                        );
                        $attachments = get_posts($args);
                        
                        //attachments count
                        $attachments_count = count($attachments);
                    ?>
                    
                    <ul class="viewer_list clearfix">
                        <?php   
                        //start loop
                        foreach ($attachments as $attachment) :
                            $attachments_id += 1;
                            //get images
                            $full_img = wp_get_attachment_image_src( $attachment->ID, 'full-size');
                            $portfolio_single = wp_get_attachment_image_src( $attachment->ID, 'portfolio-single'); ?>
                            <li id="<?php echo 'content_0'.$attachments_id; ?>" data-srcimg="<?php echo $portfolio_single[0]; ?>" data-descimg="<?php echo apply_filters('the_title', $attachment->post_title); ?>"><span><?php echo apply_filters('the_title', $attachment->post_title); ?></span></li>
                        <?php endforeach; ?>
                    </ul>

                    <ul class="viewer_menu">
                        <li><a href="#" class="bt_prev">Précédent</a></li>
                        <li><a href="#" class="bt_next">Suivant</a></li>
                        <li><a href="#" class="bt_play stop" title="Play">Stop</a></li>
                        <li>
                            <ul class="viewer_position">
                                <?php
                                foreach ($attachments as $attachment) :
                                    $link_ancre += 1;?>
                                    <li><a href="<?php echo '#content_0'.$link_ancre; ?>"><?php echo $link_ancre; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /viewer -->
            </div>
            <!-- /viewer-wrap -->
        </div>
        <!-- /single-portfolio-left -->
        
        <div id="single-portfolio-right" class="span4">
            <?php the_content(); ?>
        </div>
        <!-- /single-portfolio-right -->
        
    </div>
    <!-- /post --> 
</article>
<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>