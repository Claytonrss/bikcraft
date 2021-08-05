<?php
// Template Name: Contato
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . '/includes/introducao.php') ?>

<section class="contato container animar-interno">
  <form action="<?= get_template_directory_uri() ?>/enviar.php" method="post" name="form"
    class="formphp contato_form grid-8">
    <label for="nome">Nome</label>
    <input id="nome" name="nome" type="text">
    <label for="email">E-mail</label>
    <input id="email" name="email" type="text">
    <label for="telefone">Telefone</label>
    <input id="telefone" name="telefone" type="text">

    <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
    <input type="text" class="nao-aparece" name="leaveblank">
    <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
    <input type="text" class="nao-aparece" name="dontchange" value="http://">

    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" id="mensagem"></textarea>

    <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
  </form>

  <div class="contato_dados grid-8">
    <h3>Dados</h3>
    <span><?= get_field('telefone') ?></span>
    <span><?= get_field('email') ?></span>
    <span><?= get_field('endereco1') ?></span>
    <span><?= get_field('endereco2') ?></span>
    <h3>Redes Sociais</h3>
    <?php include(TEMPLATEPATH . '/includes/redes-sociais.php') ?>
  </div>
</section>

<section class="container contato_mapa">
  <a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg"
      alt="Endereço da Bikcraft"></a>
</section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>