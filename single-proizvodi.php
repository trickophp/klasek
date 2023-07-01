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
        $product_packing = get_field('pakovanje');
        $product_carton_weight = get_field('tezina_kartona');
        $product_effect_description = get_field('opis_efekta');
        $product_effect_duration = get_field('trajanje_efekta');
        $product_video_embed = get_field('product_video_embed');
        $product_video_media = get_field('product_video_media');
    ?>
    <div class="product-summary">
        <div class="product-image">
            <?= $product_image ?>
        </div>
        <div class="product-info">
            <h1><?php the_title(); ?></h1>
            <?php if(!empty($product_serial)): ?><span class="product_additional_info product_serial">Kataloški broj: <?= $product_serial ?></span><?php endif; ?>
            <?php if(!empty($product_description)): ?><p class="product-description"><?= $product_description ?></p><?php endif; ?>
            <?php if(!empty($product_class)): ?><span class="product_additional_info product_class">Klasa: <?= $product_class ?></span><?php endif; ?>
            <?php if(!empty($product_packing)): ?><span class="product_additional_info product_packing">Pakovanje: <?= $product_packing ?></span><?php endif; ?>
            <span class="product_additional_info product_packing">CE Sertifikovano</span>
            <?php if(!empty($product_carton_weight)): ?><span class="product_additional_info product_carton_weight">Težina kartona: <?= $product_carton_weight ?></span><?php endif; ?>
            <?php if(!empty($product_effect_description)): ?><span class="product_additional_info product_effect_description">Opis efekta: <?= $product_effect_description ?></span><?php endif; ?>
            <?php if(!empty($product_effect_duration)): ?><span class="product_additional_info product_effect_description">Trajanje efekta: <?= $product_effect_duration ?></span><?php endif; ?>
            <div class="product-info-hr"></div>
            <div class="order-product">
                <span class="order-product-text">Poručite proizvod</span>
                <span><a href="tel:+381 65 447 4744">+381 65 447 4744</a></span>
                <span><a href="mailto:pirobox11@gmail.com">pirobox11@gmail.com</a></span>
            </div>
        </div>
    </div>
    <div class="product-video">
        <div class="product-video-wrapper">
            <?php
            if(!empty($product_video_embed)):
                echo $product_video_embed;
            endif;

            if(!empty($product_video_media)): ?>
                <video controls>
                    <source src="<?= $product_video_media ?>" type="video/mp4">
                </video>
            <?php endif; ?>
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