<?php 
/**
 * Template for single CPT 'Proizvodi'
 */
global $post;
get_header();
?>

<div class="single-proizvod-main">
    <?php
        $product_description = get_field('product_description');
        $product_image = get_the_post_thumbnail();
        $product_portion = get_field('kolicina_baruta');
        $product_class = get_field('klasa_proizvoda');
        $product_serial = get_field('sifra_proizvoda');
    ?>
    <div class="product-summary">
        <div class="product-image">
            <?= $product_image ?>
        </div>
        <div class="product-info">
            <h1><?php the_title(); ?></h1>
            <span class="product_additional_info product_serial"><?= $product_serial ?></span>
            <p class="product-description"><?= $product_description ?></p>
            <span class="product_additional_info product_class">Klasa: <?= $product_class ?></span>
            <div class="product-info-hr"></div>
            <div class="order-product">
                <span class="order-product-text">Poručite proizvod</span>
                <span><a href="tel:+381 65 447 4744">+381 65 447 4744</a></span>
                <span><a href="mailto:pirobox11@gmail.com">pirobox11@gmail.com</a></span>
            </div>
        </div>
    </div>
    <div class="related-products">
        <h2>Preporučujemo za vas</h2>
        <?php 

            $curent_post_terms = wp_get_post_terms($post->ID, 'vrsta');
            $terms_arr = [];
            // get all terms associated to the current single post
            foreach($curent_post_terms as $term):
                $terms_arr[] = $term->name;
            endforeach;

            $args = [
                'post_type' => 'proizvodi',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                      'taxonomy' => 'vrsta',
                      'field' => 'slug',
                      'terms' => $terms_arr[0],
                    )
                  )
            ];

            $query = new WP_Query($args);
            ?>

            <div class="related-products-wrapper">
                <?php
                while($query->have_posts()): $query->the_post();
                    get_template_part( 'template-parts/content', 'product' );
                endwhile;
                ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>