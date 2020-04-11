<?php
    $blog = new WP_Query(array( 'post_type' => 'blog' ));
    if ($blog->have_posts()):
        while ($blog->have_posts()): $blog->the_post(); ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <div class="cards-item mx-1">
                    <div class="">
                        <img class="cards-item__image" onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" />
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
    <?php endwhile; endif; ?>