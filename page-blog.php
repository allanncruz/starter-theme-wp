<?php
    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area mt-5">
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
                        <?php the_content(); ?>
                    </article>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php
                            $the_query = new WP_Query( array('posts_per_page'=>2,
                                'post_type'=>'blog',
                                'paged' => get_query_var('paged') ? get_query_var('paged') : 1) );  
                                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                                    get_template_part( 'partials/section', 'news' ); 
                                    
                                endwhile;  
                        ?>
                    </div>
                        <div class="text-center mt-5">
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
            </div>
        </div>
    </section>

<?php get_footer(); ?>