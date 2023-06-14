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

<div class="fo-menu">

    <div class="fo-menu-filters">
        <div class="filter-option">
            <span class="filter-label">Kategorije</span>
            <input type="checkbox" id="petarde" name="kalibar" class="category-filter">
            <label for="petarde">Petarde</label>
            <input type="checkbox" id="vatrometi" name="kalibar" class="category-filter">
            <label for="vatrometi">Vatrometi</label>
            <input type="checkbox" id="konfete" name="kalibar" class="category-filter">
            <label for="konfete">Konfete</label>
            <input type="checkbox" id="petarde2" name="kalibar" class="category-filter">
            <label for="petarde2">Petarde</label>
        </div>
        <div class="filter-option">
            <span class="filter-label">Kalibar</span>
            <input type="checkbox" id="vatromet9mm" name="kalibar" class="kalibar-filter">
            <label for="vatromet9mm">Vatromet kalibar 9mm</label>
            <input type="checkbox" id="vatromet9mm2" name="kalibar" class="kalibar-filter">
            <label for="vatromet9mm2">Vatromet kalibar 9mm</label>
            <input type="checkbox" id="vatromet9mm3" name="kalibar" class="kalibar-filter">
            <label for="vatromet9mm3">Vatromet kalibar 9mm</label>
            <input type="checkbox" id="vatromet9mm4" name="kalibar" class="kalibar-filter">
            <label for="vatromet9mm4">Vatromet kalibar 9mm</label>
        </div>
    </div>

    <div class="fo-menu-wrapper">
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
        
            if($query->have_posts()):
                while($query->have_posts()): $query->the_post(); ?>
                    <h2><?php the_title() ?></h2>
                    <?php the_post_thumbnail(); ?>
                    <p class="fo-product-description"><?= fo_get_product_excerpt($post->ID) ?></p>
                    <span class="fo-product-price"><?= get_field('product_price', $post->ID) ?> RSD</span>
                <?php endwhile;
            endif;
            ?>
        </div>
    </div>

</div>