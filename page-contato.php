<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Started theme wp
 */

    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area">
            <div class="text-center">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <article class="p-md-5 p-2">
                        <?php
                          the_content();
                          get_template_part( 'components/Forms/index' );
                        ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
