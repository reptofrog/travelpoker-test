<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Travel Poker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;500;600;700&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <!--
    <aside class="sidebar">
      <div class="sidebar__overlay"></div>
      <div class="sidebar__panel">
        <nav class="sidebar__nav">
          <a class="header__a">Наборы</a>
          <a class="header__a">Kickstarter</a>
          <a class="header__a">Контакты</a>
        </nav>
        <span class="header__social-links">
          <a class="header__social-link">
            <img src="img/instagram.svg">
          </a>
          <a class="header__social-link">
            <img src="img/facebook.svg">
          </a>
        </span>
        </div>
    </aside>-->
    <header class="header">
      <a>
        <img src="<?= get_template_directory_uri(); ?>/img/logo.svg">
      </a>
      <nav class="header__nav">
        <?php 
          $pages = get_pages(); 
          foreach($pages as $page): ?>
          <a class="header__a" href=<?= $page->guid?>><?= $page->post_title?></a>
        <?php endforeach; ?>
      </nav>
      <span class="lang-indicator">
        <!--TODO: Refactor: lang-indicator -> lang-switcher; toggle-button -> input -->
        <label class="lang-indicator__label">EN</label>
        <input class="lang-indicator__toggle-button" type="checkbox" checked>
        <label class="lang-indicator__label lang-indicator__label--enabled">RU</label>
      </z
      <span class="header__social-links">
        <a class="header__social-link">
          <img src="<?= get_template_directory_uri(); ?>/img/instagram.svg">
        </a>
        <a class="header__social-link">
          <img src="<?= get_template_directory_uri(); ?>/img/facebook.svg">
        </a>
      </span>
      <span class="sidebar-button">
        <input class="sidebar-button__input" type="checkbox">
      </span>
    </header>
    <hr class="separator">
    <main>