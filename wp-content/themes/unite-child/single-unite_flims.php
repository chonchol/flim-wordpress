<?php get_header(); ?>
	
<?php 
	$args = array( 'post_type' => 'unite_flims', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 
?>
	<h3><?php the_title(); ?></h3>
	<div class="entry-content">
			<p><?php the_content(); ?></p>
	</div>
	<p><strong>Country:</strong>
		<?php $terms = get_the_terms( $post->ID, 'country' );
		foreach($terms as $term) { ;?>
		   	<?php echo $term->name.','; ?>
		<?php }; ?>
	</p>
	<p><strong>Genre:</strong>
		<?php $terms = get_the_terms( $post->ID, 'genre' );
		foreach($terms as $term) { ;?>
		   	<?php echo $term->name.','; ?>
		<?php }; ?>
	</p>
	<?php the_meta(); ?>	
	<?php endwhile; ?>

<?php get_footer(); ?>