<?php 
    headerAdmin($data); 
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/historial"><?= $data['page_title'] ?></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table id="historial-compras" class="u-full-width">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Incluye el archivo JS -->
<script src="<?= base_url(); ?>/assets/js/functions_historial.js"></script>
<?php footerAdmin($data); ?>
