<?php get_header(); ?>
<!-- MAIN -->
<main class="main contenedor">

    <!-- GRID -->
    <div class="grid single-col">
        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                <!-- ARTÍCULO IZQUIERDA -->
                <article class="articulo">
                    <div class="thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h1 class="titulo">
                        <?php the_title(); ?>
                    </h1>
                    <div class="meta">

                        <p class="fecha"><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="texto">
                        <?php the_content(); ?>
                    </div>
                </article>
                <!-- FIN ARTICULO IZQUIERDA -->
            <?php endwhile;
        else: ?>
            <h3>No hay ningún post</h3>
        <?php endif; ?>

    </div>
    <!-- FIN GRID -->
</main>
<!-- FIN MAIN -->
<?php get_footer(); ?>