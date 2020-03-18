<?php get_header(); ?>

<?php the_post() ?>

    <section class="wrap">
        <div class="container content-area mt-5">
            <div class="text-center">
                <h3 class="sub-title m-0">Subtitle</h3>
                <h1 class="title"><?php the_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" class="single-thumbnail my-4">
                    <article class="px-md-5 px-2">
                        <?php the_content(); ?>

                        <h3 class="my-5">Lista de categorias seguido de postagens </h3>
                        <?php
                            // Get all the categories
                            $categories = get_terms( 'blog_taxonomy' );

                            // Loop through all the returned terms
                            foreach ( $categories as $category ):

                                // set up a new query for each category, pulling in related posts.
                                $cartes = new WP_Query(
                                    array(
                                        'post_type' => 'blog',
                                        'showposts' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy'  => 'blog_taxonomy',
                                                'terms'     => array( $category->slug ),
                                                'field'     => 'slug'
                                            )
                                        )
                                    )
                                );
                            ?>

                                <div class="category-carte">
                                    <h3 class="category-carte__category text-center mb-3"><?php echo $category->name; ?></h3>
                                    
                                    
                                    <?php while ($cartes->have_posts()) : $cartes->the_post(); ?>
                                        <div class="category-carte__post d-block d-md-flex text-center text-md-left mb-4">
                                            <img class="post_thumbnail" onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <div class="content">
                                                <h6 class="my-1"><?php the_title(); ?></h6>
                                                <p class="m-1"><?php the_field('descricao'); ?></p>
                                                <p class="price m-0"><?php the_field('preco'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                                <hr class="hr-carte">

                            <?php
                                // Reset things, for good measure
                                $cartes = null;
                                wp_reset_postdata();

                            // end the loop
                            endforeach;
                            ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>