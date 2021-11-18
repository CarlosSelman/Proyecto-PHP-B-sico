<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $edad = $_POST["txtEdad"];
    $genero = $_POST["txtGenero"];
    $mail = $_POST["txtMail"];
    $direccion = $_POST["txtDireccion"];
    $telefono = $_POST["txtTel"];
    $salario = $_POST["txtSalario"];

    $sentencia = $bd->prepare("UPDATE clientes SET nombre = ?,apellido = ?, edad = ?, genero = ?, mail = ?, direccion = ?, telefono = ?, salario = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre,$apellido,$edad,$genero,$mail,$direccion,$telefono,$salario,$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>