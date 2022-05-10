<?php
$estiloPagina = 'sobre_nos.css';
require_once 'header.php';

if (have_posts()):
    ?>
    <main class="main-sobre-nos">
        <?php
        //loop para mostrar o conteúdo da página
        while (have_posts()): the_post();
            //função para mostrar a imagem
            the_post_thumbnail('post-thumbnail',array('class' => 'imagem-sobre-nos'));
            echo '<div class="conteudo container-alura">';
            //funcção para mostrar o título
            the_title('<h2>','</h2>');
            //função para mostrar o conteúdo
            the_content();
            echo'</div>';
        endwhile;
        ?>
    </main>
<?php
endif;
require_once 'footer.php';