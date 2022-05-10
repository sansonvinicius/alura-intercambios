<?php
$estiloPagina = 'home.css';
require_once 'header.php';
//Query para buscar os posts customizados relacionados aos banners da Home
$args = array(
        'post_type' => 'banners',
        'post_status' => 'publish',
        'posts_per_page' => 1
);

$query = new WP_Query($args);

//verifica se tem conteúdo para montar a página
if($query->have_posts()):
    //loop para mostrar o conteúdo da página
    while($query->have_posts()): $query->the_post();
    ?>
    <main>
        <div class="imagem-banner">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="texto-banner-dinamico">
            <span id="texto-banner"></span>
        </div>
    </main>
    <?php
    endwhile;
endif;
require_once 'footer.php';