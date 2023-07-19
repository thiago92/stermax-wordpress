<?php
// Template name: Assistencia 
get_header(); 
?> 

  <section class="secaoAutoclave">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Assistência Técnica</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="assistencia">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Encontre uma assistência autorizada perto de você:</h2>
                <p>A Stermax conta com uma ampla rede de assistências técnicas aptas para atender eventuais necessidades de manutenção preventiva e corretiva, sejam elas dentro ou fora do período de garantia do produto. Todas as assistências técnicas são frequentemente avaliadas através de nosso sistema de gestão de qualidade e também através de consulta junto aos clientes que utilizaram os serviços.</p>
            </div>
            <div class="col-md-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione o estado:</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>                  
            </div>
            <div class="col-md-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione a cidade:</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-2">
                <button>Buscar</button>
            </div>
            <div class="col-md-6">
                <div class="nexus-jgp">
                    <h3>Nexus do Brasil</h3>
                    <ul>
                        <li>(68) 2101-6500 | (68) 9987-0053</li>
                        <li>R. Lauro Fontes, 67, Bairro Conjunto Guiomard Santos</li>
                        <li>CEP 69901-369</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nexus-jgp">
                    <h3>JGP ENGENHARIA CLINICA</h3>
                    <ul>
                        <li>(68) 2101-6500 | (68)9 9987-0053</li>
                        <li>R. Lauro Fontes, 67, Bairro Conjunto Guiomard Santos</li>
                        <li>CEP 69901-369</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="assistencia-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pecas-manual">
                        <img class="img-peca" src="<?php bloginfo("template_url");?>/img/ico-assistencia.png" alt="">
                        <h4>Comprar Peças</h4>
                        <p>Acesse o site da Assistência Técnica STERMAX para adquirir suas peças.</p>
                        <button><i class="fa-solid fa-link"></i>Acessar</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pecas-manual">
                        <img class="img-manual" src="<?php bloginfo("template_url");?>/img/ico-autoclave.png" alt="">
                        <h4>Manuais de Instrução</h4>
                        <p>Aqui você encontra os Manuais de Instrução dos equipamentos STERMAX para download.</p>
                        <button><i class="fa-solid fa-cloud-arrow-down"></i>Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer(); ?>