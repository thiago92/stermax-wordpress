<?php
// Template name: FAQ 
get_header(); 
?> 

  <section class="secaoAutoclave">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>F.A.Q</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="container fundo-responsivo">
        <div class="row">
            <div class="col-md-12">
                <h2>Dicas de Uso</h2>
            </div>
            <div class="content">
                <div class="accordion_item">
                    <div class="accordion_header">
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <span>
                            Dicas
                        </span> 
                    </div>
                    <div class="accordion_content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi minima ducimus quis magnam deleniti fugit enim quisquam quae illum numquam nulla, nostrum labore, perspiciatis mollitia deserunt sint ipsam voluptas vel! 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container fundo-responsivo">
      <div class="row">
          <div class="col-md-12">
              <h2>FAQ - Perguntas Frequentes</h2>
          </div>
          <div class="content">
              <div class="accordion_item">
                  <div class="accordion_header">
                      <div class="icon">
                          <i class="fa-solid fa-plus"></i>
                      </div>
                      <span>
                          Qual pergunta será feita?
                      </span> 
                  </div>
                  <div class="accordion_content">
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi minima ducimus quis magnam deleniti fugit enim quisquam quae illum numquam nulla, nostrum labore, perspiciatis mollitia deserunt sint ipsam voluptas vel! 
                      </p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="duvidas">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="img">
              <img src="<?php bloginfo("template_url");?>/img/ico-duvida.png" alt="">
            </div>
          </div>
          <div class="col-md-10">
            <div class="canais">
              <h3>Ainda ficou com dúvidas?</h3>
              <h3>Fale com a nossa Central de Atendimento:</h3>
              <ul>
                <li>Telefone: 0800 721 8533</li>
                <li>Whatsapp: (41) 9 9905-5799</li>
                <li>E-mail: sac@stermax.com.br</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>