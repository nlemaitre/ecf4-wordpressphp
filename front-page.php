
<?php 

	/* Front-Page template */
	get_header(); 

?>
<br><br>

<div class="fnews intro text-center">

	<p style="zara; font-size: 30px;">
		Welcome to "The Country Newspaper" ! You will find all news on culture and sport
	</p>

	<h1 style="zara; font-weight:500; font-size: 150px;">First News</h1><br></hr>

</div>

<!-- FIRST NEWS -->

<div class="container pb-3">

	<?php $post = array('posts_per_page' => 1, 'order' => 'DESC'); ?>

	<?php $resp = NEW WP_Query( $post ); ?>

	<div>

		<?php if($resp->have_posts()) : while($resp->have_posts()) : $resp->the_post(); ?>

		<div class="col">
			
				<article class="post">
					<div class="card-body">

						<h4 class="card-title" style="font-family:'Source Serif Pro', serif; font-weight:bold;"><?php the_title(); ?></h4>

						<?php if ( has_post_thumbnail() ) { ?>

						<?php the_post_thumbnail(); ?>

						<p class="card-text post__meta" style="font-family:Arial;">
						Published <?php the_time(get_option('date_format')); ?>
						by <?php the_author(); ?> • <?php comments_number(); ?>
						</p>
						<?php } ?>

						<div style="font-family:'Source Serif Pro', serif; font-size: 18px;"><?php the_excerpt(); ?></div>

						<p><a href="<?php the_permalink(); ?>" class="btn btn-success post__link">Read More</a></p>
					</div>
				</article>
			
		</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); endif; ?>

	</div>
</div>


<!-- POSTS -->

<div class="container content pb-3 mt-5">

	<h2 class="mb-5 text-center">LOOK AT THAT ! Read me, Read me !</h2><hr class="hrStyle">

	<?php $post = array('posts_per_page' => 6, 'order' => 'DESC'); ?>

	<?php $resp = NEW WP_Query( $post ); ?>

		<div class="card mb-3" style="max-width: 100%;">

			<?php if($resp->have_posts()) : while($resp->have_posts()) : $resp->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>

			<div class="row g-0 m-2">

				<div class="col-md-4 p-3">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="col-md-8 mt-3">
					<div class="card-body">

						<h4 class="card-title" style="font-family: zara; font-weight:bold;">
							<?php the_title(); ?>
						</h4>
						
						<p class="card-text post__meta" style="font-family:zara;">
							Published <?php the_time(get_option('date_format')); ?>
							by <?php the_author(); ?>

							<div style="font-family: zara; font-size: 18px;">
								<?php the_excerpt(); ?>
							</div>
						</p>
						<?php } ?>

						<p><a href="<?php the_permalink(); ?>" class="btn btn-outline-success post__link">Read More</a></p>
						
					</div>
				</div><hr class="hrStyle">
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); endif; ?>

		</div>
	</div>

<?php get_footer(); ?>