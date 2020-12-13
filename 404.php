<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Started theme wp
 */
    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area">
            <div class="text-center">
                <h1 class="title">Página não encontrada!</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <article class="p-md-5 p-2">
                    <p class="text-center">O caminho para o conteúdo que você deseja acessar está errado ou a página pode ter sido excluída
.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
