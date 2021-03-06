<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap group">

		<div id="main" class="col8 group" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

 

			<?php waterstreet_post_nav(); ?>

			<?php
 			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</div> <?php // end #main ?>

	<?php get_sidebar(); ?>

</div> <?php // end #inner-content ?>

</div> <?php // end #content ?>

<?php get_footer(); ?>
