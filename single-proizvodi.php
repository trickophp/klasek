<?php 
/**
 * Template for single CPT 'Proizvodi'
 */
get_header();
?>

<?php
    $product_description = get_field('product_description');
    $product_image = get_field('product_image');
    $product_portion = get_field('product_portion');
    $product_price = get_field('product_price');
    $product_variants = get_field('product_variants');
    $product_extras = get_field('product_extras');
?>

<h1><?php the_title(); ?></h1>
<p><?= $product_description ?></p>
<img src="<?= $product_image ?>" alt="Slika proizvoda" width="400" height="400">
<p>Cena: <?= $product_price ?> RSD</p>

Varijante proizvoda (S,M,L):<br>
<?php foreach($product_variants as $variant): ?>
    
    <input type="radio" name="product_variant" value="<?= $variant['product_size'] ?>"><?= $variant['product_size'] ?>

<?php endforeach; ?>
<br><br>
Dodaci:<br>
<?php foreach($product_extras as $extra): ?>
    
    <input type="checkbox" name="product_extra" value="<?= $extra['extras_name'] ?>"><?= $extra['extras_name'] ?><br>

<?php endforeach; ?>