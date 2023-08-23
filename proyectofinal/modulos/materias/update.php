<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    if(isset($_POST['nombre']))     $nombre = $_POST['nombre']; 
    if(isset($_POST['id']))         $id = $_POST['id']; 
    if(isset($_POST['horario']))    $horario = $_POST['horario']; 
    if(isset($_POST['tipo']))       $tipo = $_POST['tipo']; 
    if(isset($_POST['categoria']))  $categoria = $_POST['categoria']; 

    $conexion = new Database;  
    $result = $conexion->updateMateria($nombre,$id,$horario,$tipo,$categoria);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>