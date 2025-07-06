<?php get_header(); ?>
<!-- MAIN -->
<main class="main contenedor">
    <!-- GRID -->
    <div class="grid">
        <!-- ÚLTIMAS NOTICIAS -->
        <section class="noticias">
            <h2 class="título-seccion"><?php the_archive_title(); ?></h2>

            <?php
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="card">
                        <div class="thumb">
                            <img src="<?php the_post_thumbnail(); ?>" alt="" />
                        </div>
                        <div class="info">
                            <h3 class="titulo"><?php the_title(); ?></h3>
                            <div class="meta">
                                <p class="categoria">
                                    <?php
                                    $categorias = get_the_category();
                                    $cuenta = 0;
                                    if (!empty($categorias)) {
                                        foreach ($categorias as $categoria) {
                                            echo esc_html($categoria->name);
                                            $cuenta++;
                                            if ($cuenta < count($categorias)) {
                                                echo " - ";
                                            }
                                        }
                                    }
                                    ?>
                                </p>
                                <span class="fecha"><?php echo get_the_date(); ?></span>
                            </div>
                            <p class="extracto">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </a>
                <?php endwhile;
            else: ?>
                <h3>No hay posts para mostrar</h3>
            <?php endif;
            wp_reset_postdata();
            ?>

            <!-- PAGINACIOÓN -->
            <div class="paginacion">
                <?php if (get_previous_posts_link()): ?>
                    <a href="<?php echo get_previous_posts_page_link(); ?>" class="boton">Anterior</a>
                <?php else:  ?>
                    <button class="boton desactivado">Anterior</button>
                <?php endif; ?>
                <?php if (get_next_posts_link()): ?>
                    <a href="<?php echo get_next_posts_page_link(); ?>" class="boton">Siguiente</a>
                <?php else:  ?>
                    <button class="boton desactivado">Siguiente</button>
                <?php endif; ?>

            </div>
            <!-- FIN PAGINACIÓN -->


            <!-- BANNER PUBLICIDAD -->
            <?php dynamic_sidebar('after-posts'); ?>
            <!-- FIN BANNER PUBLICIDAD -->
        </section>
        <!-- FIN ÚLTIMAS NOTICIAS -->
        <?php get_sidebar(); ?>
    </div>
    <!-- FIN GRID -->
</main>
<!-- FIN MAIN -->
<?php get_footer(); ?>