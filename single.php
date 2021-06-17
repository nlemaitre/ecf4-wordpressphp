
<?php 

/* Redirection template */
get_header(); 

?>

<div class="container mb-3">

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="d-flex">

      <div class="mb-5">
        <?php the_post_thumbnail('art'); ?>
      </div>

      <div class="d-flex flex-column">

        <h1 class="m-3" style="font-family: zara; font-weight:bold;"><?php the_title(); ?></h1>

        <div class="post__meta d-flex m-3">

          <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>

          <div>
            <p class="p-3">
              Published <?php the_date(); ?>
              by <?php the_author(); ?>
              <?php the_category(); ?> <br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="post__content" style="font-family: zara; font-size:23px">
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>