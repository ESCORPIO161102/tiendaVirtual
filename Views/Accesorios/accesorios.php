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
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-bodyy">CATALOGO DE PRODUCTOS</div>
        <div id="lista-accesorios" class="container">
          <h1 id="encabezados" class="encabezado">Infortec Accesorios</h1>
          <div class="row">
            
            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="1">
                <div class="info-card">
                  <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                  <p hidden>Juan PJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-1" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-1" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-1"></h2>
                  <p id="descripcionProducto-1"></p>
                  <p id="precioProducto-1"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="2">
                <div class="info-card">
                  <h4>Curso de Comida Vegetariana</h4>
                  <p hidden>Juan Juan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-2" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-2" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-2">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-2">Descripción del producto aquí.</p>
                  <p id="precioProducto-2">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="3">
                <div class="info-card">
                  <h4>Guitarra para Principiantes</h4>
                  <p hidden>JuaJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-3" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-3" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-3">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-3">Descripción del producto aquí.</p>
                  <p id="precioProducto-3">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?>
