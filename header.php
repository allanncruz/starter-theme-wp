<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header class="sticky-top">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand position-relative" href="<?php bloginfo("url") ?>">Logo</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php bloginfo("url") ?>/?page_id=11">Projeto</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sub Menu
                        </a>
                        <ul class="dropdown-menu text-center p-0">
                            <li class="cat-item cat-item-3 py-1 "><a href="#">Sub Item </a></li>
                        </ul>
                    </li>
                    <li class="d-block d-lg-none nav-fone">
                        <i class="fas fa-phone fa-flip-horizontal"></i><span class="prefixo">(84)</span> <b>00000-0000</b>
                    </li>
                    <li class="d-block d-lg-none nav-fone"><span class="prefixo">(84)</span> <b>00000-0000</b></li>
                </ul>
            </div>
        </div>
    </nav>
</header>