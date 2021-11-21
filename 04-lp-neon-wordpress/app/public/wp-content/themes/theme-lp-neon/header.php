<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.min.css" />

    <!-- Primary Meta Tags -->
    <title><?php bloginfo('name'); ?> <?php wp_title('-') ?></title>
    <meta name="title" content="Redesign Landing Page Neon" />
    <meta
      name="description"
      content="Feito por Yuri Alves. https://github.com/yuripiresalves"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lp-neon.netlify.app/" />
    <meta property="og:title" content="Redesign Landing Page Neon" />
    <meta
      property="og:description"
      content="Feito por Yuri Alves. https://github.com/yuripiresalves"
    />
    <meta
      property="og:image"
      content="https://lp-neon.netlify.app/share-img.jpg"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://lp-neon.netlify.app/" />
    <meta property="twitter:title" content="Redesign Landing Page Neon" />
    <meta
      property="twitter:description"
      content="Feito por Yuri Alves. https://github.com/yuripiresalves"
    />
    <meta
      property="twitter:image"
      content="https://lp-neon.netlify.app/share-img.jpg"
    />

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo Neon" />
        </a>
        <nav>
          <ul>
            <li><a href="">Produtos</a></li>
            <li><a href="">Conta digital PJ</a></li>
            <li><a href="">Quem somos</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Ajuda</a></li>
          </ul>
          <a href="" class="btn-secondary white">Abra sua conta digital</a>
          <button class="btn-mobile">
            <img src="<?php echo get_template_directory_uri() ?>/img/btn-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>