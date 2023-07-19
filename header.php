<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#353535">
    <title>Stermax - Home</title>
    <link rel="icon" href="<?php bloginfo("template_url");?>/img/icon-logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/bootstrap.min.css" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- fontFamily do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/estilo.css">
    <!-- Animações -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/animate.css">
</head>
<body>
  <header>

    <nav class="navTopo wow fadeInDown d-none d-md-block" data-wow-duration="0.8s" data-wow-delay="0.6s">
      <div class="container">
        <div class="row">
          <div class="col-md-5 contato">
            <span>0800 721 8533 | stermax@stermax.com.br</span>
          </div>
          <div class="col-md-6 endereco">
            <span>R. Emma Rohrsetzer, 1011 – Pinhais/PR (Curitiba) | CEP 83.324-190</span>
          </div>
          <div class="col-md-1">
            <ul>
              <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <nav class="navMenu wow fadeInDown d-none d-md-block" data-wow-duration="0.8s" data-wow-delay="0.6s">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-4">
            <img class="zoomImg" src="img/logo-stermax-branco.png" alt="">
          </div>
          <div class="col-md-8 col-8">
            <div class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php bloginfo("url");?>/home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                      </a>
                      <ul class="sub-menu clearfix p-5">
                        <li><a href="#">Autoclaves<i class="fa-sharp fa-solid fa-play"></i></a>
                          <ul class="sub-menu">
                              <li><a href="<?php bloginfo("url");?>/produtos">Lançamento Linha Flex</a></li>
                              <li><a href="<?php bloginfo("url");?>/produtos">Lançamento Linha Work</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php bloginfo("url");?>/assistencia">Assistência</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php bloginfo("url");?>/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php bloginfo("url");?>/faq">F.A.Q</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php bloginfo("url");?>/download">Downloads</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 d-none d-md-block">
            <span class="btn">Fale Conosco</span>
          </div>
        </div>
      </div>
    </nav>

    <nav class="navResponsive d-md-none wow fadeInDown fixed-top" data-wow-duration="0.8s" data-wow-delay="0.6s">
      <div class="">
        <div class="">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div class="navbar-brand">
                <img src="img/logo-stermax-branco.png" alt="">
              </div>
              <button id="toggle-button" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <i id="toggle-icon" class="fa-solid fa-bars"></i>
              </button>
              <div class="navbar-collapse collapse" id="menu">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo("url");?>/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <div class="meu-dropdown">
                      <button class="meu-dropdown-btn">Produtos<i class="fa-solid fa-play fa-rotate-90"></i></button>
                      <div class="meu-dropdown-content">
                        <div class="meu-dropdown">
                          <button class="meu-dropdown-btn">Autoclaves<i class="fa-solid fa-play fa-rotate-90"></i></button>
                          <div class="meu-dropdown-content">
                            <a href="<?php bloginfo("url");?>/produtos">Lançamento Linha Flex</a>
                            <a href="<?php bloginfo("url");?>/produtos">Lançamento Linha Work</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo("url");?>/assistencia">Assistência</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo("url");?>/contato">Contato</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo("url");?>/download">Download</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </nav>
    
  </header>