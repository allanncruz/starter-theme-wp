
        <div class="<?php if ( is_page('blog')) echo "col-md-4"; ?>">

            <div class="card p-3 mx-1 my-4">
                <a href="<?php the_permalink(); ?>">

                    <?php if(get_the_post_thumbnail_url()) { ?>
                    <img
                        class="card-img"
                        src="<?php the_post_thumbnail_url(); ?>"
                        alt="<?php the_title(); ?>"
                    />
                    <?php } else { ?>
                    <img
                        class="card-img img-off"
                        src="<?php bloginfo('template_url'); ?>/dist/img/image/img-none.jpg"
                        alt="<?php the_title(); ?>"
                    />
                    <?php } ?>

                </a>
                <div class="card-body px-4 py-3">
                    <div class="card-body__data mb-3">
                        <?php the_time( get_option( 'date_format' ) ); ?>
                    </div>

                    <span class="card-category mt-3">
                        <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '#', ', ' ); ?>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                    </a>
                </div>
            </div>
        </div>