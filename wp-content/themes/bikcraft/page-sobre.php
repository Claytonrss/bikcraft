<?php
// Template Name: Sobre
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . '/includes/introducao.php') ?>

<section class="missao_sobre container animar-interno">
  <div class="grid-10">
    <h2 class="subtitulo-interno">História, Missão e Visão</h2>
    <p><?= get_field('missao') ?></p>
  </div>
  <div class="grid-6">
    <h2 class="subtitulo-interno">Valores</h2>
    <?= get_field('valores') ?>
  </div>

  <div class="grid-16 foto-equipe">
    <img src="<?= get_field('equipe') ?>" alt="Equipe Bikcraft">
  </div>

</section>

<?php include(TEMPLATEPATH . '/includes/qualidade.php') ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>