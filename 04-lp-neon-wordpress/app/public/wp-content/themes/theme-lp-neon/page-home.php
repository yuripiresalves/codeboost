<?php
  // Template name: Home
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="s-hero">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h3><?php the_field('subtitulo_section_hero') ?></h3>
        <h1><?php the_field('titulo_section_hero') ?></h1>
        <button class="btn-primary"><?php the_field('texto_botao') ?></button>
        <ul>
        <?php if( have_rows('cadastrar_itens_da_section_hero') ): while ( have_rows('cadastrar_itens_da_section_hero') ) : the_row(); ?>

          <li>
            <div class="icon">
              <img
                src="<?php the_sub_field('icone_item') ?>"
                alt="Icone de cartão sem anuidade"
              />
            </div>
            <span><?php the_sub_field('texto_item') ?></span
            >
          </li>
        

        <?php endwhile; else : endif;?>
        </ul>
      </div>
      <div class="area-image">
        <h2 data-aos="fade-left"><?php the_field('texto_do_banco_100_digital') ?></h2>
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
            <h3><?php the_field('titulo_baixe_nosso_app') ?></h3>
            <p>
              <?php the_field('descricao_baixe_nosso_app') ?>
            </p>
            <ul>
              <li>
                <a href="<?php the_field('url_apple_store') ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt="Apple Store" />
                </a>
              </li>
              <li>
                <a href="<?php the_field('url_google_play') ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/google-play.svg" alt="Google Play" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="right-area">
        <div class="main-text" data-aos="fade-left">
          <h2><?php the_field('titulo_section_app_neop') ?></h2>
          <ul>

            <?php if( have_rows('cadastrar_beneficios_app_neon') ): while ( have_rows('cadastrar_beneficios_app_neon') ) : the_row(); ?>

            <li>
              <div class="info">
                <img src="<?php the_sub_field('icone_beneficio')?>" class="icon" alt="" />
                <div class="txt">
                  <h3><?php the_sub_field('titulo_beneficio')?></h3>
                  <p>
                    <?php the_sub_field('descricao_beneficio')?>
                  </p>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
            </li>
          

            <?php endwhile; else : endif;?>

          </ul>
          <a href="" class="btn"><?php the_field('texto_botao_conheca_outros_produtos') ?></a>
        </div>
        <div class="box-card" data-aos="fade-left">
          <div class="text">
            <h2><?php the_field('titulo_pj')?></h2>
            <h3><?php the_field('subtitulo_pj')?></h3>
            <p>
              <?php the_field('descricao_pj')?>
            </p>
            <div class="btns">
              <button class="btn-primary"><?php the_field('texto_botao_mei')?></button
              ><button class="btn-primary"><?php the_field('texto_botao_me')?></button>
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

  <?php endwhile; else: endif; ?>
  
<?php get_footer(); ?>