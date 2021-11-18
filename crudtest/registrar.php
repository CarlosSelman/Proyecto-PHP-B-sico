<?php
    //print_r($_POST);
    if(
        empty($_POST["oculto"]) || 
        empty($_POST["txtNombre"]) || 
        empty($_POST["txtApellido"]) || 
        empty($_POST["txtEdad"]) ||
        empty($_POST["txtGenero"])  || 
        empty($_POST["txtMail"]) ||
        empty($_POST["txtDireccion"]) ||
        empty($_POST["txtTel"]) ||
        empty($_POST["txtSalario"]) 
        
    ){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $edad = $_POST["txtEdad"];
    $genero = $_POST["txtGenero"];
    $mail = $_POST["txtMail"];
    $direccion = $_POST["txtDireccion"];
    $telefono = $_POST["txtTel"];
    $salario = $_POST["txtSalario"];

    $sentencia = $bd->prepare("INSERT INTO clientes(nombre,apellido,edad,genero,mail,direccion,telefono,salario) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$edad,$genero,$mail,$direccion,$telefono,$salario]);

    if($resultado === TRUE){
        header('Location: index.php?mensaje=registrado');
    }else{
        header('Location: index.php?mensaje=error');
        exit();
    }
?>
