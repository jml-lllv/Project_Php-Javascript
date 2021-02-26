
<?php
require_once ('model.php');

$modelo = new Model();


if(isset($_POST['user']))
{

  $usuario = $_POST['user'];
  $password = $_POST['password'];
  $mensaje = "";

  $resultado = $modelo->login($usuario, $password);

  if($resultado != 0)
  {
    $mensaje = "Bienvenido al portal: ".$usuario;
  }
  else
  {
    $mensaje = "Usuario Incorrecto";
  }
  echo json_encode(array("html" => $mensaje, "resultado" => $resultado));
}
?>
