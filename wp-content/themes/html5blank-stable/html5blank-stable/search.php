<?php get_header(); ?>

	<main role="main">
		<!-- section -->
       <div class="blogPage">
                <div class="blogTitle">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        </div>
           <section>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
           </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
