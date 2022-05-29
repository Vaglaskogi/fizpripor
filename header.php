<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Прочее -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <!-- Анимации при скролле -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Слайдер -->
  <link rel="stylesheet" href="css/splide.min.css" />
  <!-- Стили для хедера -->
  <link rel="stylesheet" href="css/headermenu.css">
  <!-- Шрифты -->
  <link rel="preload" href="css/fonts.css" as="font" type="font/woff2" crossorigin/>
  <!-- Основные стили -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Официальный сайт Московского завода ФИЗПРИБОР</title>
</head>
<body>
  <div class="preloader">
    <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1025 959" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M89.3 89.8L0 179.5L56.5 179.8L113 180L113.4 340.8C113.7 519.5 113.3 508.2 120.6 536.6C140.6 614.6 198.1 675.6 275.1 700.5C298.7 708.1 319.5 711.2 346.1 711.1C379.9 711 410.2 704.7 439.5 691.6C442.7 690.2 445.5 689 445.7 689C445.9 689 446.1 709 446.1 733.5C446.1 775.2 446 778 444.4 778C443.4 778.1 417.7 778 387.4 778C357 778 332.1 778.3 332.1 778.7C332.1 779.1 372.5 819.9 421.9 869.3L511.6 959L601.4 869.2C650.7 819.9 691.1 779.3 691.1 779C691.1 778.7 665.8 778.5 634.9 778.5H578.6L578.3 733.7C578.2 709.1 578.3 689 578.6 689C578.9 689 580.8 689.8 582.9 690.9C590 694.5 612.4 702.1 624.5 705C643.1 709.5 658.3 711.2 678.6 711.3C715.5 711.3 747.3 703.9 780.7 687.5C831.1 662.8 870.9 620.7 892.3 569.4C900.6 549.6 904.7 534.9 908.7 511C910.4 501.3 910.5 487.9 910.8 340.2L911.2 180H967.9H1024.6L934.6 90L844.6 0L754.8 89.7L665.1 179.5L721.6 179.8L778.1 180V224.5C778.1 255.8 777.8 269 777 269C776.4 269 772.9 267.7 769.3 266.1C740.1 253.3 711.4 247.5 677.6 247.6C644.9 247.7 615.2 253.7 586.9 266.1C583.3 267.7 579.8 269 579.2 269C578.4 269 578.1 243 578.1 179.5V90H512.1H446.1V179.5C446.1 252.7 445.9 269 444.8 269C444.1 269 441.7 268.2 439.5 267.1C431.5 263.3 415.5 257.8 402.7 254.5C354.7 242.2 304.4 245.7 258.6 264.4C253.7 266.5 248.8 268.4 247.9 268.7C246.2 269.2 246.1 266.7 246.1 224.6V180H302.8H359.6L269.6 90C220.1 40.5 179.4 0 179.1 0.0999756C178.8 0.0999756 138.4 40.5 89.3 89.8ZM370.3 382.4C411 392.9 440.5 427.2 445.1 469.5C448.3 499.5 436.3 531.6 414.2 552.2C393 572.1 365.4 581.5 336.5 578.8C291.8 574.7 255.3 541.1 247.6 497.1C239.8 452.6 261.6 409.5 301.9 389.5C312.8 384.1 320.5 381.9 336.6 379.6C343.4 378.6 361.2 380.1 370.3 382.4ZM690.1 380C724.7 384.2 753.8 405.6 769.4 438.2C770.9 441.4 773.4 448.3 774.8 453.7C777.3 462.5 777.6 465.1 777.5 479.5C777.5 491.7 777.1 497.1 775.8 502C770.1 522.7 762.1 536.8 748.5 550.3C731 567.4 711.8 576.5 687.9 578.9C653.7 582.3 621.4 568.3 599.3 540.7C575.4 510.7 571.7 466.1 590.3 432C610.2 395.5 649.3 375.1 690.1 380Z" fill="#2E6C77"/>
    </svg>
  </div>
  <header class="header">
    <a href="index.php" class="header-logo__link"><img src="img/Logo.svg" alt="" class="header-logo" /></a>
    <div class="header__burger">
      <span></span>
    </div>
    <div class="header-container">
      <ul class="header-menu">
        <!-- Главная -->
        <li class="header-menu__list"><a href="index.php" class="header-menu__link header-menu__link__alt">Главная</a></li>
        <!-- Компания -->
        <li class="header-menu__list">
          <p class="header-menu__link">Компания <svg class="header__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.2458 0.288223C10.0585 0.103618 9.80501 0 9.54082 0C9.27664 0 9.02319 0.103618 8.83582 0.288223L5.24581 3.79694L1.7058 0.288223C1.51844 0.103618 1.26499 0 1.0008 0C0.736615 0 0.483162 0.103618 0.295799 0.288223C0.20207 0.380365 0.127676 0.489988 0.0769069 0.610771C0.0261381 0.731553 0 0.861104 0 0.99195C0 1.1228 0.0261381 1.25235 0.0769069 1.37313C0.127676 1.49391 0.20207 1.60353 0.295799 1.69568L4.53581 5.89821C4.62877 5.99111 4.73938 6.06485 4.86123 6.11517C4.98309 6.16549 5.1138 6.1914 5.24581 6.1914C5.37782 6.1914 5.50853 6.16549 5.63039 6.11517C5.75225 6.06485 5.86285 5.99111 5.95581 5.89821L10.2458 1.69568C10.3396 1.60353 10.4139 1.49391 10.4647 1.37313C10.5155 1.25235 10.5416 1.1228 10.5416 0.99195C10.5416 0.861104 10.5155 0.731553 10.4647 0.610771C10.4139 0.489988 10.3396 0.380365 10.2458 0.288223Z" fill="#181818"/>
            </svg></p>
          <ul class="header-submenu">
            <h4 class="header-submenu__textMobile">Компания</h4>
            <li class="header-submenu__list"><a href="licenses.php" class="header-submenu__link">Лицензии и сертификаты</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="projects.php" class="header-submenu__link">Реализованные проекты</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="management.php" class="header-submenu__link">Системы менеджмента</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="soc-respons.php" class="header-submenu__link">Социальная ответственность</a></li>
            <button class="header-submenu__backButton">← Назад</button>
          </ul>
        </li>
        <!-- Продукция -->
        <li class="header-menu__list">
          <p class="header-menu__link">Продукция<svg class="header__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.2458 0.288223C10.0585 0.103618 9.80501 0 9.54082 0C9.27664 0 9.02319 0.103618 8.83582 0.288223L5.24581 3.79694L1.7058 0.288223C1.51844 0.103618 1.26499 0 1.0008 0C0.736615 0 0.483162 0.103618 0.295799 0.288223C0.20207 0.380365 0.127676 0.489988 0.0769069 0.610771C0.0261381 0.731553 0 0.861104 0 0.99195C0 1.1228 0.0261381 1.25235 0.0769069 1.37313C0.127676 1.49391 0.20207 1.60353 0.295799 1.69568L4.53581 5.89821C4.62877 5.99111 4.73938 6.06485 4.86123 6.11517C4.98309 6.16549 5.1138 6.1914 5.24581 6.1914C5.37782 6.1914 5.50853 6.16549 5.63039 6.11517C5.75225 6.06485 5.86285 5.99111 5.95581 5.89821L10.2458 1.69568C10.3396 1.60353 10.4139 1.49391 10.4647 1.37313C10.5155 1.25235 10.5416 1.1228 10.5416 0.99195C10.5416 0.861104 10.5155 0.731553 10.4647 0.610771C10.4139 0.489988 10.3396 0.380365 10.2458 0.288223Z" fill="#181818"/>
            </svg></p>
          <ul class="header-submenu">
          <h4 class="header-submenu__textMobile">Продукция</h4>
            <li class="header-submenu__list">
              <p href="#" class="header-submenu__link">Непрограммируемые <br />
                средства автоматизации <svg class="header__svgSmall" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
              </svg>
              </p>
              <ul class="header-subsubmenu">
                <h4 class="header-submenu__textMobile">Непрограммируемые <br />
                средства автоматизации</h4>
                <li class="header-submenu__list"><a href="ktsnpl.php" class="header-submenu__link">КТС НПЛ</a></li>
                <div class="header-submenu__line"></div>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">УКТС</a></li>
                <div class="header-submenu__line"></div>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">УДУ</a></li>
                <button class="header-submenu__backButton">← Назад</button>
              </ul>
            </li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list">
              <p href="#" class="header-submenu__link">Программируемые <br />
                средства автоматизации <svg class="header__svgSmall" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
              </svg></p>
              <ul class="header-subsubmenu">
                <h4 class="header-submenu__textMobile">Программируемые <br />
                средства автоматизации </h4>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">ПТК САУ</a></li>
                <button class="header-submenu__backButton">← Назад</button>
              </ul>
            </li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list">
              <p class="header-submenu__link">Малая автоматизация
                <svg class="header__svgSmall" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.92426 5.42426C5.15858 5.18995 5.15858 4.81005 4.92426 4.57574L1.10589 0.757359C0.871573 0.523044 0.491674 0.523044 0.25736 0.757359C0.0230449 0.991673 0.0230449 1.37157 0.257359 1.60589L3.65147 5L0.257359 8.39411C0.0230442 8.62843 0.0230442 9.00833 0.257359 9.24264C0.491673 9.47696 0.871572 9.47696 1.10589 9.24264L4.92426 5.42426ZM4 5.6L4.5 5.6L4.5 4.4L4 4.4L4 5.6Z" fill="#181818" />
                </svg>
              </p>
              <ul class="header-subsubmenu">
                <h4 class="header-submenu__textMobile">Малая автоматизация</h4>
                <li class="header-submenu__list"><a href="#" class="header-submenu__link">fimatic-c</a></li>
                <button class="header-submenu__backButton">← Назад</button>
              </ul>
            </li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="productspage.php" class="header-submenu__link">Вся продукция</a></li>
            <button class="header-submenu__backButton">← Назад</button>
          </ul>
        </li>
        <!-- Медиа -->
        <li class="header-menu__list">
          <p class="header-menu__link">Медиа
            <svg class="header__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.2458 0.288223C10.0585 0.103618 9.80501 0 9.54082 0C9.27664 0 9.02319 0.103618 8.83582 0.288223L5.24581 3.79694L1.7058 0.288223C1.51844 0.103618 1.26499 0 1.0008 0C0.736615 0 0.483162 0.103618 0.295799 0.288223C0.20207 0.380365 0.127676 0.489988 0.0769069 0.610771C0.0261381 0.731553 0 0.861104 0 0.99195C0 1.1228 0.0261381 1.25235 0.0769069 1.37313C0.127676 1.49391 0.20207 1.60353 0.295799 1.69568L4.53581 5.89821C4.62877 5.99111 4.73938 6.06485 4.86123 6.11517C4.98309 6.16549 5.1138 6.1914 5.24581 6.1914C5.37782 6.1914 5.50853 6.16549 5.63039 6.11517C5.75225 6.06485 5.86285 5.99111 5.95581 5.89821L10.2458 1.69568C10.3396 1.60353 10.4139 1.49391 10.4647 1.37313C10.5155 1.25235 10.5416 1.1228 10.5416 0.99195C10.5416 0.861104 10.5155 0.731553 10.4647 0.610771C10.4139 0.489988 10.3396 0.380365 10.2458 0.288223Z" fill="#181818"/>
            </svg>
          </p>
          <ul class="header-submenu">
            <h4 class="header-submenu__textMobile">Медиа</h4>
            <li class="header-submenu__list"><a href="news.php" class="header-submenu__link">Новости</a></li>
            <div class="header-submenu__line"></div>
            <li class="header-submenu__list"><a href="photopage.php" class="header-submenu__link">Фотографии</a></li>
            <button class="header-submenu__backButton">← Назад</button>
          </ul>
        </li>
        <!-- Контакты -->
        <li class="header-menu__list"><a href="contacts.php" class="header-menu__link header-menu__link__alt">Контакты</a></li>
      </ul>
      <!-- Ссылки -->
      <div class="header-links">
        <a href="tel:+74952286019" class="header-links__number">+7 (495) 228 60-19</a>
        <div class="header-links__social">
          <a href="https://rutube.ru/channel/7603214/" target="_blank" class="header-social__link"><img src="img/Rutub.svg" alt="" class="header-social__img" /></a>
          <a href="https://vk.com/fizpribor" target="_blank" class="header-social__link"><img src="img/vk.svg" alt="" class="header-social__img" /></a>
          <a href="https://www.youtube.com/channel/UCdZOG8MA75s46iCRWPrW-ew" target="_blank" class="header-social__link"><img src="img/yt.svg" alt="" class="header-social__img" /></a>
        </div>
      </div>
    </div>
    <!-- Кнопка связаться с нами -->
    <form class="header-button-form" action="contacts.php"><button class="header-button">Связаться с нами</button></form>
  </header>