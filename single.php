<?php get_header(); ?>

    <section class="page-interna">
        <div class="container featurette">

            <div class="row">
                <div class="col-12 col-md-12">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h1 class="title title-default"><?php the_title(); ?></h1>
                        <img onerror="this.style.display='none'" class="img-thumbnail foto-destaque"
                             src="<?php the_post_thumbnail_url(); ?>">
                        <?php the_content(); ?>

                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_google_plus"></a>
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        </div>

                        <script async src="//static.addtoany.com/menu/page.js"></script>


                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>