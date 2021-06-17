<?php 
/*
* Template Name: culture
*/
?>

<?php 

/* Culture Template */
get_header(); 

?>

<div class="container p-3 mb-3">

    <h2 class="CSAll">Culture to you !</h2><hr class="hrStyle">
    <?php $post = array('category_name' => 'culture', 'order' => 'DESC'); ?>
    <?php $resp = new WP_Query( $post ); ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php if ($resp->have_posts()) : while ($resp->have_posts()) : $resp->the_post(); ?>

            <div class="col">
                <div class="card h-100">
                
                    <div class="card-body">

                        <h4 class="card-title" style="font-family:'Source Serif Pro', serif; font-weight:bold;">
                            <?php the_title(); ?>
                        </h4>

                        <div class="w-50"><?php the_post_thumbnail(); ?></div>

                            <p class="card-text post__meta" style="font-family:Arial;">
                                Published <?php the_time(get_option('date_format')); ?>
                                by <?php the_author(); ?>
                            </p>

                            <div style="font-family:'Source Serif Pro', serif; font-size: 18px;">
                                <?php the_excerpt();?>
                            </div>

                            <p><a href="<?php the_permalink(); ?>" class="btn btn-success post__link">Read More</a></p>
                        </div>
                    </div>
                </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>