<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    
    <!-- AOS effects -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- UI styles -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="<?= CSS . '/styles.css' ?>" />
    
    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: <?= $prices['range'][0]; ?>,
        max: <?= $prices['range'][1]; ?>,
        values: [ <?= $prices['values'][0]; ?>, <?= $prices['values'][1]; ?> ],
        slide: function( event, ui ) {
            $( "#amount" ).val(  ui.values[ 0 ] + " ₽" + " - " + ui.values[ 1 ]  + " ₽");
            }
        });
        $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " ₽" +
      " - " + $( "#slider-range" ).slider( "values", 1 ) + " ₽" );
    } );
    </script>

</head>

<body>
  <!-- Header -->
  <header id="home" class="header" style="background-image:url(<?= ($title === 'Главная') ? IMG . '/slider/1-main-slide.png' : ''; ?>);">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <a href="<?= FULL_SITE_ROOT . 'main/index'; ?>"><h1>Tunguska shop</h1></a>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
                <h1>Tunguska shop</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item <?= ($title === 'Рюкзаки') ? 'active' : ''; ?>">
                <a href="<?= FULL_SITE_ROOT . 'products/Ryukzaki/index'; ?>" class="nav-link">Рюкзаки</a>
            </li>
            <li class="nav-item <?= ($title === 'Снаряжение') ? 'active' : ''; ?>">
                <a href="<?= FULL_SITE_ROOT . 'products/Snaryazhenie/index'; ?>" class="nav-link">Снаряжение</a>
            </li>
            <li class="nav-item <?= ($title === 'Одежда') ? 'active' : ''; ?>">
                <a href="<?= FULL_SITE_ROOT . 'products/Odezhda/index'; ?>" class="nav-link">Одежда</a>
            </li>
            <li class="nav-item <?= ($title === 'Обувь') ? 'active' : ''; ?>">
                <a href="<?= FULL_SITE_ROOT . 'products/Obuv/index'; ?>" class="nav-link">Обувь</a>
            </li>  
            <li class="nav-item <?= ($title === 'История бренда') ? 'active' : ''; ?>">
                <a href="<?= FULL_SITE_ROOT . 'history/index'; ?>" class="nav-link">История бренда</a>
            </li>
            <li class="nav-item <?= ($title === 'Контакты') ? 'active' : ''; ?>" >
                <a href="<?= FULL_SITE_ROOT . 'contact/index'; ?>" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item">
                <a href="#account" class="nav-link icon"><i class='bx bx-user'></i></a>
            </li>
            <li class="nav-item">
                <a href="#cart" class="nav-link icon"><i class='bx bxs-cart'></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.html" class="cart-icon">
          <i class="bx bxs-cart"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>

