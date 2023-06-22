<?php /* Template Name: Kontakt Template */
get_header(); ?>

<div class="contact-page">
    <div class="contact-page-copy">
        <h1>Kontaktirajte nas</h1>
        <p>Ako imate bilo kakva pitanja, ili vam je potrebna pomoć. Odgovorićemo vam u što kraćem roku.</p>
    </div>
    <?php echo do_shortcode('[ninja_form id=1]') ?>
</div>

<?php get_footer(); ?>