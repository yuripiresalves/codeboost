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
    <title>Projeto - Landing Page Neon</title>
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

    <section class="s-hero">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h3>Abra sua conta, é só baixar o app!</h3>
          <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
          <button class="btn-primary">Abra sua conta digital</button>
          <ul>
            <li>
              <div class="icon">
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/icon-anuidade.svg"
                  alt="Icone nde cartão sem anuidade"
                />
              </div>
              <span
                >Cartão sem<br />
                anuidade</span
              >
            </li>
            <li>
              <div class="icon">
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/icon-conta-digital.svg"
                  alt="Icone de conta digital"
                />
              </div>
              <span
                >Conta digital<br />
                100% grátis</span
              >
            </li>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-dinheiro.svg" alt="Icone de dinheiro" />
              </div>
              <span
                >Seu dinheiro<br />
                rendendo mais</span
              >
            </li>
          </ul>
        </div>
        <div class="area-image">
          <h2 data-aos="fade-left">Banco 100% digital</h2>
          <div class="image" data-aos="zoom-in">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/card-neon-frnt.png"
              class="card-front"
              alt="Frente de um cartão"
            />
            <img
              src="<?php echo get_template_directory_uri() ?>/img/card-neon-back.png"
              class="card-back"
              alt="Parte de trás de um cartão"
            />
            <img
              src="<?php echo get_template_directory_uri() ?>/img/circle-cards-neon.svg"
              class="circle"
              alt="Circulo"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="s-card-neon">
      <div class="container">
        <div class="left-area">
          <div class="ilustra-mockup">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/circle-mockup.svg"
              class="circle"
              data-aos="fade-left"
              alt=""
            />
            <img
              src="<?php echo get_template_directory_uri() ?>/img/mockup.svg"
              class="mockup"
              data-aos="flip-right"
              alt=""
            />
          </div>
          <div class="text" data-aos="fade-up">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-neon.svg" alt="Neon" />
            </div>
            <div class="info-txt">
              <h3>Baixe nosso app</h3>
              <p>
                Que tal abrir uma conta digital para ver como a gente faz a sua
                vida muito mais simples?
              </p>
              <ul>
                <li>
                  <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt="Apple Store" />
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/google-play.svg" alt="Google Play" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="right-area">
          <div class="main-text" data-aos="fade-left">
            <h2>Resolva sua vida direto pelo app Neon!</h2>
            <ul>
              <li>
                <div class="info">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-cartao-credito.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Cartão de crédito sem anuidade</h3>
                    <p>
                      Conta digital com cartão de crédito sem anuidade e sem
                      complicação
                    </p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
              <li>
                <div class="info">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-taxas.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Sem taxas</h3>
                    <p>
                      Transferências, boletos de depósito e outros serviços
                      gratuitos
                    </p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
              <li>
                <div class="info">
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-investimentos.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Mais investimentos</h3>
                    <p>
                      Rendem mais que a poupança e você resgata quando quiser
                    </p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
            </ul>
            <a href="" class="btn">Conheça outros produtos</a>
          </div>
          <div class="box-card" data-aos="fade-left">
            <div class="text">
              <h2>Neon Pejota</h2>
              <h3>Contas digitais PJ gratuitas para decolar seu negócio!</h3>
              <p>
                As melhores contas para fazer pagamentos, compras e receber dos
                seus clientes.
              </p>
              <div class="btns">
                <button class="btn-primary">Sou MEI</button
                ><button class="btn-primary">Sou ME</button>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/card-front-pj.svg" class="image" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="s-depoimentos">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <h2>
            <span>Prático, fácil, moderno</span>Você resolve tudo sem estresse
            😊
          </h2>
          <div class="swiper-pagination"></div>
        </div>
        <div class="slide-depoimentos" data-aos="fade-up">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@yurialves</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                  Muito amor por esse banco #bancoNeon
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@kleriene18</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Eu uso o Neon pra render o pouquinho que eu tenho. Como disse
                  minha amiga Bruna, um dia eu abro o app de novo e PA: tô rica.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@mzltweet</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Só por ter um cartão virtual com bloqueio fácil no app, já
                  ganha e muito na segurançã pro cliente.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@yurialves</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                  Muito amor por esse banco #bancoNeon
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@kleriene18</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Eu uso o Neon pra render o pouquinho que eu tenho. Como disse
                  minha amiga Bruna, um dia eu abro o app de novo e PA: tô rica.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimento">
                <div class="user">
                  <strong>@mzltweet</strong>
                  <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="Twitter" />
                </div>
                <p>
                  Só por ter um cartão virtual com bloqueio fácil no app, já
                  ganha e muito na segurançã pro cliente.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s-conta-digital">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2>
            <span>Aproveite</span>Domine o seu dinheiro com uma conta 100%
            digital
          </h2>
          <ul>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-cartao-internacional.svg" alt="" />
              </div>
              <div class="info">
                <h4>Cartão visa internacional</h4>
                <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-taxa-zero.svg" alt="" />
              </div>
              <div class="info">
                <h4>Zero mensalidade e anuidade</h4>
                <p>Não gaste grana pagando taxas desnecessárias.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-poupanca.svg" alt="" />
              </div>
              <div class="info">
                <h4>Investimento que rende mais que a poupança</h4>
                <p>Invista o seu dinheiro de maneira mais rentável.</p>
              </div>
            </li>
          </ul>
          <button class="btn-primary">Abra sua conta digital</button>
        </div>
        <div class="image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/mockup-01.svg"
            data-aos="fade-up"
            class="mockup-01"
            alt=""
          />
          <img
            src="<?php echo get_template_directory_uri() ?>/img/mockup-02.png"
            data-aos="fade-down"
            class="mockup-02"
            alt=""
          />
          <img
            src="<?php echo get_template_directory_uri() ?>/img/circle-conta-digital.svg"
            data-aos="zoom-in"
            class="circle"
            alt=""
          />
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="top">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Neon" />
          <div class="share">
            <span>Acompanhe nas redes</span>
            <ul>
              <li>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() ?>/img/twitter-white.svg" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main">
          <nav>
            <div class="item">
              <strong>Produtos Neon</strong>
              <ul>
                <li><a href="">Cartão de crédito</a></li>
                <li><a href="">Cartão pré-pago</a></li>
                <li><a href="">Neon Mais</a></li>
                <li><a href="">Investimentos</a></li>
                <li><a href="">Empréstimo</a></li>
              </ul>
            </div>
            <div class="item">
              <strong>Conta digital PJ</strong>
              <ul>
                <li><a href="">Sou MEI</a></li>
                <li><a href="">Sou ME</a></li>
              </ul>
            </div>
            <div class="item">
              <strong>Blog</strong>
              <ul>
                <li><a href="">#focanodinheiro</a></li>
                <li><a href="">O poder da comunidade</a></li>
                <li><a href="">Desafio das 52 semanas</a></li>
                <li><a href="">Planilha de gastos</a></li>
              </ul>
            </div>
            <div class="item">
              <strong>Institucional</strong>
              <ul>
                <li><a href="">Conheça a Neon</a></li>
                <li><a href="">Trabalhe conosco</a></li>
                <li><a href="">Termos de uso</a></li>
                <li><a href="">Políticas de privacidade</a></li>
              </ul>
            </div>
            <div class="item">
              <strong>Ajuda</strong>
              <ul>
                <li><a href="">Ouvidoria</a></li>
                <li><a href="">Fale conosco</a></li>
              </ul>
            </div>
          </nav>
          <div class="btns">
            <button>
              <img src="<?php echo get_template_directory_uri() ?>/img/envelope.svg" alt="" />
              <div class="info">
                <strong>Atendimento:</strong>
                <span>oi@neon.com.br (24 horas)</span>
              </div>
            </button>
            <button>
              <img src="<?php echo get_template_directory_uri() ?>/img/chat.svg" alt="" />
              <div class="info">
                <strong>Imprensa:</strong>
                <span>imprensa@neon.com.br</span>
              </div>
            </button>
          </div>
        </div>
        <div class="msg">
          <div class="icon">😀</div>
          <p>
            Oi! Leu até aqui? Você se preocupa com os mínimos detalhes, mesmo. A
            gente também. Por isso o time Neon está sempre trabalhando para
            fazer a conta digital perfeita para você ; )
          </p>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      var swiper = new Swiper('.slide-depoimentos', {
        slidesPerView: 3,
        spaceBetween: 32,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1.3,
            spaceBetween: 16,
          },
          600: {
            slidesPerView: 2.3,
            spaceBetween: 16,
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 32,
          },
        },
      });

      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>
  </body>
</html>
