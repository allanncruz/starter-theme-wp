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
                <h3 class="sub-title m-0">Subtitle</h3>
                <h1 class="title"><?php the_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <img
                        onerror="this.style.display='none'"
                        src="<?php the_post_thumbnail_url(); ?>"
                        class="single-thumbnail my-4"
                        alt="<?php the_title(); ?>"
                    >
                    <article class="px-md-5 px-2">
                        <?php 
                        the_content();
                        the_excerpt(); 

                        ?>

                        <hr>
                        <?php
                        $relationship = get_field('showcase-relationship');
                        if( $relationship ): ?>
                        <small>Post relacionado</small>
                            <?php foreach( $relationship as $post): ?>
                                <?php get_template_part( 'template-parts/section', 'news' ); ?>
                            <?php endforeach;
                            wp_reset_postdata();
                        endif; ?>

                        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_whatsapp"></a>
                            </div>

                            <script async src="//static.addtoany.com/menu/page.js"></script>

                            <a class="btn btn-primary mt-5" href="javascript:history.back()">
                                <i class="glyphicon glyphicon-chevron-left"></i> « Voltar
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>