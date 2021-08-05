<style>
.introducao-interna {
  background: url('<?= get_field('bg_introducao') ?> ?>') no-repeat center;
  background-size: cover;
}
</style>

<section class="introducao-interna">
  <div class="container">
    <h1><?= get_field('titulo_introducao') ?></h1>
    <p><?= get_field('subtitulo_introducao') ?></p>
  </div>
</section>