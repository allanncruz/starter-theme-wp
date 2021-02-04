<?php

// template name: Home Page

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Started theme wp
 */

get_header();
?>

    <div class="carousel overflow-hidden">
        <div class="carousel-inner owl-carousel banner owl-anima">
            <?php
            $anima = new WP_Query(array( 'post_type' => 'animacao' ));
            if ($anima->have_posts()):
                while ($anima->have_posts()): $anima->the_post();

                get_template_part( 'components/Showcase/index');

                endwhile; else : { ?>
                <div class="carousel-none">
                    <h2>Nenhuma vitrine Adicionada</h2>
                </div>
                <?php }
            endif;
            ?>
        </div>
    </div>

    <main>
        <section class="company py-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <?php
                    $about = new WP_Query(array(
                        'post_type' => 'page',
                        'pagename' => 'pagina-exemplo'
                    ));
                    if($about->have_posts()): ?>
                        <?php while($about->have_posts()): $about->the_post(); ?>
                        <div class="col-md-10">
                            <h1 class="company--title title"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <a href="<?php bloginfo("url") ?>/index.php/pagina-exemplo" class="btn btn-primary">Read More</a>
                        </div>
                        <!-- <div class="col-md-5 order-first order-md-2">
                            <img
                                class="img-thumbnail w-100 img-none"
                                src="<?php //the_post_thumbnail_url(); ?>"
                                alt="<?php //the_title(); ?>"
                            />
                        </div> -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="cards" class="cards overflow-hidden py-5">
            <div class="container">
                <h1 class="text-center">Cards</h1>

                <!-- News -->
                <div class="carousel-inner owl-carousel owl-cards">
                <?php
                    $blog = new WP_Query(array( 'post_type' => 'blog' ));
                    if ($blog->have_posts()):
                    while ($blog->have_posts()): $blog->the_post(); ?>
                        <?php get_template_part( 'components/Cards/index' ); ?>
                    <?php endwhile; endif; ?>
                </div>
                <a href="<?php bloginfo("url") ?>/index.php/blog/" class="btn btn-outline-primary d-table m-auto">Mais notícias</a>
            </div>
        </section>
    </main>
<?php get_footer();
