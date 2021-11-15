<!doctype html>
<html class="no-js" lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="language" content="pt-BR">
    <meta name="description" content="Um mundo de oportunidades em uma das melhores instituições de ensino superior do país.">
    <meta name="robots" content="noindex">
    <meta name="author" content="Braulio Mateus">
    <meta name="keywords" content="idp, cursos, oportunidades, melhor instituição do país..">
    <meta property="og:type" content="page">
    <meta property="og:url" content="https://www.idp.edu.br/">
    <meta property="og:title" content="">
    <meta property="og:image" content="https://www.idp.edu.br/">
    <meta property="og:description" content="Uma das melhores instituições de ensino superior do país.">
    <meta property="article:author" content="Braulio Mateus">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@IDP">
    <meta name="twitter:creator" content="@IDP">
    <meta name="twitter:description" content="Uma das melhores instituições de ensino superior do país.">

    <!-- Title  -->
    <title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon.png">

    <!-- ***** CSS Files ***** -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" />
    <!-- Style css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/vendor/aos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/vendor/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">

    <?php wp_head(); ?>

</head>

<body>
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <div class="main">
        <header class="navbar navbar-sticky-desative navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="<?php echo home_url(); ?>" style="padding: 30px 0">
                    <img class="navbar-brand-regular" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-idp.png" alt="marca-logo">
                </a>
                <div class="navbar-inner">
                </div>
            </div>
        </header>
 
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center banner-home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="welcome-intro">
                            <h1 class="text-white" style="font-family: Montserrat, sans-serif; font-weight: normal"><?php the_field('texto_do_titulo_principal'); ?></h1>
                            <p class="text-white my-4">
                                <?php the_field('texto_do_subtitulo_principal'); ?>
                            </p>
                            <div class="button-group store-buttons">
                                <a href="<?php the_field('link_botao_01'); ?>" target="_blank">
                                    <button class="btn mb-2 blue-dark"><?php the_field('nome_botao_01'); ?></button>
                                </a>
                                <a href="<?php the_field('link_botao_02'); ?>" target="_blank">
                                    <button class="btn mt-2 blue-dark"><?php the_field('nome_botao_02'); ?></button>
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section id="screenshots" class="section screenshots-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">POR QUE ESCOLHER O IDP?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="app-screenshots color-gray-around">
                            <?php if(have_rows('conteudo_conquistas')): while(have_rows('conteudo_conquistas')) : the_row(); ?>
                            <div class="single-screenshot" style="text-align: center; padding: auto 0">
                                <div style="min-height: 110px">
                                    <h3><?php the_sub_field('titulo_conquista'); ?></h3> 
                                    <span><?php the_sub_field('subtitulo_conquista'); ?></span>
                                </div>
                                <img style="margin: 0 auto;" src="<?php the_sub_field('imagem_conquista'); ?>" alt="Imagem das conquistas">
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section counter-area ptb_50" style="background-color: #F6F7F9;">
            <div class="container">
                <div class="row justify-content-center">
                    <?php if(have_rows('diferencial')): while(have_rows('diferencial')) : the_row(); ?>
                    <div class="col-5 col-sm-3 text-center">
                        <div class="p-3 p-md-0">
                            
                            <div class="d-inline-block mb-3">
                                <img width="40px" src="<?php the_sub_field('imagem_diferencial'); ?>" alt="Imagem do diferencial">
                            </div>
                            <p style="font-weight: bold; color: #001424"><?php the_sub_field('titulo_diferencial'); ?></p>
                            
                        </div>
                    </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </section>
        <?php endwhile; else: endif; ?>

        <section class="section service-area overflow-hidden ptb_top_100">
            <div class="container">
                <?php if(have_rows('conheca_o_curso')): ?>
                <?php while( have_rows('conheca_o_curso') ):  ?>
                <?php the_row(); ?>

                <div class="row justify-content-between ptb_bottom">
                    <div class="col-12 col-lg-6 order-<?= the_sub_field('lado_texto') ?> order-lg-<?= the_sub_field('lado_texto') ?>  ">
                        <div class="service-text pt-4 pt-lg-0">
                            <h2 style="color: #052743;"><?php the_sub_field('titulo_curso'); ?></h2>
                            <ul class="service-list">
                                <li class="single-service media py-2">
                                    <div class="service-text media-body">
                                        <p><?php the_sub_field('descricao_curso'); ?></p>
                                    </div>
                                </li>
                            </ul>
                            <a href="<?php the_sub_field('link_do_botao'); ?>" target="_blank">
                                <button class="btn mt-2 blue-dark"><?php the_sub_field('nome_botao'); ?></button>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-none d-lg-block order-<?= the_sub_field('lado_imagem') ?> order-lg-<?= the_sub_field('lado_imagem') ?>">
                        <div class="service-thumb mx-auto">
                            <img src="<?php the_sub_field('imagem_curso'); ?>" alt="Imagem do curso">
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                <?php endif; ?>
              
            </div>
        </section>
        
        <!--====== Footer Area ======-->
        <footer class="footer-area">
            <!-- Footer -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left" style="padding: 0 0 0 5%;"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-footer.png" alt="Logo Footer"></div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">© 2021 | BRAULIO MATEUS | TODOS OS DIREITOS RESERVADOS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area Fim ======-->
    </div>
    <!-- ***** jQuery Plugins ***** -->

    <!-- jQuery -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/plugins.min.js"></script>

    <!-- Active js -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/active.js"></script>

    <?php wp_footer(); ?>
</body>

</html>