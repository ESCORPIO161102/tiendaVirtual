<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Tienda Virtual Abel OSH">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title><?= $data['page_tag'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
      <link rel="stylesheet" type="text/css"  href="<?= media(); ?>/css/normalize.css">
    <link rel="stylesheet"  type="text/css" href="<?= media(); ?>/css/skeleton.css">
    <link rel="stylesheet"  type="text/css" href="<?= media(); ?>/css/custom.css">
    
  </head>
  <body class="app sidebar-mini">
    <br>

     <div class="alert-container">
    </div>
   
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/laptops">Tienda Virtual</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fas fa-bars"></i></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li align="center" class="submenu"><i class="fa-solid fa-cart-shopping fa-bounce" style="color: #fbae09;"></i>
                  
                  <div id="carrito">     
                    <table id="lista-carrito" class="u-full-width">
                        <thead>
                          <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                            </table>
                            <a href="#" id="comprar" class="button u-full-width">Comprar</a>
                          <a href="#" id="vaciar-carrito" type="button" class="button u-full-width">Vaciar Carrito</a>
                          
                          </div>
                          </li>
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" id="Profile" href="<?= base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" id="exit-site" ><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php require_once("nav_admin.php"); ?> 