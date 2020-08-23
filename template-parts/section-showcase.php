<div>
    <img class="carousel-thumbnail w-100"
            alt="<?php the_title();?>"
            src="<?php the_post_thumbnail_url(); ?>">
    <div class="container position-relative">
        <div class="carousel-legend w-100 d-flex flex-column justify-content-center p-md-5 p-3 position-absolute text-center">
            <h2 class="position-relative text-white"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="w-100 d-block d-md-flex justify-content-center mt-0 mt-md-5">
                <?php
                $link2 = get_field('vitrine-btn-primary');
                if( $link2 ):
                    $link2_url = $link2['url'];
                    $link2_title = $link2['title'];
                    $link2_target = $link2['target'] ? $link2['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link2_url ); ?>" class="btn btn-outline-light mt-3 mr-md-3 mr-0"  target="<?php echo esc_attr( $link2_target ); ?>">
                        <?php echo esc_attr( $link2_title ); ?>
                    </a>
                <?php endif; ?>
                <?php
                $link = get_field('vitrine-btn-secondary');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-light mt-3"  target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo esc_attr( $link_title ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>