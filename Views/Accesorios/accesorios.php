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
                <div id="lista-cursos" class="container">
                <h1 id="encabezado" class="encabezado">Infortec Accesorios</h1>
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="<?= media();?>/images/2.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                        <p>Juan Pedro</p>
                        <img src="<?= media();?>/images/estrellas.png">
                        <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso2.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Curso de Comida Vegetariana</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso3.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Guitarra para Principiantes</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="<?= media();?>/images/curso4.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Huerto en tu casa</h4>
                        <p>Juan Pedro</p>
                        <img src="<?= media();?>/images/estrellas.png">
                        <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso5.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Decoración con productos de tu hogar</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso1.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Diseño Web para Principiantes</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="<?= media();?>/images/curso2.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Comida Mexicana para principiantes</h4>
                        <p>Juan Pedro</p>
                        <img src="<?= media();?>/images/estrellas.png">
                        <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso3.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Estudio Musical en tu casa</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso4.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Cosecha tus propias frutas y verduras</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="<?= media();?>/images/curso5.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Prepara galletas caseras</h4>
                            <p>Juan Pedro</p>
                            <img src="<?= media();?>/images/estrellas.png">
                            <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="<?= media();?>/images/curso1.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>JavaScript Moderno con ES6</h4>
                                <p>Juan Pedro</p>
                                <img src="<?= media();?>/images/estrellas.png">
                                <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="<?= media();?>/images/curso2.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>100 Recetas de Comida Natural</h4>
                                <p>Juan Pedro</p>
                                <img src="<?= media();?>/images/estrellas.png">
                                <p class="precio">$200  <span class="u-pull-right ">$15</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
    </div>  
          </div>

        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>
    