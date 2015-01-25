<?php
/*
Plugin Name: Employee Grid
Description: this will display your employee's images in a clickable grid
Version: 1.0
Author: Justin Falcon
License: None
*/
class emp_display extends WP_Widget {
    function __construct(){
        parent:: __construct(false, $name = __('Employee Image Grid'));
    }
    
    function form(){
    
    }
    function update(){
    
    }
    function widget($args, $instance){
        ?>
                <div class="wrapper">
                 <div id="latest">
                <div id="gridWrapper">

                  <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'post_type' => array('staff') ));

	                  while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>
		                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail') ?></a>
                  <?php endwhile;?>

            </div>
         </div>
        </div>
        <?php 
   }
}
add_action('widgets_init', function(){
    register_widget('emp_display');
})
?>