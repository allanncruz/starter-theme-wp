<?php
/*
Template Name: Search Page
*/
    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area mt-5">
            <div class="text-center">
                <h3 class="sub-title m-0">Resultado da busca para: <b><?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?></h3>
            </div>  
            <div class="blog-seach">
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
            
            <div class="row">
                <?php  
                    while(have_posts()): the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part( 'partials/section', 'news' ); ?>
                        </div>
                        <?php 
                    endwhile; 
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>