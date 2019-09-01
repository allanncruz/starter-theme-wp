<?php
//Template Name: Home
    get_header(); ?>

    <section class="carousel">
        <div class="carousel-inner owl-carousel banner owl-anima">
            <!-- Starting the custom carousel loop post-->
            <?php
            $anima = new WP_Query(array( 'post_type' => 'animacao' ));
            if ($anima->have_posts()):
                while ($anima->have_posts()): $anima->the_post(); ?>
                    <div>
                        <img class="carousel-thumbnail"
                             alt="<?php the_title();?>"
                             src="<?php the_post_thumbnail_url(); ?>">
                        <div class="container position-relative">
                            <div class="carousel-legend position-absolute">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <div class="btns">
                                    <a href="#" class="btn btn-primary">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            <!-- Finish carousel loop-->
        </div>
    </section>

    <section class="company py-5">
        <div class="container">
            <div class="content-box bg-white p-5 shadow-sm">
                <div class="row">
                    <?php
                    $about = new WP_Query(array(
                        'post_type' => 'page',
                        'pagename' => 'pagina-exemplo'
                    ));

                    if($about->have_posts()):
                        ?>

                        <?php while($about->have_posts()): $about->the_post(); ?>
                        <div class="col-md-7">

                            <h1 class="display-4"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <a href="<?php bloginfo("url") ?>/about" class="btn btn-primary">Read More</a>

                        </div>
                        <div class="col-md-5 order-first order-md-2">
                            <img class="company-thumbnail w-100" src="<?php the_post_thumbnail_url(); ?>">
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services bg-white py-5">
        <div class="container">

            <h1 class="text-center">Services</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>