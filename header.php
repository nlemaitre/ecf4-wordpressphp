
<!DOCTYPE html>

<html lang="en">

<head>

    <title>Country Newspaper</title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body 

    <?php 
    
    body_class(); 
    
    ?>>

    <?php 
    
    wp_body_open(); 
    
    ?>

    <header class="header">

    <img class="img-fluid mx-auto d-flex" src="<?php echo get_template_directory_uri(); ?>/img/back.jpg" alt="Background of page">
        <div class="justify-content-md-end pt-3"></div>

        <div>
            <a href="<?php echo home_url( '/' ); ?>">
            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="country" style="width:15rem;"></a>
        </div>

        <nav class="navbar">
            <div class="col-md-12">
                <?php wp_nav_menu( array('theme_location' => 'main' )); ?>
            </div>
        </nav>

    </header>

    <?php if ( is_active_sidebar( 'in-header-widget-area' ) ) { ?>

    <aside class="in-header widget-area right" role="complementary">
        <?php dynamic_sidebar( 'in-header-widget-area' ); ?>
    </aside>

<?php }