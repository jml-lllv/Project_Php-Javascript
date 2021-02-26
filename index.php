<html>
  <head>
    <title>Proyecto PHP_AJAX</title>
    <link rel="stylesheet" href="css/style.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id='botonera'>
      <form class='loguearse'>
        <div class="form-group">
          <label for="exampleInputEmail1">Usuario</label>
          <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">loguearse</button>
        </div>
      </form>
      <div id='contenido-mensaje' style="display:none;">
        <small id="mensaje"></small>
      </div>
    </div>
  <script src="js/main.js"></script>
  </body>
  <footer>
  </footer>
</html>
