<?php get_header(); ?>
<div class="wrapper">
    <div id="employee">   
        <div class="employeeTop">
            <ul>
                <li>
                    <?php previous_post_link("%link","<img src='http://localhost:34284/wp-content/uploads/2015/01/left.png'/>"); ?> 
                </li>
                <li class="imgCol">
	                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </li>
                <li>
                    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                    <h2><?php the_field('job_title');?></h2>
                </li>
                <li class="last">
                    <?php next_post_link("%link","<img src='http://localhost:34284/wp-content/uploads/2015/01/right.png'/>"); ?> 
                </li>
                </ul>
            </div>
            <div class="bottomArea">
            <h3><?php the_field('fav_quote');?></h3>
            <p><?php the_field('bio');?></p>
    
            </div>
        </div>
</div>
<?php get_footer(); ?>
