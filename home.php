
<?php 

    /* Home Template */
    get_header(); 
    
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: zara; font-weight:bold;"><?php the_title(); ?></h4>
                                
                        <div class="w-50"><?php the_post_thumbnail(); ?></div>
                        <p class="card-text post__meta" style="font-family: zara;">
                            Published <?php the_time(get_option('date_format')); ?>
                            by <?php the_author(); ?> • <?php comments_number(); ?>
                        </p>

                        <div style="font-family: zara; font-size: 20px;">
                            <?php the_excerpt();    ?>
                        </div>

                        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Read More</a></p>
                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>

    </div>
</div>

<?php get_footer(); ?>