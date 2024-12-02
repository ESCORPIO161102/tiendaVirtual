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
        <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="44">
        <div class="info-card" >
            <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
            <p hidden>Jufsdagfdan Pedrohdgjcxdxxxxxxxxxxxxx
                xxxxxxxxxxxxxxxxxxxxxxxxbvnnnnnnnnnn
                nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
                nnnnnnnnnnnn
                nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
                nnnnnnnnnnnnnn
                nnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</p>
            <img src="<?= media();?>/images/estrellas.png">
            <p class="precio">$200 <span class="u-pull-right">$15</span></p>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="44">Agregar Al Carrito</a>
        </div>
    </div>
</div>

       <!-- Detalles del producto 1 -->
<div id="detallesProducto-44" class="detalles-producto oculto">
    <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
    <div class="contenido-detalles">
        <img id="imagenProducto-44" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
        <div class="info-detalles">
            <h2 id="tituloProducto-44"></h2>
            <p id="descripcionProducto-44"></p>
            <p id="precioProducto-44"></p>
        </div>
    </div>
    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="44">Agregar Al Carrito</a>
</div>


        <!-- Producto 2 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="22">
                <div class="info-card">
                    <h4>Curso de Comida Vegetariana</h4>
                    <p hidden>JuanJuan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro Pedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="22">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 2 -->
        <div id="detallesProducto-22" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-22" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles" data-id="22">
                <div class="info-detalles">
                    <h2 id="tituloProducto-22">Curso de Comida Vegetariana</h2>
                    <p id="descripcionProducto-22">Descripción del producto aquí.</p>
                    <p id="precioProducto-22">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="22">Agregar Al Carrito</a>
            </div>

        <!-- Producto 3 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="33">
                <div class="info-card">
                    <h4>Guitarra para Principiantes</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="33">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 3 -->
        <div id="detallesProducto-33" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-33" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-33">Guitarra para Principiantes</h2>
                    <p id="descripcionProducto-33">Descripción del producto aquí.</p>
                    <p id="precioProducto-33">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="33">Agregar Al Carrito</a>
        </div>
    </div>

    <div class="row">
        <!-- Producto 1 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="111">
                <div class="info-card">
                    <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="111">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 1 -->
        <div id="detallesProducto-111" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-111" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-111">HTML5, CSS3, JavaScript para Principiantes</h2>
                    <p id="descripcionProducto-111">Descripción del producto aquí.</p>
                    <p id="precioProducto-111">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="111">Agregar Al Carrito</a>
        </div>

        <!-- Producto 2 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="222">
                <div class="info-card">
                    <h4>Curso de Comida Vegetariana</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="222">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 2 -->
        <div id="detallesProducto-222" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-222" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-222">Curso de Comida Vegetariana</h2>
                    <p id="descripcionProducto-222">Descripción del producto aquí.</p>
                    <p id="precioProducto-222">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="222">Agregar Al Carrito</a>
        </div>

        <!-- Producto 3 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="333">
                <div class="info-card">
                    <h4>Guitarra para Principiantes</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="333">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 3 -->
        <div id="detallesProducto-333" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-333" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-333">Guitarra para Principiantes</h2>
                    <p id="descripcionProducto-333">Descripción del producto aquí.</p>
                    <p id="precioProducto-333">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="333">Agregar Al Carrito</a>
        </div>
    </div>

    <div class="row">
        <!-- Producto 1 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/2.jpg" class="imagen-producto u-full-width" data-id="61">
                <div class="info-card">
                    <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="61">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 1 -->
        <div id="detallesProducto-61" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-61" src="<?= media();?>/images/2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-61">HTML5, CSS3, JavaScript para Principiantes</h2>
                    <p id="descripcionProducto-61">Descripción del producto aquí.</p>
                    <p id="precioProducto-61">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="61">Agregar Al Carrito</a>
        </div>

        <!-- Producto 2 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso2.jpg" class="imagen-producto u-full-width" data-id="62">
                <div class="info-card">
                    <h4>Curso de Comida Vegetariana</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="62">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 2 -->
        <div id="detallesProducto-62" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-62" src="<?= media();?>/images/curso2.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-62">Curso de Comida Vegetariana</h2>
                    <p id="descripcionProducto-62">Descripción del producto aquí.</p>
                    <p id="precioProducto-62">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="62">Agregar Al Carrito</a>
        </div>

        <!-- Producto 3 -->
        <div class="four columns">
            <div class="card">
                <img src="<?= media();?>/images/curso3.jpg" class="imagen-producto u-full-width" data-id="63">
                <div class="info-card">
                    <h4>Guitarra para Principiantes</h4>
                    <p hidden>Juan Pgggggggggggggggggggggggg
                        gfdddddddddddddddddddddddddddd
                        ghghghghghghghghghghghghghghghghghghghgh
                        dgffdddddddddddddddddddfffffffffffffffffffffff
                        fffffffffffffffffffffedro</p>
                    <img src="<?= media();?>/images/estrellas.png">
                    <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="63">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
        <!-- Detalles del producto 3 -->
        <div id="detallesProducto-63" class="detalles-producto oculto">
            <i class="fa-solid fa-square-xmark close-accesorios" style="color: #cf0707; float: left; font-size: 30px; cursor: pointer;"></i>
            <div class="contenido-detalles">
                <img id="imagenProducto-63" src="<?= media();?>/images/curso3.jpg" alt="Producto" class="imagen-detalles">
                <div class="info-detalles">
                    <h2 id="tituloProducto-63">Guitarra para Principiantes</h2>
                    <p id="descripcionProducto-63">Descripción del producto aquí.</p>
                    <p id="precioProducto-63">Precio: $200.00</p>
                </div>
            </div>
            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="63">Agregar Al Carrito</a>
        </div>
    </div>
    </div>  
    </div>
    </div>
    </div>
    </main>
<?php footerAdmin($data); ?>
    