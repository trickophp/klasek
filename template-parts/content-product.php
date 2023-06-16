<a href="<?= get_permalink() ?>">
    <div class="fo-product-card">
        <p class="fo-product-card-title"><?php the_title() ?></p>
        <?php the_post_thumbnail(); ?>
        <p class="fo-product-description"><?= fo_get_product_excerpt($post->ID) ?></p>
        <span class="fo-product-serial-number">Šifra: <?= get_field('sifra_proizvoda', $post->ID) ?></span>
    </div>
</a>