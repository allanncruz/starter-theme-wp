<?php get_header(); ?>

    <section class="page-interna">
        <div class="container featurette">

            <div class="row">
                <div class="col-12 col-md-12">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h1 class="title title-default"><?php the_title(); ?></h1>
                        <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>"
                             class="img-thumbnail foto-destaque w-100 p-0 shadow mt-2 mb-3 ml-4 rounded-0 float-right">
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>