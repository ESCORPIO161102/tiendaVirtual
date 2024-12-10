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
                <img src="<?= media(); ?>/images/laptop-lenovo.jpg" style="object-fit: contain;" class="imagen-producto u-full-width" data-id="007">
                <div class="info-card">
                  <h4>LAPTOP LENOVO V15 G3 IAP I3-1215U 8GB 256GB SSD 15.6’’ FHD FREEDOS ( 82TT00CVLM )</h4>
                  <p hidden>Referencia 024010</p>
                  <p>Referencia 024010</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.1639<span class="u-pull-right">S/.1229</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="007">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-007" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-007" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-lenovo1.jpg" class="imagen-producto u-full-width" data-id="008">
                <div class="info-card">
                  <h4>LAPTOP LENOVO V15 G4 AMN RYZEN 3-7320U 8GB DDR5 256GB SSD 15.6( 82YU00X4LM )</h4>
                  <p hidden>Referencia 024195</p>
                  <p>Referencia 024195</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.1639 <span class="u-pull-right">S/.1229 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="008">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 008 -->
            <div id="detallesProducto-008" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-008" src="<?= media(); ?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-lenovo2.jpg" class="imagen-producto u-full-width" data-id="009">
                <div class="info-card">
                  <h4>LAPTOP LENOVO IDEAPAD 1 15AMN7 RYZEN 3-7320U 8GB 512GB SSD 15.6" FHD FREEDOS ( 82VG00HALM )</h4>
                  <p hidden>Referencia 024195</p>
                  <p>Referencia 024195</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.1666 <span class="u-pull-right">S/.1249 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="009">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-009" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-009" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-hp.jpg" class="imagen-producto u-full-width" data-id="001">
                <div class="info-card">
                  <h4>LAPTOP HP 15-FD0002LA I3-N305 8GB 256GB SSD 15.6 FHD WINDOWS 11 (80M38LA-ABM)</h4>
                  <p hidden>Referencia 027012</p>
                  <p>Referencia 027012</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.1724<span class="u-pull-right">S/.1379 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="001">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-001" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-001" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-dell-inspiron.jpg" class="imagen-producto u-full-width" data-id="002">
                <div class="info-card">
                  <h4>LAPTOP DELL INSPIRON 3520 I5-1235U 8GB 512GB SSD 15.6 FHD FREEDOS ( HKG75 )</h4>
                  <p hidden>Referencia 026420</p>
                  <p>Referencia 026420</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2186<span class="u-pull-right">S/.1639</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="002">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-002" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-002" src="<?= media(); ?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-hp-255.jpg" class="imagen-producto u-full-width" data-id="003">
                <div class="info-card">
                  <h4>LAPTOP HP 255 G10 RYZEN 5-7530U 8GB 512GB SSD 15.6 HD FREEDOS ( 81Z35LT-ABM )</h4>
                  <p hidden>Referencia 026527</p>
                  <p>Referencia 026527</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2212 <span class="u-pull-right">S/.1659</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="003">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-003" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-003" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-asus.jpg" class="imagen-producto u-full-width" data-id="004">
                <div class="info-card">
                  <h4>LAPTOP ASUS VIVOBOOK E1504FA-NJ545 RYZEN 5-7520U 16GB 512GB SSD 15.6 FHD FREEDOS ( 90NB0ZR3-M01CM0 )</h4>
                  <p hidden>Referencia 026126</p>
                  <p>Referencia 026126</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2426 <span class="u-pull-right">S/.1819</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="004">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-004" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-004" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-lenovo3.jpg" class="imagen-producto u-full-width" data-id="005">
                <div class="info-card">
                  <h4>CLAPTOP LENOVO IDEAPAD 1 15ALC7 RYZEN 7-5700U 16GB 512GB SSD 15.6" ( 82R400ACLM )</h4>
                  <p hidden>Referencia 025102</p>
                  <p>Referencia 025102</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2572<span class="u-pull-right">S/.1929 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="005">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-005" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-005" src="<?= media(); ?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
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
                <img src="<?= media(); ?>/images/laptop-acer.jpg" class="imagen-producto u-full-width" data-id="006">
                <div class="info-card">
                  <h4>LAPTOP ACER ASPIRE AL16-51P-74AV I7-1255U 16GB 512GB SSD 15.6 FHD FREEDOS (NX.KX0AL.003)</h4>
                  <p hidden>Referencia 026701</p>
                  <p>Referencia 026701</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2962<span class="u-pull-right">S/.2369</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="006">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-006" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-006" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-006">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-006">Descripción del producto aquí.</p>
                  <p id="precioProducto-006">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="006">Agregar Al Carrito</a>
            </div>
          </div>

          <div class="row">
            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap11.jpg" class="imagen-producto u-full-width" data-id="00412">
                <div class="info-card">
                  <h4>LAPTOP DELL LATITUDE 5421 I7-11850H VPRO 8GB 256GB SSD T VIDEO MX450 2GB 14 HD WINDOWS 10 PRO (L5421I7TGS8256W10P3W)</h4>
                  <p hidden>Referencia 026126</p>
                  <p>Referencia 022170</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.3515 <span class="u-pull-right">S/.2812</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00412">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-00412" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00412" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00412"></h2>
                  <p id="descripcionProducto-00412"></p>
                  <p id="precioProducto-00412"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00412">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap12.jpg" class="imagen-producto u-full-width" data-id="0027">
                <div class="info-card">
                  <h4>LAPTOP GAMER HP VICTUS 15-FB0125LA RYZEN 7-5800H 16GB 512GB SSD T. VIDEO RTX 3050 4GB</h4>
                  <p hidden>Referencia 026680</p>
                  <p>Referencia 026680</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/S/.3689<span class="u-pull-right">S/.3689</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0027">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-0027" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-0027" src="<?= media(); ?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-0027">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-0027">Descripción del producto aquí.</p>
                  <p id="precioProducto-0027">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0027">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap22.jpg" class="imagen-producto u-full-width" data-id="0026">
                <div class="info-card">
                  <h4>LAPTOP GAMER ACER NITRO V15 ANV15-51-7353 I7-13620H 16GB DDR5 512GB SSD </h4>
                  <p hidden>Marca : Acer
                    Modelo : ANV15-51-7353
                    Producto : Laptop Gamer
                    Procesador : Intel Core I7-13620H 10 Núcleos
                    Tarjeta de video : NVIDIA RTX 3050 6GB
                    Memoria RAM : 16GB DDR5 - 4800 MHz
                    Almacenamiento : 512GB SSD M.2
                    Pantalla : 15.6" FHD IPS 144Hz
                    Teclado : Español - Retroiluminado
                    Sistema Operativo : Windows 11</p>
                  <p>Referencia 026817</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio"> S/.5563<span class="u-pull-right">S/.4450</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0026">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-0026" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-0026" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-0026">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-0026">Descripción del producto aquí.</p>
                  <p id="precioProducto-0026">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0026">Agregar Al Carrito</a>
            </div>
          </div>

          <div class="row">

            <!-- Producto 1 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/laptop-gamer1.jpg" style="object-fit: contain !important;" class="imagen-producto u-full-width" data-id="0029">
                <div class="info-card">
                  <h4>LAPTOP GAMER HP VICTUS</h4>
                  <p hidden>Marca : HP
                    Modelo : VICTUS 16-S1023
                    Producto : Laptop
                    Procesador : AMD Ryzen 7 8845HS, 8 Núcleos
                    Tarjeta de video : Nvidia RTX 4070 8GB
                    Memoria RAM : 16GB DDR5 - 5600 MHz
                    Almacenamiento : 512GB(SSD) M.2
                    Pantalla : 16.1" FHD
                    Teclado: Ingles - Retroiluminado
                    Sistema Operativo : Windows 11
                    SKUP : ALC25</p>
                  <p hidden>Referencia 026546</p>
                  <p>Referencia 026546</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2426 <span class="u-pull-right">S/.1819</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0029">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-0029" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-0029" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-0029"></h2>
                  <p id="descripcionProducto-0029"></p>
                  <p id="precioProducto-0029"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="0029">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap33.jpg" class="imagen-producto u-full-width" data-id="00333">
                <div class="info-card">
                  <h4>CLAPTOP LENOVO IDEAPAD 1 15ALC7 RYZEN 7-5700U </h4>
                  <p hidden>Marca : Acer
                    Modelo : AN515-58-73RS
                    Producto : Laptop Gaming
                    Procesador : Intel Core I7-12650H 10 Núcleos
                    Tarjeta de video : Nvidia RTX 4050 6GB
                    Memoria RAM : 16GB DDR5 - 4800 MHz
                    Almacenamiento : 512GB SSD M.2
                    Pantalla : 15.6" FHD IPS 144Hz
                    Teclado : Inglés - Retroiluminado
                    Sistema Operativo: Windows 11
                    SKUP : ALC25</p>
                  <p>Referencia 025102</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.2572<span class="u-pull-right">S/.1929 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00333">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-00333" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00333" src="<?= media(); ?>/iimages/lap33.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00333">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-00333">Descripción del producto aquí.</p>
                  <p id="precioProducto-00333">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00333">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap66.jpg" class="imagen-producto u-full-width" data-id="00666">
                <div class="info-card">
                  <h4>LAPTOP GAMER MSI THIN 15 B12UDX-2224US</h4>
                  <p hidden>Marca : MSI
                    Modelo : B12UDX-2224US
                    Producto : Laptop Gamer
                    Procesador : Intel Core I5-12450H 8 Núcleos
                    Tarjeta de video : NVIDIA RTX 3050 4GB
                    Memoria RAM : 8GB DDR4 - 3200 MHz
                    Almacenamiento : 512GB SSD M.2
                    Pantalla : 15.6" FHD IPS 144Hz
                    Teclado : Inglés - Retroiluminado
                    Sistema Operativo : Windows 11
                    1SKUP: DM032</p>
                  <p>Referencia 026859</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.4070 <span class="u-pull-right">S/.3256</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00666">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-00666" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00666" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00666">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-00666">Descripción del producto aquí.</p>
                  <p id="precioProducto-00666">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00666">Agregar Al Carrito</a>
            </div>
          </div>

          <div class="row">

            <!-- Producto 1 -->

            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap77.jpg" class="imagen-producto u-full-width" data-id="00444">
                <div class="info-card">
                  <h4>LAPTOP HP ELITEBOOK 840 G10 I5-1335U 16GB 512GB SSD 14 FHD WINDOWS 11 PRO (846V6LT)</h4>
                  <p hidden>Marca: HP
                    Modelo: ELITEBOOK 840 G10
                    Producto: Laptop
                    Procesador: Intel Core I5-1335U 10 Núcleos
                    Tarjeta de Video: Intel Iris Xe Graphics
                    Memoria RAM: 16GB DDR5 - 5200 MHz
                    Almacenamiento: 512GB(SSD)
                    Pantalla: 14" FHD
                    Sistema Operativo: Windows 11 Pro
                    SKUP: NE008</p>
                  <p>Referencia 025176</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.7450<span class="u-pull-right">S/.5960 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00444">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 1 -->
            <div id="detallesProducto-00444" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00444" src="<?= media(); ?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00444"></h2>
                  <p id="descripcionProducto-00444"></p>
                  <p id="precioProducto-00444"></p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00444">Agregar Al Carrito</a>
            </div>

            <!-- Producto 2 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap133.jpg" class="imagen-producto u-full-width" data-id="00515">
                <div class="info-card">
                  <h4>LAPTOP HP PROBOOK 445 G10 RYZEN 7-7730U 16GB 512GB SSD 14 FHD WINDOWS 11 PRO (9S640LA-ABM)</h4>
                  <p hidden>Referencia 025102</p>
                  <p>Referencia 026451</p>
                  <p class="stock">⚠️ !Consultar</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio">S/.4101<span class="u-pull-right">S/.2871 </span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00515">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 2 -->
            <div id="detallesProducto-00515" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00515" src="<?= media(); ?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00515">Curso de Comida Vegetariana</h2>
                  <p id="descripcionProducto-00515">Descripción del producto aquí.</p>
                  <p id="precioProducto-00515">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00515">Agregar Al Carrito</a>
            </div>

            <!-- Producto 3 -->
            <div class="four columns">
              <div class="card">
                <img src="<?= media(); ?>/images/lap000.jpg" class="imagen-producto u-full-width" data-id="00615">
                <div class="info-card">
                  <h4>APTOP GAMER DELL ALIENWARE M16 R1 I7-13700HX</h4>
                  <p hidden>Marca : Dell
                    Modelo : Alienware M16 R1
                    Producto : Laptop Gaming
                    Procesador : Intel Core I7-13700HX 16 Núcleos
                    Tarjeta de video : NVIDIA RTX 4070 8GB
                    Memoria RAM : 16GB DDR5 - 4800MHz
                    Almacenamiento : 1TB SSD M.2
                    Pantalla : 16" WQXGA 165Hz
                    Teclado : Inglés - Retroiluminado
                    Sistema Operativo : Windows 11
                    SKUP : DE001</p>
                  <p>Referencia 024837</p>
                  <p class="stock">!Últimas unidades en stock</p>
                  <img src="<?= media(); ?>/images/estrellas.png">
                  <p class="precio"> S/.13013<span class="u-pull-right">S/.10411</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00615">Agregar Al Carrito</a>
                </div>
              </div>
            </div>

            <!-- Detalles del producto 3 -->
            <div id="detallesProducto-00615" class="detalles-producto oculto">
              <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
              <div class="contenido-detalles">
                <img id="imagenProducto-00615" src="<?= media(); ?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                  <h2 id="tituloProducto-00615">Guitarra para Principiantes</h2>
                  <p id="descripcionProducto-00615">Descripción del producto aquí.</p>
                  <p id="precioProducto-00615">Precio: $200.00</p>
                </div>
              </div>
              <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="00615">Agregar Al Carrito</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<?php footerAdmin($data); ?>