<?php

    require_once('../VO/UsuariosVO.php');
    require_once('../DAO/UsuariosDAO.php');


    $option = $_POST['option'];

    if($option == '1' || $option == '2'){
        $documento = $_POST['documento'];
        $password = $_POST['pass'];
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $fecha = $_POST['fecha'];
        $telefono = $_POST['telefono'];
        $eps = $_POST['eps'];
        $rol = $_POST['rol'];
    }


    switch ($option) {
        case '1':

            $UsuVO =  new UsuariosVO($documento, $nombre, $password, $genero, $fecha, $telefono, $eps, $rol);
            $UsuDAO = new UsuariosDAO($UsuVO);

            $resul = $UsuDAO->insertarUsuario();

            echo $resul;

            break;
        case '2':

            $id=$_POST['id'];

            $UsuVO =  new UsuariosVO($documento, $nombre, $password, $genero, $fecha, $telefono, $eps, $rol);
            $UsuDAO = new UsuariosDAO($UsuVO);

            $resul = $UsuDAO->actualizarUsuario($id);

            echo $resul;

            break;
        case '3':

            $documento = $_POST['documento'];

            $UsuVO = UsuariosVO::__construct2($documento);
            $UsuDAO = new UsuariosDAO($UsuVO);

            $resul = $UsuDAO->eliminarUsuario();

            echo $resul;

            break;
        default:
            # code...
            break;
    }


?>