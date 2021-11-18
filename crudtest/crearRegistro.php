<?php include 'template/header.php' ?>

<div class="container mt-5">
     <!-- Card de información -->
    <div class="card text-center">
        <h5 class="card-header">Agregando Datos</h5>
        <div class="card-body">
            <p class="card-text">A continuación se muestra un formulario con los campos a llenar para poder realizar el respectivo registro.</p>
        </div>
    </div>
    <br>    
    <!-- Fin de Card de Información -->    
    <div class="card">
        <form class="p-4" method="POST" action="registrar.php">

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" required>
                <span class="input-group-text"><i class="bi bi-justify"></i></span>
                <input type="text" class="form-control" name="txtApellido" placeholder="Apellido" required >
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Edad</span>
                <input type="number" class="form-control" name="txtEdad" placeholder="Edad"  autofocus required>
                <span class="input-group-text"><i class="bi bi-calendar2-minus"></i></span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-female"></i><i class="bi bi-gender-male"></i></span>
                <input type="text" class="form-control" name="txtGenero" placeholder="Género"  autofocus required>
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control" name="txtMail" placeholder="E-Mail" autofocus required>
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-envelope-check-fill"></i></span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input type="text" class="form-control" name="txtTel" placeholder="No. Telefónico" autofocus required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Q</span>
                <input type="number" class="form-control" name="txtSalario" placeholder="Salario ~ ejemplo: ####" autofocus required>
                <span class="input-group-text"><i class="bi bi-cash-stack"></i></span>
            </div>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-fill"></i> Dirección:</span>
                <input class="form-control" name="txtDireccion" placeholder="Dirección"  autofocus required>
            </div>
            <br>
            <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-outline-primary" value="Registrar">
            </div>
        </form>
    </div>
</div>
<br>
<br>
<?php include 'template/footer.php' ?>


