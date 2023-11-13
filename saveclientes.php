<?php

include('db.php');

if (isset($_POST['saveclientes'])) {
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $id_venta = $_POST['id_venta'];
  $estilo = $_POST['estilo'];
  $descuento = $_POST['descuento'];
  $correo = $_POST['correo'];

  $query = "INSERT INTO clientes(nombre, direccion, telefono, id_venta, estilo, descuento, correo) VALUES ('$nombre', '$direccion','$telefono', '$id_venta','$estilo', '$descuento','$correo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>