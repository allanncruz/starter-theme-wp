
        <div class="<?php if ( is_page('blog')) echo "col-md-4"; ?>">

                <div class="cards-item p-3 mx-1 bg-white">
                    <a href="<?php the_permalink(); ?>">
                        <img
                            class="cards-item__image"
                            onerror="this.style.display='none'"
                            src="<?php the_post_thumbnail_url(); ?>"
                        />
                    </a>
                    <div class="cards-item__legend px-4 py-3">
                        <div class="cards-item__data text-white">
                            <?php the_time( get_option( 'date_format' ) ); ?>
                        </div>

                        <span class="card-category mt-3">
                            <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '#', ', ' ); ?>
                        </span>
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="cards-item__title"><?php the_title(); ?></h5>
                        </a>
                    </div>
                </div>
            </a>
        </div>