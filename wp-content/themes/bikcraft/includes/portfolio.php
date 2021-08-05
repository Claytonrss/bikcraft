<section class="portfolio">
  <div class="container">
    <?php if (is_page('Home')) : ?>
    <h2 class="subtitulo">Portfólio</h2>
    <?php endif; ?>
    <ul class="portfolio_lista rslides_portfolio">
      <?php
      $slides = get_field('slides', get_page_by_title('Portfolio')->ID);

      if (isset($slides) && !empty($slides)) {
        foreach ($slides as $slide) {
          echo "<li>
                    <div class='grid-8'>
                      <img src=\"{$slide['foto-1']}\" alt='\"{$slide['descricao-foto-1']}\"'>
                    </div>
                    <div class='grid-8'>
                      <img src=\"{$slide['foto-2']}\" alt='\"{$slide['descricao-foto-2']}\"'>
                    </div>
                    <div class='grid-16'>
                      <img src=\"{$slide['foto-3']}\" alt='\"{$slide['descricao-foto-3']}\"'>
                    </div>
                  </li>";
        }
      }
      ?>
    </ul>
  </div>
  <?php if (is_page('Home')) : ?>
  <div class="call">
    <p><?= get_field('home_portfolio') ?></p>
    <a href="/bikcraft/portfolio/" class="btn btn-preto">Portfólio</a>
  </div>
  <?php endif; ?>
  </div>
</section>