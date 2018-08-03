<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-light">

<header class="sticky-top">
    <div class="upnavbar py-0 py-lg-1">
        <div class="container">
            <div class="d-flex justify-content-end align-items-center flex-wrap">
                <ul class="upnav-items upnavbar-itenslist-unstyled m-0 py-1">
                    <li class="tel d-none d-lg-inline px-2">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                        <small>(84)</small> <b>00000-0000</b>
                    </li>
                    <li class="tel d-none d-lg-inline px-2">
                        <small>(84)</small> <b>00000-0000</b></li>
                    <li class="d-inline px-2">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand position-relative" href="<?php bloginfo("url") ?>">Logo</a>
            <button class="navbar-toggler outline border-0" type="button" data-toggle="collapse" data-target="#navbar"
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
                    <li class="nav-item"><a class="nav-link" href="<?php bloginfo("url") ?>/?page_id=21">Localização e Contato</a></li>
                    <li class="d-block d-md-none nav-fone text-white mt-1">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                        <small>(84)</small> <b>00000-0000</b>
                    </li>
                    <li class="d-block d-md-none nav-fone text-white mt-1">
                        <small>(84)</small> <b>00000-0000</b></li>
                </ul>
            </div>
        </div>
    </nav>
</header>