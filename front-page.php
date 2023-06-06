<?php get_header(); ?>

<div class="main-content">
    <div class="hero">
        <div class="hero-copy">
            <h1>Your Gateway to any Destination in the World</h1>
            <p>In augue ligula, feugiat ut nulla consequat. Ut est lacus, molestie in arcu no, iaculis vehicula ipsum. Nunc faucibus, nisl id dapibus finibus, enim diam interdum nulla, sed laoreet risus lectus. </p>
            <a class="btn-primary" href="#">Svi Proizvodi</a>
        </div>
    </div>

    <div class="benefits">
        <h2>Benefiti</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="benefits-numbers">
            <div class="benefits-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
            <div class="benefits-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
            <div class="benefits-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
        </div>
    </div>

    <div class="categories-products">
        <h2>Kategorije proizvoda</h2>
        <div class="category-boxes">
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/petarde.png" alt="">
                <h3>Petarde</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/vatrometi.png" alt="">
                <h3>Vatrometi</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/rakete.png" alt="">
                <h3>Rakete</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/rimske-svece.png" alt="">
                <h3>Rimske sveće</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/dim.png" alt="">
                <h3>Dim</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/scenska-pirotehnika.png" alt="">
                <h3>Scenska pirotehnika</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/fontane.png" alt="">
                <h3>Fontane</h3>
            </div>
            <div class="category-box">
                <img src="/wp-content/uploads/2023/06/svetleci-stapici.png" alt="">
                <h3>Svetleći štapići</h3>
            </div>
        </div>
        <a class="btn-primary" href="#">Svi Proizvodi</a>
    </div>

    <div class="home-contact">
        <h2>Kontakt</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet magna commodo, tempus dolor sit amet, laoreet elit. Donec mauris tortor.</p>
        <a class="btn-primary" href="">Kontakt</a>
    </div>

    <div class="services">
        <h2>Naše usluge</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="services-numbers">
            <div class="services-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
            <div class="services-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
            <div class="services-number-box">
                <h3>Icon</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo magna et libero.</p>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="about-us-image"><img src="/wp-content/uploads/2023/06/about-us-home-scaled.jpg" alt=""></div>
        <div class="about-us-copy">
            <h2>O nam</h2>
            <p>Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking to further the overall value proposition.  Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking.</p>
            <p>Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking to further the overall value proposition. </p>
            <a class="btn-primary" href="#">Saznaj više</a>
        </div>
    </div>

    <div class="blog-homepage">
        <?php // the query
            $the_query = new WP_Query( array(
                'posts_per_page' => 3,
            )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <div class="hp-blog-posts-wrapper">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="hp-single-post-card">
                    <div class="hp-post-card-image"><?php the_post_thumbnail() ?></div>
                    <div class="hp-post-card-copy">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>