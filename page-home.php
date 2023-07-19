<?php
// Template name: Home 
get_header(); 
?> 

<section class="carrossel d-none d-md-block">
    <div id="carouselExampleCaptions" class="carousel slide wow fadeInLeftBig" data-wow-duration="0.8s" data-wow-delay="0.6s" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php bloginfo("template_url");?>/img/slide.png" class="d-block w-100" alt="...">
          <div class="carousel-caption textoCarrossel container row col-md-2 fadeInUpBig">
            <p>A melhor autoclave <span class="corTextoSlide">produzida no Brasil</span><br><span class="btn">Saiba Mais</span></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo("template_url");?>/img/slide.png" class="d-block w-100" alt="...">
          <div class="carousel-caption textoCarrossel container row col-md-2 fadeInUpBig">
            <p>A melhor autoclave <span class="corTextoSlide">produzida no Brasil</span><br><span class="btn">Saiba Mais</span></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <i class="fa-solid fa-angle-left"></i>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <i class="fa-solid fa-angle-right"></i>
      </button>
    </div>
  </section>

  <section class="carrosselResponsivo d-block d-sm-none">
    <div id="carouselExampleCaptions1" class="carousel slide wow fadeInLeftBig" data-wow-duration="0.8s" data-wow-delay="0.6s" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php bloginfo("template_url");?>/img/slide1.png" class="d-block" alt="...">
          <div class="carousel-caption textoCarrossel container row col-md-2 fadeInUpBig">
            <p>Assistência técnica <span class="corTextoSlide">especializa Stermax</span><br><span class="btn">Saiba Mais</span></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo("template_url");?>/img/slide1.png" class="d-block" alt="...">
          <div class="carousel-caption textoCarrossel container row col-md-2 fadeInUpBig">
            <p>Assistência técnica <span class="corTextoSlide">especializa Stermax</span><br><span class="btn">Saiba Mais</span></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
        <i class="fa-solid fa-angle-left"></i>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
        <i class="fa-solid fa-angle-right"></i>
      </button>
    </div>
  </section>
  

  <section class="secaoDesde">
    <div class="container">
      <h2>A Stermax é referência na fabricação de equipamentos de biossegurança há 30 anos.</h2>
      <h3>Desde 1991 tem na qualidade de entrega, o seu maior ativo e reconhecimento.</h3>
    </div>
  </section>

  <section class="secaoSobre wow fadeInRightBig" data-wow-duration="0.8s" data-wow-delay="0.6s">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Sobre a Stermax</h2>
          <p>
            Com sede própria instalada na cidade de Pinhais, junto à região metropolitana de Curitiba – Paraná, a Stermax atua como fabricante de equipamentos para a área de biossegurança desde 1991, completando 30 anos de história.
            <br><br>
            A empresa conta com ampla experiência e know-how para o desenvolvimento e industrialização de produtos que atendem às necessidades do mercado para os segmentos: médico, odontológico, veterinário, laboratorial, beleza e estética, tatuagem e body piercing.
            <br><br>
            A Stermax é uma empresa socialmente responsável, que valoriza um relacionamento justo e correto com seus clientes, com seus recursos humanos internos, com o meio ambiente, com o cumprimento das leis e com a comunidade em geral.
          </p>
        </div>
        <div class="col-md-6">
          <img class="w-100" src="<?php bloginfo("template_url");?>/img/banner-institucional.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="secaoInformacao">
    <div class="container wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
      <div class="row">
        <div class="col-md-4">
          <img src="<?php bloginfo("template_url");?>/img/ico-autoclave.png" alt=""><br>
          <span>+ de 180 mil</span>
          <h2>Autoclaves vendidas</h2>
        </div>
        <div class="col-md-4">
          <img src="<?php bloginfo("template_url");?>/img/ico-assistencia.png" alt=""><br>
          <span>Assistência técnica</span>
          <h2>Especializada</h2>
        </div>
        <div class="col-md-4">
          <img src="<?php bloginfo("template_url");?>/img/ico-mapa.png" alt=""><br>
          <span>Produto 100%</span>
          <h2>Produzido no Brasil</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="secaoProduto">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="w-100" src="<?php bloginfo("template_url");?>/img/autoclave.jpg" alt="">
          </a>
        </div>
        <div class="col-md-6">
          <a href="#">
            <img class="w-100" src="<?php bloginfo("template_url");?>/img/Revendedor-Stermax.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>