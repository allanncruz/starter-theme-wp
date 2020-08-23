<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Started theme wp
 */

/*
Template Name: Search Page
*/
    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area mt-5">
            <div class="text-center">
                <h3 class="sub-title">Resultado da busca para: <b><?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?></h3>
                <div class="page-seach w-50 m-auto">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
                        <div>
                            <label class="screen-reader-text" for="s">Pesquisar por:</label>
                            <input type="text" value="" placeholder="Pesquisar" name="s" id="s">
                            <button type="submit" id="searchsubmit" class="border-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="row">
                <?php  
                    while(have_posts()): the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part( 'template-parts/section', 'news' ); ?>
                        </div>
                        <?php 
                    endwhile; 
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>