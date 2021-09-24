<?php

    require_once('../VO/ValidarIngresoVO.php');
    require_once('../DAO/ValidarIngresoDAO.php');


    $documento = $_POST['documento'];
    $password = $_POST['pass'];

    $validarVO = new ValidarIngresoVO($documento, $password);
    $validarDAO = new ValidarIngresoDAO($validarVO);

    $res = $validarDAO->ingresar();

    echo $res;


?>