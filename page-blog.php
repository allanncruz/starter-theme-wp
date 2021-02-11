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
                    $the_query = new WP_Query( array('posts_per_page'=>2,
                        'post_type'=>'blog',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1) );
                        while ($the_query -> have_posts()) : $the_query -> the_post();
                            get_template_part( 'components/Cards/index' );

                        endwhile;
                ?>
            </div>
            <div class="text-center my-5">
                <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $the_query->max_num_pages
                    ) );

                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
