<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from clientes where id = ?;");
    $sentencia->execute([$id]);
    $clientes = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>


<div class="container mt-5">
     <!-- Card de información -->
    <div class="card text-center">
        <h5 class="card-header">Editando Datos</h5>
        <div class="card-body">
            <p class="card-text">A continuación se muestra un formulario con los datos que se pueden editar del registro seleccionado previamente.</p>
        </div>
    </div>
    <br>    
    <!-- Fin de Card de Información -->    
    <div class="card">
        <form class="p-4" method="POST" action="editarProceso.php">

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtNombre" required 
                    value="<?php echo $clientes->nombre; ?>">
                <span class="input-group-text"><i class="bi bi-justify"></i></span>
                <input type="text" class="form-control" name="txtApellido" required 
                    value="<?php echo $clientes->apellido; ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Edad</span>
                <input type="number" class="form-control" name="txtEdad" autofocus required
                    value="<?php echo $clientes->edad; ?>">
                <span class="input-group-text"><i class="bi bi-calendar2-minus"></i></span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-female"></i><i class="bi bi-gender-male"></i></span>
                <input type="text" class="form-control" name="txtGenero" autofocus required
                    value="<?php echo $clientes->genero; ?>">
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control" name="txtMail" autofocus required
                    value="<?php echo $clientes->mail; ?>">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-envelope-check-fill"></i></span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input type="text" class="form-control" name="txtTel" autofocus required
                    value="<?php echo $clientes->telefono; ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Q</span>
                <input type="number" class="form-control" name="txtSalario" autofocus required
                    value="<?php echo $clientes->salario; ?>">
                <span class="input-group-text"><i class="bi bi-cash-stack"></i></span>
            </div>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-fill"></i> Dirección:</span>
                <input class="form-control" name="txtDireccion" autofocus required
                    value="<?php echo $clientes->direccion; ?>">
            </div>
            <br>
            <div class="d-grid">
                <input type="hidden" name="id" value="<?php echo $clientes->id; ?>">
                <input type="submit" class="btn btn-outline-success" value="Editar">
            </div>
        </form>
    </div>
</div>
<br>
<br>
<?php include 'template/footer.php' ?>


