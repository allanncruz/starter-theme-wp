<div>
  <img class="showcase-thumbnail w-100"
       alt="<?php the_title();?>"
       src="<?php the_post_thumbnail_url(); ?>">
  <div class="container position-relative">
    <div class="showcase-legend w-100 d-flex flex-column justify-content-center position-absolute text-center">
      <h2 class="position-relative text-white"><?php the_title(); ?></h2>
      <?php the_content();
        
        $link = get_field('showcase-link');
        if( $link ):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a href="<?php echo esc_url( $link_url ); ?>"
             class="btn btn-light mt-3 mx-auto d-table"
             target="<?php echo esc_attr( $link_target ); ?>"
          >
            <?php echo esc_attr( $link_title ); ?>
          </a>
        <?php endif; ?>
    </div>
  </div>
</div>
