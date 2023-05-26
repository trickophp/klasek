<?php 
/**
 * Template for custom taxonomy 'Vrsta'
 */
get_header();
global $post;
?>

<?php

$term_name = get_queried_object()->name;
$term_id = get_queried_object()->term_id;
?>

<div class="fo-menu-hero fo-taxonomy-hero">
    <div class="fo-menu-hero-copy fo-taxonomy-hero-copy">
        <h1><?= $term_name; ?></h1>
    </div>
</div>

<div class="fo-product-card">
<?php
$args = array(
    'post_type' => 'proizvodi',
    'tax_query' => array(
        array(
        'taxonomy' => 'vrsta',
        'field' => 'term_id',
        'terms' => $term_id,
        'posts_per_page' => -1,
         )
      )
    );
    $query = new WP_Query( $args );
?>

    <?php
    if($query->have_posts()):
        while($query->have_posts()): $query->the_post(); ?>
            <h2><?php the_title() ?></h2>
            <img src="<?= get_field('product_image', $post->ID) ?>" alt="Slika proizvoda" width="200" height="200">
            <p class="fo-product-description"><?= fo_get_product_excerpt($post->ID) ?></p>
            <span class="fo-product-price"><?= get_field('product_price', $post->ID) ?> RSD</span>
        <?php endwhile;
    endif;
    ?>
</div>