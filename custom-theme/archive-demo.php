<?php 
get_header(); 
while (have_posts() ) : the_post(); ?>
	<div class="container">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a><br>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php get_footer();?>