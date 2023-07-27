<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

// Slugs das categorias que você deseja exibir
$selected_category_slugs = array('12-litros-flex', 'autoclaves', 'acessorios', 'perifericos', 'horizontais', 'verticais');

// Obtém os detalhes das categorias pelos slugs
$selected_categories = array();
foreach ($selected_category_slugs as $slug) {
    $category = get_term_by('slug', $slug, 'product_cat');
    if ($category) {
        $selected_categories[] = $category;
    }
}

get_header( 'shop' );

// Slugs das categorias que você deseja exibir
$selected_category_slugs = array('12-litros-flex', 'autoclaves', 'acessorios', 'perifericos', 'horizontais', 'verticais');

// Obtém os detalhes das categorias pelos slugs
$selected_categories = array();
foreach ($selected_category_slugs as $slug) {
    $category = get_term_by('slug', $slug, 'product_cat');
    if ($category) {
        $selected_categories[] = $category;
    }
}
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
          <p>
            <?php
              if (!empty($selected_categories)) {
                echo '<section class="secaoNav">';
                echo '<div class="container">';
                echo '<div class="row">';
                echo '<div class="col-md-12">';
                echo '<p>';

                $total_categories = count($selected_categories);
                $i = 0;
                
                foreach ($selected_categories as $category) {
                  $i++;
                  echo '<a href="' . get_term_link($category) . '">' . $category->name . '</a>';
                  if ($i < $total_categories) {
                      echo '|';
                  }
                }
            
                echo '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
              }
            ?>
          </p>  
        </div>
      </div>
    </div>
  </section>

  <section class="pagina-produtos">

    <section class="produtos">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="produto.html">
              <img src="<?php bloginfo("template_url");?>/img/prod1.jpg" alt="">
              <h3>Autoclave Vertical Super Top</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod2.jpg" alt="">
              <h3>Autoclave Box Analógica C.C.S</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod3.jpg" alt="">
              <h3>Autoclave Eco Análogica</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod1.jpg" alt="">
              <h3>Autoclave Vertical Super Top</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod2.jpg" alt="">
              <h3>Autoclave Box Analógica C.C.S</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod3.jpg" alt="">
              <h3>Autoclave Eco Análogica</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod1.jpg" alt="">
              <h3>Autoclave Vertical Super Top</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="produto">
            <a href="">
              <img src="<?php bloginfo("template_url");?>/img/prod2.jpg" alt="">
              <h3>Autoclave Box Analógica C.C.S</h3>
              <button>Ver detalhes</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    </section>
    
  </section>

<?php get_footer( 'shop' ); ?>
