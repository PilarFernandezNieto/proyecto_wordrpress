<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/normalize.css'); ?>" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/estilos.css'); ?>" />
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script src="<?php echo get_theme_file_uri('js/script.js') ?>" defer></script>
    <title><?php echo get_bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="logo">
            <a href="index.html">
                <img src="<?php echo get_theme_file_uri('assets/logo.svg'); ?>" alt=" Logo de Vision Blog" />
            </a>
            <button type="button" class="btn-menu" id="btn-menu">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="icono"
                    viewBox="0 0 16 16">
                    <path
                        fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
                <span>Categorías</span>
            </button>
        </div>
        <div class="contenedor-navbar" id="contenedor-navbar">
            <ul class="navbar">
                <li><a href="#">Actualidad</a></li>
                <li><a href="#">Internacional</a></li>
                <li><a href="#">Economía</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Salud</a></li>
                <li><a href="#">Ciencia</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Entretenimiento</a></li>
                <li><a href="#">Medio Ambiente</a></li>
                <li><a href="#">Educación</a></li>
            </ul>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="cierra-menu"
                viewBox="0 0 16 16">
                <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
    </header>
    <!-- FIN HEADER -->