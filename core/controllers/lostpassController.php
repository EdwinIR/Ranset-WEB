<?php
if(!isset($_SESSION['app_id']) and isset($_GET['key'])) {
  $db = new Conexion();
  $keypass = $db->real_escape_string($_GET['key']);
  $sql = $db->query("SELECT id_persona,new_pass FROM tbusuario WHERE keypass='$keypass' LIMIT 1;");
  $password = "asasasas";
  if($db->rows($sql) > 0) {
    $data = $db->recorrer($sql);
    $id_user = $data[0];
    $new_pass = Encrypt($data[1]);
    $password = $data[1];
    $db->query("UPDATE tbusuario SET keypass='',new_pass='',contrasena='$new_pass' WHERE id_persona='$id_user';");
    include('html/lostpass_mensaje.php');
  } else {
    header('location: ?view=index');
  }
  $db->liberar($sql);
  $db->close();
} else {
  header('location: ?view=index');
}
?>