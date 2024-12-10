<?php headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i><?= $data['page_title'] ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
  </div>
  <div class="row">

    <div class="tile" style="width: 100% !important;">>
      <div class="tile-bodyy">CATALOGO DE PRODUCTOS</div>
      <div id="lista-productos" style="width: 100% !important;">
        <h1 id="encabezado" class="encabezado">Infortec Productos</h1>

        <div class="content-productos">
          <?php
          $arrProductos = $data['page_laptops'];
          foreach ($arrProductos as $key => $value) {
            ?>
            <div class="card">
              <img src="<?= media(); ?>/images/laptop-lenovo.jpg" style="object-fit: contain;"
                class="imagen-producto u-full-width" data-id="007">
              <div class="info-card">
                <h4><?= $value["nombre_producto"] ?></h4>
                <p hidden><?=$value["especificaciones"] ?></p>
                <p>Referencia 024010</p>
                <p class="stock">!Últimas unidades en stock</p>
                <img src="<?= media(); ?>/images/estrellas.png">
                <p class="precio">S/.1639<span class="u-pull-right">S/.<?= $value["precio"] ?></span></p>
                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="007">Agregar Al
                  Carrito</a>
              </div>
            </div>
            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-007" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios"
                style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-007" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-007"></h2>
                  <p id="descripcionProducto-007"></p>
                  <p id="precioProducto-007"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="007">Agregar Al
                Carrito</a>
            </div>
            <?php
          }
          ?>


        </div>
      </div>
    </div>

  </div>
  </div>
</main>
<?php footerAdmin($data); ?>