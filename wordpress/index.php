<?php get_header(); ?>
      <section class="section-1">
        <section class="section-1__info">
          <h1 class="section-1__h1">Travel Poker<br>всюду с тобой</h1>
          <p class="section-1__p">Играй в покер без ограничений</p>
          <div class="section-1__button-box">
            <a class="section-1__buy-button">Заказать</a>
            <a class="section-1__video-button">
              <img src="<?= get_template_directory_uri(); ?>/img/play.svg">
            </a>
            <a class="section-1__a">Узнать больше</a>
          </div>
        </section>
        <section class="section-1__images">
          <!--TODO: Изображения отдельными блоками-->
          <img class="section-1__image" src="<?= get_template_directory_uri(); ?>/img/section-1.png">
        </section>
      </section>
      <section class="section-2">
        <section class="section-2__info">
          <h1 class="section-2__h1">Travel Poker — компактный<br>покерный набор, с которым<br>легко быть в движении</h1>
          <p class="section-2__p">Компактнее обычного набора в 8 раз! Полноценный покерный набор для большой компании.</p>
        </section>
        <section class="section-2__images">
          <!--TODO: Изображения отдельными блоками-->
          <img class="section-2__image" src="<?= get_template_directory_uri(); ?>/img/section-2.png">
        </section>
      </section>
      <section class="products">
        <div class="products__header">
          <h1 class="products__h1">Найди свой набор Travel Poker</h1>
          <span class="products__span">Посмотреть на <a class="products__a">Kickstarter⟶</a></span>
        </div>
        <div class="products__grid">
          <?php 
            $posts = get_posts(); 
            foreach($posts as $post): ?>
              <div class="product">
                <figure class="product__info">
                  <img class="product__image" src=<?= get_the_post_thumbnail_url($post->ID) ?>>
                  <figcaption class="product__name"><?= $post->post_title?></figcaption>
                  <figcaption class="product__description"><?= $post->post_excerpt ?></figcaption>
                </figure>
                <div class="product__buy-box">
                  <span class="product__price">$250</span>
                  <a class="product__buy-button">Buy</a>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </section>
    </main>
  </body>
</html>
