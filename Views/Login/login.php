<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jhon Altamirano">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style1.css">
  </head>
  <body>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div>
      <div class="alert-container">
    </div>
        <div class="login-container">
        <h2>Iniciar Sesion</h2>
        <form class="login-form" id="login-form" autocomplete="off">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" required placeholder="Ingresa tu usuario">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
            <button type="submit">Iniciar Sesion</button>
        </form>
        <div class="foot-new-user">
            <p>¿No estas registrado?</p>
            <a href="newUser">Registrate aqui</a>
        </div>
    </div>
    </section>
    
    <!-- Essential javascripts for application to work-->
     <script src="<?= media(); ?>/js/alert.js"></script>
    <!--Fin Login-->
    <script src="<?= media(); ?>/js/functions_login.js"></script>

  </body>
</html>