<?php 
/**
 * Template for single CPT 'Proizvodi'
 */
get_header();
?>

<?php
    $product_description = get_field('product_description');
    $product_image = get_the_post_thumbnail();
    $product_portion = get_field('product_portion');
    $product_price = get_field('product_price');
    $product_variants = get_field('product_variants');
    $product_extras = get_field('product_extras');
?>

<h1><?php the_title(); ?></h1>
<p><?= $product_description ?></p>
<?= $product_image ?>
<p>Cena: <?= $product_price ?> RSD</p>

<?php get_footer(); ?>