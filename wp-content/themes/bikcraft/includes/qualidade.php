<?php
$sobre_ID = get_page_by_title('Sobre')->ID;
?>
<section class="qualidade container">
  <h2 class="subtitulo"><?= get_field('titulo_qualidade', $sobre_ID) ?></h2>
  <img src="<?= get_field('logo_qualidade', $sobre_ID) ?>" alt="Bikcraft">
  <ul class="qualidade_lista">
    <li class="grid-1-3">
      <h3><?= get_field('titulo_item1_qualidade', $sobre_ID) ?></h3>
      <p><?= get_field('conteudo_item1_qualidade', $sobre_ID) ?></p>
    </li>
    <li class="grid-1-3">
      <h3><?= get_field('titulo_item2_qualidade', $sobre_ID) ?></h3>
      <p><?= get_field('conteudo_item2_qualidade', $sobre_ID) ?></p>
    </li>
    <li class="grid-1-3">
      <h3><?= get_field('titulo_item3_qualidade', $sobre_ID) ?></h3>
      <p><?= get_field('conteudo_item3_qualidade', $sobre_ID) ?></p>
    </li>
  </ul>
  <?php if (is_page('Home')) : ?>
  <div class="call">
    <p><?= get_field('home_sobre', $sobre_ID) ?></p>
    <a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
  </div>
  <?php endif; ?>
</section>