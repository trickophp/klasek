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
<div class="inner-page-menu">
    <div class="fo-menu-hero fo-taxonomy-hero">
        <div class="fo-menu-hero-copy fo-taxonomy-hero-copy">
            <h1><?= $term_name; ?></h1>
        </div>
    </div>

    <div class="fo-menu">
        <div class="fo-menu-filters">
            <div class="filter-option">
                <span class="filter-label">Kategorije <img class="filter-dropdown-arrow filter-dropdown-arrow-active" src="/wp-content/uploads/2023/06/arrow-down.webp" alt="Arrow down" width="15" height="10"></span>
                <div class="category-filter-wrapper category-filter-wrapper-active">
                    <?php 
                        $terms = get_terms('vrsta');
                        foreach($terms as $term): ?>
                        
                        <input type="checkbox" id="<?= $term->slug ?>" data-catname="<?= $term->slug ?>" name="category" class="product-filter category-filter" <?= ($term_name == $term->name) ? "checked" : ''; ?>>
                        <label for="<?= $term->slug ?>"><?= $term->name ?></label>

                    <?php endforeach; ?>
                </div>
            </div>
            <!-- <div class="filter-option">
                <span class="filter-label">Kalibar</span>
                <input type="checkbox" id="vatromet9mm" name="kalibar" class="product-filter kalibar-filter">
                <label for="vatromet9mm">Vatromet kalibar 9mm</label>
                <input type="checkbox" id="vatromet9mm2" name="kalibar" class="product-filter kalibar-filter">
                <label for="vatromet9mm2">Vatromet kalibar 9mm</label>
                <input type="checkbox" id="vatromet9mm3" name="kalibar" class="product-filter kalibar-filter">
                <label for="vatromet9mm3">Vatromet kalibar 9mm</label>
                <input type="checkbox" id="vatromet9mm4" name="kalibar" class="product-filter kalibar-filter">
                <label for="vatromet9mm4">Vatromet kalibar 9mm</label>
            </div> -->
        </div>

        <div class="fo-menu-wrapper">
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
                        <?php get_template_part( 'template-parts/content', 'product' ); ?>
                    <?php endwhile;
                endif;
                ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>