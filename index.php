<?php get_header(); ?>
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="articles-news js-loader">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'blocks/post_card' );
					the_title(); ?>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php get_template_part( 'includes/not_found' ); ?>
		<?php endif; ?>
	</div>
<?php get_footer();