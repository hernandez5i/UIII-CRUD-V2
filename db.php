<?php
// Conexion con la base de datos
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bdsneackers'
)or die(mysqli_error($mysqli));


//) or die(mysqli_erro($mysqli));
//if (isset($conn)){
//    echo 'DB está conectada';
//}

?>