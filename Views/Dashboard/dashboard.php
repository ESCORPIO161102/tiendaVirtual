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
                <div id="lista-productos" class="container">
        <h1 id="encabezado" class="encabezado">Infortec Productos</h1>
        <div class="row">
            
            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="007">
                <div class="info-card">
                  <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                  <p hidden>Juan PJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="007">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-007" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-007" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-007"></h2>
                  <p id="descripcionProducto-007"></p>
                  <p id="precioProducto-007"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="007">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="008">
                <div class="info-card">
                  <h4>Curso de Comida Vegetariana</h4>
                  <p hidden>Juan Juan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="008">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 008 -->
            <div id="detallesProducto-008" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-008" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-008">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-008">Descripción del producto aquí.</p>
                  <p id="precioProducto-008">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="008">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="009">
                <div class="info-card">
                  <h4>Guitarra para Principiantes</h4>
                  <p hidden>JuaJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="009">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-009" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-009" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-009">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-009">Descripción del producto aquí.</p>
                  <p id="precioProducto-009">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="009">Agregar Al Carrito</a>
            </div>
          </div>

          <div class="row">
            
            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="001">
                <div class="info-card">
                  <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                  <p hidden>Juan PJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="001">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-001" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-001" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-001"></h2>
                  <p id="descripcionProducto-001"></p>
                  <p id="precioProducto-001"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="001">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="002">
                <div class="info-card">
                  <h4>Curso de Comida Vegetariana</h4>
                  <p hidden>Juan Juan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="002">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-002" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-002" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-002">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-002">Descripción del producto aquí.</p>
                  <p id="precioProducto-002">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="002">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="003">
                <div class="info-card">
                  <h4>Guitarra para Principiantes</h4>
                  <p hidden>JuaJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="003">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-003" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-003" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-003">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-003">Descripción del producto aquí.</p>
                  <p id="precioProducto-003">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="003">Agregar Al Carrito</a>
            </div>
          </div>

          <div class="row">
            
            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="004">
                <div class="info-card">
                  <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                  <p hidden>Juan PJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="004">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-004" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-004" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-004"></h2>
                  <p id="descripcionProducto-004"></p>
                  <p id="precioProducto-004"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="004">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="005">
                <div class="info-card">
                  <h4>Curso de Comida Vegetariana</h4>
                  <p hidden>Juan Juan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="005">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-005" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-005" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-005">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-005">Descripción del producto aquí.</p>
                  <p id="precioProducto-005">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="005">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="006">
                <div class="info-card">
                  <h4>Guitarra para Principiantes</h4>
                  <p hidden>JuaJuan Pgggggggggggggggggggggggg</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">$200 <span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="006">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-006" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-006" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-006">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-006">Descripción del producto aquí.</p>
                  <p id="precioProducto-006">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="006">Agregar Al Carrito</a>
            </div>
          </div>
    </div>  
    </div>
    </div>
    </div>
    </main>
<?php footerAdmin($data); ?>
    