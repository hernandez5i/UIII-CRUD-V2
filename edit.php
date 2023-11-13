<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clientes WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $id_venta = $row['id_venta'];
    $estilo = $row['estilo'];
    $descuento = $row['descuento'];
    $correo = $row['correo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $telefono= $_POST['telefono'];
  $id_venta = $_POST['id_venta'];
  $estilo= $_POST['estilo'];
  $descuento = $_POST['descuento'];
  $correo= $_POST['correo'];
 

  $query = "UPDATE clientes set nombre = '$nombre', direccion = '$direccion',telefono = '$telefono', id_venta = '$id_venta',estilo = '$estilo', descuento = '$descuento', correo = '$correo' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="direccion" class="form-control" cols="30" rows="10"><?php echo $direccion;?></textarea>
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="id_venta" class="form-control" cols="30" rows="10"><?php echo $id_venta;?></textarea>
        </div>
        <div class="form-group">
          <input name="estilo" type="text" class="form-control" value="<?php echo $estilo; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="descuento" class="form-control" cols="30" rows="10"><?php echo $descuento;?></textarea>
        </div>
        <div class="form-group">
        <textarea name="correo" class="form-control" cols="30" rows="10"><?php echo $correo;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>