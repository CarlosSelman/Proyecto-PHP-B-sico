<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from clientes");
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<?php
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= crud.xls");
?>

<table>
    <thead>
        <tr>
        <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Genero</th>
            <th scope="col">Mail</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Salario</th>            
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
            </tr>
            <?php 
            }
            ?>
        </tbody>
</table>

   