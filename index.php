<?php get_header(); ?>
<!-- MAIN -->
<main class="main contenedor">
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
  <!-- GRID -->
  <div class="grid">
    <!-- NOTICIAS IZQUIERDA -->
    <section class="noticias">
      <h2 class="título-seccion">Últimas Noticias</h2>
      <a href="single.html" class="card">
        <div class="thumb">
          <img src="./assets/img/5.png" alt="" />
        </div>
        <div class="info">
          <h3 class="titulo">Sección de últimas noticias</h3>
          <div class="meta">
            <p class="categoria">Cultura</p>
            <span class="fecha">2 de Junio de 2025</span>
          </div>
          <p class="extracto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam animi expedita atque deserunt non consequatur?
          </p>
        </div>
      </a>
      <a href="single.html" class="card">
        <div class="thumb">
          <img src="./assets/img/6.png" alt="" />
        </div>
        <div class="info">
          <h3 class="titulo">Sección de últimas noticias</h3>
          <div class="meta">
            <p class="categoria">Cultura</p>
            <span class="fecha">2 de Junio de 2025</span>
          </div>
          <p class="extracto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam animi expedita atque deserunt non consequatur?
          </p>
        </div>
      </a>
      <a href="single.html" class="card">
        <div class="thumb">
          <img src="./assets/img/7.png" alt="" />
        </div>
        <div class="info">
          <h3 class="titulo">Sección de últimas noticias</h3>
          <div class="meta">
            <p class="categoria">Cultura</p>
            <span class="fecha">2 de Junio de 2025</span>
          </div>
          <p class="extracto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam animi expedita atque deserunt non consequatur?
          </p>
        </div>
      </a>
      <a href="single.html" class="card">
        <div class="thumb">
          <img src="./assets/img/8.png" alt="" />
        </div>
        <div class="info">
          <h3 class="titulo">Sección de últimas noticias</h3>
          <div class="meta">
            <p class="categoria">Cultura</p>
            <span class="fecha">2 de Junio de 2025</span>
          </div>
          <p class="extracto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam animi expedita atque deserunt non consequatur?
          </p>
        </div>
      </a>
      <div class="paginacion">
        <a href="#" class="boton desactivado">Anterior</a>
        <a href="#" class="boton">Siguiente</a>
      </div>
      <div class="anuncios">
        <a href="#" class="anuncio">
          <img src="./assets/img/banner.png" alt="" />
          <p class="leyenda">Publicidad</p>
        </a>
      </div>
    </section>
    <!-- FIN NOTICIAS IZQUIERDA -->
    <?php get_sidebar(); ?>
  </div>
  <!-- FIN GRID -->
</main>
<!-- FIN MAIN -->
<?php get_footer(); ?>