<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <a href="<?php echo get_site_url(); ?>"><div class="header-logo"></div></a>
            <nav class="header-con">
                <ul>
                  <li><a href="<?php echo get_site_url(); ?>">Početna</a></li>
                    <li class="h-about"><a href="/o-nama/">O nama</a></li>
                    <li class="h-projects"><a href="/proizvodi/">Proizvodi</a></li>
                    <li class="h-community"><a href="/kontakt/">Kontakt</a></li>
                </ul>
            </nav>
            
            <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
            <div style="display: none;" id="hamburger">
                <div class="burger burger-squeeze">
                    <div class="burger-lines"></div>
                </div>
            </div>

            <!-- Mobile Navigation -- toggles on hamburger click -->
            <div class="nav-mobile-modal">
                <nav>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>">Početna</a></li>
                        <li class="h-about"><a href="/o-nama/">O nama</a></li>
                        <li class="h-projects"><a href="/proizvodi/">Proizvodi</a></li>
                        <li class="h-community"><a href="/kontakt/">Kontakt</a></li>
                        <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>