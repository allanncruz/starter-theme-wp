<?php
  /**
   * template name: Home Page
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Started theme wp
   */
  
  get_header();
?>

  <div class="carousel overflow-hidden">
    <div class="carousel-inner owl-carousel banner owl-anima">
      <?php query_posts("post_type=showcase");
        if(have_posts()):
          while(have_posts()):the_post();
            get_template_part( 'components/Showcase/index');
          endwhile; else : { ?>
          <div class="carousel-none">
            <h2>Nenhuma vitrine Adicionada</h2>
          </div>
        <?php }
        endif;
      ?>
    </div>
  </div>

  <main>
    <section class="about text-center py-5">
      <div class="container px-5">
        <?php query_posts("post_type=page&pagename=pagina-exemplo");
          if(have_posts()):
            while(have_posts()):the_post(); ?>
              <h1 class="title"><?php the_title(); ?></h1>
              <?php the_content(); ?>
              <a href="<?php bloginfo("url") ?>/index.php/pagina-exemplo" class="btn btn-primary">Read More</a>
            <?php
            endwhile;
          endif; ?>
      </div>
    </section>

    <section id="cards" class="cards bg-light overflow-hidden py-5">
      <div class="container">
        <div class="text-center">
          <h1 class="title m-0">Cards</h1>
          <h2 class="subtitle">Post type Blog</h2>
        </div>
        <div class="carousel-inner owl-carousel owl-cards">
          <?php query_posts("post_type=blog");
            if(have_posts()):
              while(have_posts()):the_post();
                get_template_part( 'components/Cards/index' );
              endwhile;
            endif; ?>
        </div>
        <a href="<?php bloginfo("url") ?>/index.php/blog/" class="btn btn-outline-primary d-table m-auto">Mais notícias</a>
      </div>
    </section>
  </main>
<?php get_footer();
