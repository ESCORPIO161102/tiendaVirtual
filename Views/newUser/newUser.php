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
      <!--Elemento de alertas-->
    <div class="alert-container">
    </div>
    <!--Elemento de carga o loader del app-->
   
    <!--Inicio Login-->
    <div class="login-container">
        <h2>Crear Usuario</h2>
        <form class="login-form" id="formSave" autocomplete="off">
            <label for="txtUserName">Usuario</label>
            <input type="text" id="txtUserName" name="txtUserName" required placeholder="Ingresa tu usuario">
            <label for="txtPassword1">Contraseña</label>
            <input type="password" id="txtPassword1" name="txtPassword1" required placeholder="Ingresa tu contraseña" autocomplete="off">
            <label for="txtPassword2">Confirme su contraseña</label>
            <input type="password" id="txtPassword2" name="txtPassword2" required placeholder="Ingresa tu contraseña" autocomplete="off">
            <button type="submit">Crear Usuario</button>
        </form>
        <div class="foot-new-user">
            <p>¿Tienes una cuenta?</p>
            <a href="login">Ingresa aqui</a>
        </div>
    </div>
   <!-- Essential javascripts for application to work-->
     <script src="<?= media(); ?>/js/alert.js"></script>
    <!--Fin Login-->
    <script src="<?= media(); ?>/js/function_users.js"></script>

  </body>
</html>