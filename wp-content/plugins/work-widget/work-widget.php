<?php
/*
Plugin Name: Work Summary
Description: this will display your work on a list
Version: 1.0
Author: Justin Falcon
License: None
*/
class work_sum extends WP_Widget {
    function __construct(){
        parent:: __construct(false, $name = __('work summary'));
    }
    
    function form(){
    
    }
    function update(){
    
    }
    function widget($args, $instance){
        ?>

  
                  <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'post_type' => array('work_grid') ));
                
	                  while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>
		               <div class="wrapper">
                             <div id="works">
                                    <ul>
                                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('work_image');?>"</a></li>
                                    <li class="right">
                                    <h1><?php echo get_the_title(); ?></h1>
                                    <h2><?php the_field('subtitle');?></h2>    
                                    <p><?php the_field('description');?></p>
                                    <div class="buttonHolder">
                                    <div class="storeButton"><a href="<?php the_field('itunes_link');?>">Download From iPhone app Store</a></div>
                                    <div class="storeButton"><a href="<?php the_field('google_link');?>">Download From Google Play</a></div>
                                    </div>
                                    </li>
                                    </ul>
                           </div>
                    </div>
                  <?php endwhile;?>

        <?php 
   }
}
add_action('widgets_init', function(){
    register_widget('work_sum');
})
?>