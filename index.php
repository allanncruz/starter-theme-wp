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
                            <div class="container position-relative">
                                <div class="legenda textshadow">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
        </div>
    </section>

    <section class="company">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 cont">
                    <?php $args = [ "post_type" => "page", "pagename" => "docs" ];
                    $docs = new WP_Query($args);if($docs->have_posts()):
                        while($docs->have_posts()): $docs->the_post(); ?>
                            <h1 class="title"><?php the_title(); ?></h1>
                            <?php the_field('chamada_da_home'); ?>
                            <a href="<?php bloginfo("url") ?>/index.php/docs/" class="btn btn-default">Saiba Mais</a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-12 col-md-5">
                    <img class="foto-destaque" src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>