<?php

$auth = true;

?>

<header class="header container">
  <a href="/" class="logo">Open Source</a>
  <nav class="nav">
    <a href="/" class="nav__link">Глвная</a>
    <a href="/" class="nav__link">Новости</a>
    <a href="/" class="nav__link">Контакты</a>
    <?php if ($auth) : ?>
      <button class="profile">
        <img class="profile__img" src="/assets/img/avatar.webp" alt="">
        <span class="profile__name">Виктор</span>
        <svg class="icon">
          <use xlink:href="/assets/img/icons/svg-sprite.svg#arrow-down"></use>
        </svg>
      </button>
    <?php else : ?>
      <a href="/" class="btn bg-primary">Войти</a>
    <?php endif; ?>
  </nav>
  <div class="burger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>