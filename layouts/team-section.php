<?php
/**
 * The template for displaying all Parallax Templates.
 *
 * @package accesspress_parallax
 */
?>

	<div class="team-listing clearfix">
	<?php 
		$args = array(
			'cat' => $category,
			'posts_per_page' => -1
			);
		$query = new WP_Query($args);
		if($query->have_posts()): ?>
		<div class="team-tab">
			<!--<div class="team-slider">-->
			<?php 
				$i = 0;
                    while ($query->have_posts()): $query->the_post();
                        $i = $i + 0.25;
                        ?>
				<div class="team-member">
					<div class="team-img">
				<?php if(has_post_thumbnail()) : 
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumbnail');
				?>
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
				<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" alt="<?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<div class="team-detail">
 					<h3><?php the_title(); ?></h3>
 -					<?php the_content(); ?>
 				</div>
 				</div>
			

			<?php
				endwhile;
				wp_reset_postdata(); ?>
			<!--</div>-->
		</div>
		<?php
		endif;
		?>
	</div><!-- #primary -->



