<?php get_header(); ?>
<!-- MAIN -->
<main class="main contenedor">
  <?php
  $paged = (get_query_var('paged') ? get_query_var('paged') : 1);
  if ($paged === 1) :
  ?>
    <section class="noticias-principales">
      <!-- NOTICIA PRINCIPAL -->
      <?php
      $noticia_principal = new WP_Query(array(
        'tag' => 'noticia-principal',
        'post_per_page' => 1
      ));
      if ($noticia_principal->have_posts()) : while ($noticia_principal->have_posts()) : $noticia_principal->the_post();
      ?>
          <a href="<?php the_permalink(); ?>" class="principal">
            <div class="thumb">
              <img src="<?php the_post_thumbnail(); ?>" alt="Noticia" />
            </div>
            <div class="info">
              <h2 class="titulo">
                <?php the_title(); ?>
              </h2>
              <div class="meta">
                <p class="categoria">
                  <?php
                  $categorias = get_the_category();
                  echo $categorias[0]->name;
                  ?>
                </p>
                <span class="fecha">
                  <?php get_the_date(); ?>
                </span>
              </div>
              <div class="extracto">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </a>
        <?php endwhile;
      else: ?>
        <h3>No hay posts para mostrar</h3>
      <?php endif;
      wp_reset_postdata();
      ?>
      <!-- FIN NOTICIA PRINCIPAL -->

      <!-- NOTICIAS DESTACADAS -->
      <div class="noticias-destacadas">
        <?php
        $noticias_destacadas = new WP_Query(array(
          'tag' => 'noticias-destacadas',
          'post_per_page' => 4
        ));
        if ($noticias_destacadas->have_posts()) : while ($noticias_destacadas->have_posts()) : $noticias_destacadas->the_post();
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
                    echo $categorias[0]->name;
                    ?>
                  </p>
                  <span class="fecha"><?php echo get_the_date(); ?></span>
                </div>
              </div>
            </a>
          <?php endwhile;
        else: ?>
          <h3>No hay posts para mostrar</h3>
        <?php endif;
        wp_reset_postdata();
        ?>
      </div>
      <!-- FIN NOTICIAS DESTACADAS -->
    </section>

  <?php endif; ?>
  <!-- GRID -->
  <div class="grid">
    <!-- ÚLTIMAS NOTICIAS -->
    <section class="noticias">
      <h2 class="título-seccion">Últimas Noticias</h2>

      <?php
      $noticias_destacadas_tag_info = get_term_by('slug', 'noticias-destacadas', 'post_tag');
      $noticia_principal_tag_info = get_term_by('slug', 'noticia-principal', 'post_tag');
      $noticias_destacadas_id = ($noticias_destacadas_tag_info ? $noticias_destacadas_tag_info->term_id : null);
      $noticia_principal_id = ($noticia_principal_tag_info ? $noticia_principal_tag_info->term_id : null);

      $ultimas_noticias = new WP_Query(array(
        'tag__not_in' => array($noticias_destacadas_id, $noticia_principal_id),
        'posts_per_page' => 4,
        'paged' => $paged
      ));
      if ($ultimas_noticias->have_posts()) : while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post();
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
        <?php if (get_previous_posts_link(null, $ultimas_noticias->max_num_pages)): ?>
          <a href="<?php echo get_previous_posts_page_link(null, $ultimas_noticias->max_num_pages); ?>" class="boton">Anterior</a>
        <?php else:  ?>
          <button class="boton desactivado">Anterior</button>
        <?php endif; ?>
        <?php if (get_next_posts_link(null, $ultimas_noticias->max_num_pages)): ?>
          <a href="<?php echo get_next_posts_page_link(null, $ultimas_noticias->max_num_pages); ?>" class="boton">Siguiente</a>
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