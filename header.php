<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/headermenu.css">
  <link rel="stylesheet" href="/css/styleForMapSwiper.css" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/fonts.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/splide.min.css" />

  <title>Официальный сайт Московского завода ФИЗПРИБОР</title>
</head>

<body>
  <header class="header">
    <a href="index.php" class="header-logo__link"><img src="img/Logo.svg" alt="" class="header-logo" /></a>
    <div class="header-container">
      <ul class="header-menu">
        <li class="header-menu__list"><a href="index.php" class="header-menu__link header-menu__link__alt">Главная</a></li>
        <!-- Главная -->
        <li class="header-menu__list">
          <p class="header-menu__link">Компания <img src="img/arr.svg" alt="" class="header-menu__arr" /></p>
          <!-- Компания -->
          <ul class="header-submenu">
            <li class="header-submenu__list"><a href="licenses.php" class="header-submenu__link">Лицензии и сертификаты</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="projects.php" class="header-submenu__link">Реализованные проекты</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="management.php" class="header-submenu__link">Системы менеджмента</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="soc-respons.php" class="header-submenu__link">Социальная ответственность</a></li>
          </ul>
        </li>
        <li class="header-menu__list">
          <a href="productspage.php" class="header-menu__link header-menu__link__alt">Продукция<img src="img/arr.svg" alt="" class="header-menu__arr" /></a>
          <!-- Продукция -->
          <ul class="header-submenu">
            <li class="header-submenu__list">
              <p href="#" class="header-submenu__link">Непрограммируемые <br />
                средства автоматизации
              </p>
              <svg class="header__svg" width="6" height="10" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
              </svg>
              <ul class="header-subsubmenu">
                <li class="header-submenu__list"><a href="ktsnpl.php" class="header-submenu__link">КТС НПЛ</a></li>
                <div class="header-submenu__line"></div>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">УКТС</a></li>
                <div class="header-submenu__line"></div>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">УДУ</a></li>
              </ul>
            </li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list">
              <p href="#" class="header-submenu__link">Программируемые <br />
                средства автоматизации</p>
              <svg class="header__svg" width="6" height="10" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
              </svg>
              <ul class="header-subsubmenu">
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">ПТК САУ</a></li>


              </ul>
            </li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list header-submenu__list-fix">
              <p class="header-submenu__link">Малая автоматизация</p>
              <svg class="header__svg2" width="6" height="10" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
              </svg>
              <ul class="header-subsubmenu">

                <li class="header-submenu__list"><a href="#" class="header-submenu__link">fimatic-c</a></li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="header-menu__list">
          <p class="header-menu__link">Медиа<img src="img/arr.svg" alt="" class="header-menu__arr" /></p>
          <!-- Медиа -->
          <ul class="header-submenu">
            <li class="header-submenu__list"><a href="news.php" class="header-submenu__link">Новости</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="photopage.php" class="header-submenu__link">Фотографии</a></li>
          </ul>
        </li>
        <li class="header-menu__list"><a href="contacts.php" class="header-menu__link header-menu__link__alt">Контакты</a></li>
        <!-- Контакты -->
      </ul>
      <div class="header-links">
        <a href="tel:+74952286019" class="header-links__number">+7 (495) 228 60-19</a>
        <div class="header-links__social">
          <a href="https://rutube.ru/channel/7603214/" target="_blank" class="header-social__link"><img src="img/Rutub.svg" alt="" class="header-social__img" /></a>
          <a href="https://vk.com/fizpribor" target="_blank" class="header-social__link"><img src="img/vk.svg" alt="" class="header-social__img" /></a>
          <a href="https://www.youtube.com/channel/UCdZOG8MA75s46iCRWPrW-ew" target="_blank" class="header-social__link"><img src="img/yt.svg" alt="" class="header-social__img" /></a>
        </div>
      </div>
    </div>
    <form action="contacts.php"><button class="header-button">Связаться с нами</button></form>

  </header>