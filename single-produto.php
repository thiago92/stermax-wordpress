<?php 
get_header();
// Obtém o ID do produto atual
$product_id = get_the_ID();
// Obtém o objeto do produto com base no ID
$product = wc_get_product($product_id);

// Obtém o título do produto
$product_title = $product->get_name();

// Obtém a descrição do produto
$product_description = $product->get_description();

// Obtém o preço do produto
$product_price = $product->get_price();

// Obtém a URL da imagem em destaque do produto
$product_image_url = wp_get_attachment_url($product->get_image_id());

// Obtém a imagem em destaque (imagem principal) do produto
$product_image_url = get_the_post_thumbnail_url($product_id, 'full');

// Obtém a galeria de imagens do produto
$product_gallery = $product->get_gallery_image_ids();

// Se houver imagens na galeria, exiba-as
// if ($product_gallery) {
//   foreach ($product_gallery as $gallery_image_id) {
//     $gallery_image_url = wp_get_attachment_url($gallery_image_id);
//     echo '<div class="col-md-3 col-3">';
//     echo '<a href="' . $gallery_image_url . '" data-fancybox="images" data-caption="Produto">';
//     echo '<img src="' . $gallery_image_url . '" />';
//     echo '</a>';
//     echo '</div>';
//   }
// }
?> 

  <section class="secaoAutoclave">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Autoclaves</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="secaoNav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><a href="#">12 litros flex </a>|<a href="#"> Acessórios </a>|<a href="#"> Autoclaves </a>|<a href="#"> Lançamento Linha Flex </a>|<a href="#"> Lançamento Linha Work </a>|<a href="#"> Periféricos</a></p>  
        </div>
      </div>
    </div>
  </section>

  <section class="pagina-produto">

    <div class="container">
      <div class="row">
        <div class="col-md-7 descricao-completa">
          <div class="caminho">
            <span><a href="index.html">Início </a>/ Stermax - Produto Interno</span>
          </div>
      
          <div class="nome-produto">
            <?php echo '<h2>' . get_the_title() . '</h2>'; ?>
          </div>

          <div class="descricao">
          <?php echo '<div>' . the_content() . '</div>'; ?>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="row div-img">
            <p class="imglist"></p>
              <div class="col-md-12 col-12">
              <a href="<?php echo $product_image_url; ?>" data-fancybox="images" data-caption="<?php echo get_the_title() ; ?>">
                <img src="<?php echo $product_image_url; ?>" />
              </a>
              </div>
              <?php
                if ($product_gallery):
                  foreach ($product_gallery as $gallery_image_id): 
                    $gallery_image_url = wp_get_attachment_url($gallery_image_id);  
                    ?>
                    <div class="col-md-3 col-3">
                      <a href="<?php echo $gallery_image_url; ?>" data-fancybox="images" data-caption="<?php echo get_the_title(); ?>">
                        <img src="<?php echo $gallery_image_url;?>" />
                      </a>
                    </div>
                  <?php 
                  endforeach;
                endif;
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="uso-produto">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Uso destinado do produto:</h2>
            <p>Em sentido amplo autoclaves para uso em serviços de saúde são equipamentos utilizados para a esterilização de materiais com o uso de calor úmido sobre pressão. Apesar do nome em comum existem muitos modelos diferentes de autoclaves para os mais diversos usos, indicadas para os mais variados tipos de materiais e serviços de esterilização.</p>
            <p>Dentro das diferenças entre os variados tipos de autoclaves recomenda-se especial atenção ao uso pretendido, para o atendimento de diversas normas técnicas e para os mais variados tipos de serviços de saúde.</p>
            <p>As Autoclaves Stermax são indicadas para o uso na esterilização de artigos para saúde utilizados em consultórios médicos e odontológicos, serviços de saúde individualizados, pequenos ambulatórios, serviços de estética e tatuagens, serviços veterinários e outros serviços de esterilização de pequeno porte.</p>
            <p>Em caso de dúvida no uso pretendido, entre em contato com a Stermax. Estamos ao dispor para orientar o produto mais recomendado para sua utilização.</p>
          </div>
          <div class="col-md-12">
            <h3>Indicado para as áreas:</h3>
          </div>
          <div class="col">
            <img src="<?php bloginfo("template_url");?>/img/ico-beleza.png" alt="">
            <div class="area">
              <span>Beleza</span>
            </div>
          </div>
          <div class="col">
            <img src="<?php bloginfo("template_url");?>/img/ico-hospitalar.png" alt="">
            <div class="area">
              <span>Hospitalar</span>
            </div>
          </div>
          <div class="col">
            <img src="<?php bloginfo("template_url");?>/img/ico-odonto.png" alt="">
            <div class="area">
              <span>Odontológico</span>
            </div>
          </div>
          <div class="col">
            <img src="<?php bloginfo("template_url");?>/img/ico-tattoo.png" alt="">
            <div class="area">
              <span>Tatuagem</span>
            </div>
          </div>
          <div class="col">
            <img src="<?php bloginfo("template_url");?>/img/ico-vet.png" alt="">
            <div class="area">
              <span>Veterinária</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <?php get_footer(); ?>