<?php 
/* Template Name: Menu Template */ 
get_header();
global $post;
?>

<div class="fo-menu-hero">
    <div class="fo-menu-hero-copy">
        <h1>Meni</h1>
    </div>
</div>

<div class="fo-menu">

    <div class="fo-menu-wrapper">
        <div class="fo-product-card">
            <?php
            // get all cpt 'proizvodi'
            $args = array(
                'post_type' => 'proizvodi',
                'posts_per_page' => -1,
            );
        
            $query = new WP_Query($args);
        
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
    </div>

    <div class="fo-menu-filters">
        <div class="filter-option">
        <span class="filter-label">Category:</span>
        <select id="category-filter">
            <option value="all">All</option>
            <option value="appetizers">Appetizers</option>
            <option value="main-courses">Main Courses</option>
            <option value="desserts">Desserts</option>
            <option value="beverages">Beverages</option>
        </select>
        </div>
        <div class="filter-option">
        <span class="filter-label">Price Range:</span>
        <select id="price-filter">
            <option value="all">All</option>
            <option value="1">$</option>
            <option value="2">$$</option>
            <option value="3">$$$</option>
        </select>
        </div>
    </div>

</div>


<?php get_footer(); ?>
