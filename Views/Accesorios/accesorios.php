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
                <img src="<?= media();?>/images/mouse.jpg" class="imagen-producto u-full-width" data-id="007">
                <div class="info-card">
                  <h4>MOUSE LOGITECH M90 (910-004053) USB | NEGRO</h4>
                  <p hidden>Referencia 003862</p>
                  <p>Referencia 003862</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.26<span class="u-pull-right">S/. 20</span></p>
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
                <img src="<?= media();?>/images/tarjeta-de-soni1.jpg" class="imagen-producto u-full-width" data-id="008">
                <div class="info-card">
                  <h4>TARJETA DE SONIDO CREATIVE BLASTER AUDIGY RX SB1550</h4>1
                  <p hidden>Referencia 023220</p>
                  <p>Referencia 023220</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.213<span class="u-pull-right">S/.170</span></p>
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
                <img src="<?= media();?>/images/hub-streamplify.jpg" class="imagen-producto u-full-width" data-id="009">
                <div class="info-card">
                  <h4>AUDIFONO LOGITECH H390 | USB | NOISE CANCELLING (981-000014)</h4>
                  <p hidden>Referencia 018609</p>
                  <p>Referencia 018609</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.137<span class="u-pull-right">S/.110</span></p>
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
                <img src="<?= media();?>/images/cargador1.png" class="imagen-producto u-full-width" data-id="001">
                <div class="info-card">
                  <h4>CARGADOR UGREEN NEXODE RG 65W 2 USB-C - 1 USB-A ( CD361 ) CARGA RAPIDA ( PN 15570 )</h4>
                  <p hidden>Referencia 025297</p>
                  <p>Referencia 025297</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.158<span class="u-pull-right">S/.111</span></p>
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
                <img src="<?= media();?>/images/hub-usb.jpg" class="imagen-producto u-full-width" data-id="002">
                <div class="info-card">
                  <h4>HUB USB UGREEN 5 EN 1 RJ45 - USB 3.0 X3 - USB-C (60554)</h4>
                  <p hidden>Referencia 024970</p>
                  <p>Referencia 024970</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/. 146<span class="u-pull-right">S/.110</span></p>
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
                <img src="<?= media();?>/images/parlante.jpg" class="imagen-producto u-full-width" data-id="003">
                <div class="info-card">
                  <h4>LAPTOP HP 255 G10 RYZEN 5-7530U 8GB 512GB SSD 15.6 HD FREEDOS ( 81Z35LT-ABM )</h4>
                  <p hidden>Referencia 026527</p>
                  <p>Referencia 026527</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.2212 <span class="u-pull-right">S/.1659</span></p>
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
                <img src="<?= media();?>/images/memoria1.jpg" class="imagen-producto u-full-width" data-id="004">
                <div class="info-card">
                  <h4>MEMORIA MICRO SD KINGSTON 256GB (SDCS2/256GB) CANVAS SLECT PLUS</h4>
                  <p hidden>Referencia 020005</p>
                  <p>Referencia 020005</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio"><span class="u-pull-right">S/.169</span></p>
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
                <img src="<?= media();?>/images/camara.jpg" class="imagen-producto u-full-width" data-id="005">
                <div class="info-card">
                  <h4>CAMARA WEB REDRAGON HITMAN GW800 ( GW800-1 ) FHD 1080P | USB</h4>
                  <p hidden>Referencia 016580</p>
                  <p>Referencia 016580</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.283<span class="u-pull-right">S/.198 </span></p>
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
                <img src="<?= media();?>/images/disco-duro.jpg" class="imagen-producto u-full-width" data-id="006">
                <div class="info-card">
                  <h4>DISCO DURO EXTERNO ADATA 1TB HD330 ( AHD330-1TU31-CBL ) AZUL</h4>
                  <p hidden>Referencia 011699</p>
                  <p>Referencia 011699</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media();?>/images/estrellas.png">
                  <p class="precio">S/.275<span class="u-pull-right">S/.220</span></p>
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
    