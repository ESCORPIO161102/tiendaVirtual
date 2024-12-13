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

    <div class="tile" style="width: 100% !important;">
      <div class="tile-bodyy">CATALOGO DE ACCESORIOS </div>
      <div id="lista-productos" style="width: 100% !important;">
        <h1 id="encabezado" class="encabezado">Infortec Productos</h1>

        <div class="content-productos">
          <?php
          $arrProductos = $data['page_accesorios'];
          foreach ($arrProductos as $key => $value) {
            ?>
            <div class="card">
              <img src="uploads/<?=$value["imagen"] ?>" style="object-fit: contain;"
                class="imagen-producto u-full-width" data-id="<?=$value["idproductoacc"] ?>">
              <div class="info-card">
                <h4><?= $value["nombre_producto"] ?></h4>
                <p><?= $value["color"] ?></p>
                <p hidden><?=$value["especificaciones"] ?></p>
                <p hidden id="ca">Categoria : <?=$value["categoria"] ?></p>
                <p>Productos Originales con Garantía</p>
                <p class="stock">!Últimas unidades en stock</p>
                <img src="<?= media(); ?>/images/estrellas.png">
                <p class="precio"><span class="u-pull-right">S/.<?= $value["precio"] ?></span></p>
                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?=$value["idproductoacc"] ?>">Agregar Al
                  Carrito</a>
              </div>
            </div>
            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-<?=$value["idproductoacc"] ?>" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios"
                style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-<?=$value["idproductoacc"] ?>" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-<?=$value["idproductoacc"] ?>"></h2>
                  <p id="descripcionProducto-<?=$value["idproductoacc"] ?>"></p>
                  <p id="categoriaProducto-<?=$value["idproductoacc"] ?>"></p>
                  <p id="precioProducto-<?=$value["idproductoacc"] ?>"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?=$value["idproductoacc"] ?>">Agregar Al
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