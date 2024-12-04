<?php 
    headerAdmin($data); 
    getModal('modalProductosRe',$data);
?>
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/registro"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableProductos">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Codigo</th>
                          <th>Nombre Producto</th>
                          <th>Especificaciones</th>
                          <th>Color</th>
                          <th>Precio</th>
                          <th>Fecha Registro</th>
                          <th>Categoria</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>654169</td>
                          <td>Henández</td>
                          <td>ram 4 gb</td>
                          <td>verde oscuro</td>
                          <td>550</td>
                          <td>02-12-2024</td>
                          <td>Activo</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>
    