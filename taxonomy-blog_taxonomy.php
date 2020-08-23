<?php get_header(); ?>



    <section class="page">
        <div class="container page-area">
            <div class="text-center">
                <h1 class="title"><?php single_term_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <article class="px-md-5 px-2">
                        <?php the_content(); ?>
                    </article>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php  while(have_posts()): the_post(); ?>
                                <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="cards-item mx-1">
                                        <div class="">
                                            <?php if(get_the_post_thumbnail_url()) { ?>
                                                <img
                                                    class="cards-item__image w-100"
                                                    src="<?php the_post_thumbnail_url(); ?>"
                                                    alt="<?php the_title(); ?>"
                                                />
                                                <?php } else { ?>
                                                <img
                                                    class="cards-item__image w-100 img-off"
                                                    src="<?php bloginfo('template_url'); ?>/dist/img/image/img-none.jpg"
                                                    alt="<?php the_title(); ?>"
                                                />
                                            <?php } ?>
                                        </div>
                                        <div class="cards-item__legend px-4 py-3">
                                            <div class="cards-item__data text-white">
                                                <?php the_time( get_option( 'date_format' ) ); ?>
                                            </div>
                                            <span class="card-category mt-3">
                                                <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '#', ', ' ); ?>
                                            </span>
                                            <h5 class="cards-item__title"><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>