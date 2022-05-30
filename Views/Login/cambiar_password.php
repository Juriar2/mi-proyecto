<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/wickedcss.min.css">

    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class=""></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h2 class="halo floater"><?= $data['page_title']; ?></h2>
      </div>
      <div class="login-box flipped">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form id="formCambiarPass" name="formCambiarPass" class="forget-form" action="">
          <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required >
          <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required >
          <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required >
          <h3 class="login-head rollerRigth">Restaurar</h3>
          <div class="form-group">
            <input id="txtPassword" name="txtPassword" class="form-control floater" type="password" placeholder="Nueva contraseña" required >
          </div>
          <div class="form-group">
            <input id="txtPasswordConfirm" name="txtPasswordConfirm" class="form-control  floater" type="password" placeholder="Confirmar contraseña" required >
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="button1">Cambaiar contraseña</button>
          </div>
        </form>
      </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>