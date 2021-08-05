<?php
// Template Name: Portfolio
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . '/includes/introducao.php') ?>

<section class="container animar-interno">
  <ul class="rslides">
    <?php
        $depoimentos = get_field('depoimentos');
        if (isset($depoimentos) && !empty($depoimentos)) {
          foreach ($depoimentos as $depoimento) {
            echo "<li>
                  <blockquote class=\"quote_clientes\">
                    <p>\"{$depoimento['quote_conteudo']}\"</p>
                    <cite>{$depoimento['quote_autor']}</cite>
                  </blockquote>
                </li>";
          }
        }
        ?>
  </ul>
</section>


<?php include(TEMPLATEPATH . '/includes/portfolio.php') ?>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>