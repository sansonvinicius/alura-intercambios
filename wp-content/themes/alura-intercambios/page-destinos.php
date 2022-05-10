<?php
$estiloPagina = 'destinos.css';
require_once 'header.php';
?>
<!--Form para buscar o post por país -->
<form action="#" class="container-alura formulario-pesquisa-paises">
    <h2>Conheça nossos destinos</h2>
    <select name="paises" id="paises">
        <option value="">--Selecione--</option>
        <?php
            $paises = get_terms(array('taxonomy' => 'paises'));
            foreach ($paises as $pais):?>
                <option value="<?= $pais->name ?>"
                <?= !empty($_GET['paises']) && $_GET['paises'] === $pais->name ? 'selected' : '' ?>><?= $pais->name ?></option>
            <?php endforeach;
        ?>
    </select>
    <input type="submit" value="Pesquisar">
</form>
<?php
//query para buscar os posts customizados relacionados a destinos
if(!empty($_GET['paises'])) {
    $paisSelecionado = array(array(
        'taxonomy' => 'paises',
        'field' => 'name',
        'terms' => $_GET['paises']
    ));
}

$args = array(
    'post_type' => 'destinos',
    'tax_query' => !empty($_GET['paises']) ? $paisSelecionado : ''
);
$query = new WP_Query($args);

//verifica se tem conteúdo para montar a página
if ($query->have_posts()):
    echo '<main class="page-destinos">';
    echo '<ul class="lista-destinos container-alura">';
    //loop para mostrar o conteúdo da página
    while($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 destinos" >';
        //função para mostrar a imagem
        the_post_thumbnail();
         //funcção para mostrar o título
        the_title('<p class="titulo-destino">','</p>');
         //funcção para mostrar o conteúdo
        the_content();
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';