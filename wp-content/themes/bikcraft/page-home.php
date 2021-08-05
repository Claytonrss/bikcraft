<?php
// Template Name: Home
get_header();

// Mostrar imagens de tamanhos diferentes
$img_id = get_field('background_home_id'); //o sufixo '_id' traz o id da img ao invés do caminho
$bg_medium = wp_get_attachment_image_src($img_id, 'medium')[0];
$bg_large  = wp_get_attachment_image_src($img_id, 'large')[0];
?>

<style>
.introducao {
  background: url('<?= $bg_large ?>') no-repeat center;
  background-size: cover;
}

/*Estilo para smartphone*/
@media only screen and (max-width: 767px) {
  .introducao {
    background: url('<?= $bg_medium ?>') no-repeat center;
    background-size: cover;
  }
}
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="introducao">
  <div class="container">
    <h1><?= get_field('titulo_intro') ?></h1>
    <blockquote class="quote-externo">
      <p><?= get_field('quote_intro') ?></p>
      <cite><?= get_field('citacao_intro') ?></cite>
    </blockquote>
    <a href="/bikcraft/produtos" class=" btn">Orçamento</a>
  </div>
</section>

<section class="produtos container animar">
  <h2 class="subtitulo">Produtos</h2>
  <ul class="produtos_lista">

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?= get_template_directory_uri() ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
      </div>
      <h3>Passeio</h3>
      <p>Muito melhor do que passear pela orla a vidros fechados.</p>
    </li>

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?= get_template_directory_uri() ?>/img/produtos/esporte.png" alt="Bikcraft Esporte">
      </div>
      <h3>Esporte</h3>
      <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
    </li>

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?= get_template_directory_uri() ?>/img/produtos/retro.png" alt="Bikcraft Retrô">
      </div>
      <h3>Retrô</h3>
      <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
    </li>

  </ul>

  <div class="call">
    <p><?= get_field('home_produtos') ?></p>
    <a href="/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
  </div>

</section>
<!-- Fecha Produtos -->


<!-- Inicio Portfolio -->
<?php include(TEMPLATEPATH . '/includes/portfolio.php') ?>
<!-- Fecha Portfolio -->

<!-- Fecha Qualidade -->
<?php include(TEMPLATEPATH . '/includes/qualidade.php') ?>
<!-- Fecha Qualidade -->

<?php endwhile;
endif; ?>

<?php get_footer(); ?>