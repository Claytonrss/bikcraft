<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <meta name="description"
    content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
  <meta property="og:description"
    content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
  <meta property="og:url" content="http://bikcraft.com" />
  <meta property="og:image" content="http://bikcraft.com/<?= get_stylesheet_directory_uri() ?>/img/og-image.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css">
  <script src="js/libs/modernizr.custom.45655.js"></script>
</head>

<body>

  <header class="header">
    <div class="container">
      <a href="/" class="grid-4">
        <img src="<?= get_template_directory_uri() ?>/img/bikcraft.png" alt="Bikcraft">
      </a>
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="/bikcraft/sobre/">Sobre</a></li>
          <li><a href="/bikcraft/produtos/">Produtos</a></li>
          <li><a href="/bikcraft/portfolio/">Portfólio</a></li>
          <li><a href="/bikcraft/contato/">Contato</a></li>
        </ul>
      </nav>
    </div>

    <!-- Inicio do Header Wordpress -->
    <?php wp_head(); ?>
    <!-- Final do Header Wordpress -->
  </header>