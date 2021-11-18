<?php 
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from clientes");
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>



<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-11">
           
            <!-- Inicio Alertas -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] =='falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Llena todos los campos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] =='registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registrado!</strong> Se agregaron los datos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- Fin Alertas -->
            
            <!-- Card de información -->
            <div class="card text-center">
                <h5 class="card-header">Lista de Personas</h5>
                <div class="card-body">
                    <p class="card-text">A continuación se muestra una tabla, en la cual se prodrá <strong>crear</strong>, <strong>editar</strong> y <strong>eliminar</strong> datos, además se podrán <strong>exportar</strong> los mismos <strong>a Excel.</strong></p>
                </div>
            </div>
            <br>    
            <!-- Fin de Card de Información -->
            <!-- Card Tabla -->
            <div class="card">
                <div class="card-header"></div>
            <div>
                <body>
                    <div class="container-fluid">
                        <div class="pt-5">
                            <table id="team" class="display table table-striped table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Apellido</th>
                                        <th class="text-center">Edad</th>
                                        <th class="text-center">Género</th>
                                        <th class="text-center">Mail</th>
                                        <th class="text-center">Dirección</th>
                                        <th class="text-center">No. Tel</th>
                                        <th class="text-center">Salario (Q)</th>
                                        <th class="text-center">Acciones</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach($clientes as $dato){   
                                ?>
                                <tr>
                                    <td scope="row"><?php echo $dato-> id;?></td>
                                    <td><?php echo $dato-> nombre;?></td>
                                    <td><?php echo $dato-> apellido;?></td>
                                    <td><?php echo $dato-> edad;?></td>
                                    <td><?php echo $dato-> genero;?></td>
                                    <td><?php echo $dato-> mail;?></td>
                                    <td><?php echo $dato-> direccion;?></td>
                                    <td><?php echo $dato-> telefono;?></td>
                                    <td><?php echo $dato-> salario;?></td>
                                    <td>
                                        <a class="text-success" href="editar.php?id=<?php echo $dato->id; ?>"> <i class="bi bi-pencil-square"> </i></a>
                                        <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a>
                                </td>
                                </tr>
                                <?php 
                            }
                            ?>
                            </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </body>   
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="crearRegistro.php" class="btn btn-outline-primary">Crear </a>
                        <a href="./excel.php" class="btn btn-outline-success"><i class="bi bi-download"></i> Descargar Excel <i class="bi bi-file-earmark-excel"></i> </a>
                    </div>
                </div>
            </div>
        <!-- Fin Card Tabla-->
        <br>
        </div>
    </div>
</div>
<br>
<br>
<?php include 'template/footer.php' //Footer?> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  class="form-control "method="POST" action="registrar.php">
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-list-nested"></i> Nombre:</label>
                <input type="text" class="form-control" name="txtNombre" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-list-nested"></i> Apellido:</label>
                <input type="text" class="form-control" name="txtApellido" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-calendar2-minus"></i> Edad:</label>
                <input type="number" class="form-control" name="txtEdad" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-list-nested"></i> Género:</label>
                <input type="text" class="form-control" name="txtGenero" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-list-nested"></i> Mail:</label>
                <input type="email" class="form-control" name="txtMail" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-list-nested"></i> Dirección:</label>
                <input type="text" class="form-control" name="txtDireccion" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-telephone-fill"></i> No.Tel:</label>
                <input type="text" class="form-control" name="txtTel" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-telephone-fill"></i> Salario:</label>
                <input type="text" class="form-control" name="txtSalario" autofocus required>
            </div>
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-outline-primary" value="Registrar">
            </div>
        </form>                 
    </div>
  </div>
</div>