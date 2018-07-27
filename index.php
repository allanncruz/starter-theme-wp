<?php
//Template Name: Home
    get_header(); ?>

    <section class="area-banner">
        <div class="carousel-inner owl-carousel banner owl-anima">
            <?php $args = [ "post_type" => "animacao" ];
            $Animacao = new WP_Query($args);if($Animacao->have_posts()):
                while($Animacao->have_posts()): $Animacao->the_post(); ?>
                    <a href="<?php the_field('link') ?>">
                        <div class=" bg-default item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="container h-100 d-flex align-items-center position-relative">
                                <div class="row w-100">
                                    <div class="legenda col-md-4 text-center text-md-left">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section class="company py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php $args = [ "post_type" => "page", "pagename" => "projeto" ];
                    $projeto = new WP_Query($args);if($projeto->have_posts()):
                        while($projeto->have_posts()): $projeto->the_post(); ?>
                            <h1 class="title"><?php the_title(); ?></h1>
                            <?php the_field('chamada'); ?>
                            <a href="<?php bloginfo("url") ?>/projeto" class="btn btn-default">Saiba Mais</a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-md-5">
                    <img class="photo-highlight w-100 mt-2" src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>