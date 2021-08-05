<?php

// Habilitar Menus
add_theme_support('menus');


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


//Controlar o tamanho das imagens no upload do wordpress
function custom_sizes()
{
  add_image_size('large', 1400, 380, true);
  add_image_size('medium', 768, 380, true);
}

add_action('after_setup_theme', 'custom_sizes');


function get_field($key, $page_id = 0)
{
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}


//registrar campos personalizados com o plugin CMB2
add_action('cmb2_admin_init', 'cmb2_fields_paginas_internas');
add_action('cmb2_admin_init', 'cmb2_fields_home');
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_home()
{
  // Adiciona um bloco
  $cmb_1 = new_cmb2_box([
    "id" => 'home_box_1',
    "title" => 'Banner principal',
    "object_types" => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  // Adiciona um campo ao bloco criado
  $cmb_1->add_field([
    'name' => 'Título',
    'id' => 'titulo_intro',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Quote',
    'id' => 'quote_intro',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Citação',
    'id' => 'citacao_intro',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Background',
    'id' => 'background_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);


  // Adiciona um bloco
  $cmb_2 = new_cmb2_box([
    "id" => 'home_box_2',
    "title" => 'Chamadas',
    "object_types" => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $cmb_2->add_field([
    'name' => 'Produtos',
    'id' => 'home_produtos',
    'type' => 'text',
  ]);

  $cmb_2->add_field([
    'name' => 'Portfólio',
    'id' => 'home_portfolio',
    'type' => 'text',
  ]);

  $cmb_2->add_field([
    'name' => 'Sobre',
    'id' => 'home_sobre',
    'type' => 'text',
  ]);
}

function cmb2_fields_sobre()
{

  $cmb = new_cmb2_box([
    "id" => 'sobre__missao_box',
    "title" => 'HISTÓRIA, MISSÃO E VISÃO',
    "object_types" => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ]
  ]);

  $cmb->add_field([
    'name' => 'Conteúdo',
    'id' => 'missao',
    'desc' => 'Texto sobre a história, missão e visão da empresa.',
    'type' => 'wysiwyg',
    'options' => [
      'wpautop' => false
    ]
  ]);


  $cmb->add_field([
    'name' => 'Valores',
    'id' => 'valores',
    'desc' => 'Lista dos Valores da empresa.',
    'type' => 'wysiwyg',
  ]);

  $cmb->add_field([
    'name' => 'Equipe',
    'id' => 'equipe',
    'desc' => 'Foto da equipe. O ideal é que a imagem seja de 930px por 320px.',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);




  $cmb_1 = new_cmb2_box([
    "id" => 'sobre_box',
    "title" => 'Qualidade',
    "object_types" => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ]
  ]);

  $cmb_1->add_field([
    'name' => 'Título',
    'id' => 'titulo_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Logo Bikcraft',
    'id' => 'logo_qualidade',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb_1->add_field([
    'name' => 'Item 1 - Título',
    'id' => 'titulo_item1_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Conteúdo 1 - Título',
    'id' => 'conteudo_item1_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Item 2 - Título',
    'id' => 'titulo_item2_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Conteúdo 2 - Título',
    'id' => 'conteudo_item2_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Item 3 - Título',
    'id' => 'titulo_item3_qualidade',
    'type' => 'text',
  ]);

  $cmb_1->add_field([
    'name' => 'Conteúdo 3 - Título',
    'id' => 'conteudo_item3_qualidade',
    'type' => 'text',
  ]);
}

function cmb2_fields_portfolio()
{

  $cmb = new_cmb2_box([
    'id' => 'portfolio_box_1',
    'title' => 'Depoimentos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-portfolio.php',
    ]
  ]);

  // O campo repetidor é do tipo group
  $depoimentos = $cmb->add_field([
    'name' => 'Depoimentos',
    'id' => 'depoimentos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Depoimento {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ],
  ]);


  $cmb->add_group_field($depoimentos, [
    'name' => 'Autor',
    'id'   => 'quote_autor',
    'desc' => 'Nome do cliente que disse a frase.',
    'type' => 'text'
  ]);

  $cmb->add_group_field($depoimentos, [
    'name' => 'Conteúdo',
    'id'   => 'quote_conteudo',
    'desc' => 'Frase de depoimento do cliente sobre o produto.',
    'type' => 'text'
  ]);




  $cmb2 = new_cmb2_box([
    'id' => 'portfolio_box',
    'title' => 'Slide PortFólio',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-portfolio.php',
    ]
  ]);

  // O campo repetidor é do tipo group
  $slides = $cmb2->add_field([
    'name' => 'Slides',
    'id' => 'slides',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Slide {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ],
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Foto 1',
    'id'   => 'foto-1',
    'desc' => 'Primeira foto menor que fica no topo à esquerda de cada slide',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Descrição Foto 1',
    'id' => 'descricao-foto-1',
    'type' => 'text',
    'desc' => 'Bom para o SEO e acessibilidade',
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Foto 2',
    'id'   => 'foto-2',
    'desc' => 'Segunda foto menor que fica no topo à direita de cada slide',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Descrição Foto 2',
    'id' => 'descricao-foto-2',
    'type' => 'text',
    'desc' => 'Bom para o SEO e acessibilidade',
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Foto 3',
    'id'   => 'foto-3',
    'desc' => 'Foto maior que fica na parte inferior de cada slide',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb2->add_group_field($slides, [
    'name' => 'Descrição Foto 3',
    'id' => 'descricao-foto-3',
    'type' => 'text',
    'desc' => 'Bom para o SEO e acessibilidade',
  ]);
}

function cmb2_fields_paginas_internas()
{

  $cmb2 = new_cmb2_box([
    'id' => 'introducao_box',
    'title' => 'Introdução',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => ['page-contato.php', 'page-portfolio.php', 'page-produtos.php', 'page-sobre.php']
    ]
  ]);

  $cmb2->add_field([
    'name' => 'Título',
    'id' => 'titulo_introducao',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo',
    'id' => 'subtitulo_introducao',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Background',
    'id' => 'bg_introducao',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
}