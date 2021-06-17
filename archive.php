
<?php 

/* Archive Template */
get_header(); 

?>

<div class="container">

    <h1 class="CSAll mb-6"> All that for you ! </h1><hr class="hrStyle">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <article class="post">
            <h5>
                <?php the_title(); ?>
            </h5>

            <?php the_post_thumbnail(); ?>

            <p class="post__meta">
                Published <?php the_time( get_option( 'date_format' ) ); ?>
                by <?php the_author(); ?> • <?php comments_number(); ?>
            </p>

            <?php the_excerpt(); ?>

            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary post__link" style=background-color:green>Read More</a></p>

            <hr class="hrStyle">
        </article>
    
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>