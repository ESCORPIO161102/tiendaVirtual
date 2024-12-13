<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Jhon Altamirano">
  <meta name="theme-color" content="#009688">
  <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style1.css">
</head>

<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1><?= $data['page_title']; ?></h1>
    </div>
    <div class="alert-container"></div>
    <div class="login-container">
      <!-- Formulario inicial -->
      <h2>Recuperar Contraseña</h2>
      <form id="recover-form" autocomplete="off">
        <label for="username">Nombre de usuario</label>
        <input type="text" id="username" name="username" required placeholder="Ingresa tu nombre de usuario">
        <button type="submit">Recuperar Datos</button>
      </form>

      <!-- Datos del usuario -->
      <div id="user-details" style="display:none;">
        <h3>Datos del Usuario</h3>
        <p><strong>Nombre de usuario:</strong> <span id="display-username"></span></p>
        <p><strong>Contraseña:</strong> <span id="display-password"></span></p>
        <form id="update-password-form">
          <label for="new-password">Nueva Contraseña</label>
          <input type="password" id="new-password" name="new-password" placeholder="Ingresa nueva contraseña">
          <button type="submit">Actualizar Contraseña</button>
        </form>
      </div>
      <a href="login">Volver al login</a>
    </div>
  </section>

  <script src="<?= media(); ?>/js/alert.js"></script>
  <script src="<?= media(); ?>/js/functions_login.js"></script>
</body>

</html>
