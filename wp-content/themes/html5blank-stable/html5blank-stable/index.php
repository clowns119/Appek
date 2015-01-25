<?php get_header(); ?>

	<main role="main">
       
		<div class="blogPage">
                <div class="blogTitle">
                    <h1>Going Mobile</h1>
                    <h3>The APPEK Blog</h3>
                </div>
             <?php get_sidebar(); ?>   
            <!-- section -->
		        <section>         
                    <div class="blogWrap">
			        <?php get_template_part('loop'); ?>

			        <?php get_template_part('pagination'); ?>
                    </div>
		        </section>
		</div>
	</main>
<?php get_footer(); ?>
