<?php
    require_once('../VO/UsuariosVO.php');
    require_once('../DAO/UsuariosDAO.php');

    $UsuVO = UsuariosVO::__construct1();
    $UsuDAO = new UsuariosDAO($UsuVO);

    $res = $UsuDAO->listarUsuario();

    $color;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Genero</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">EPS</th>
                <th scope="col">ROL</th>
                <th scope="col" colspan="2" style="text-align:center" >Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

                foreach ($res as $row => $key) {

                    $edad = (int)$key['edad'];

                    if($edad > 50){
                        $color = "#FF4040";
                    }elseif($edad < 18){
                        $color="#61FF87";
                    }else{
                        $color="";
                    }

                    echo "<tr style='background-color:$color;'>
                            <td scope='col'> ".$key['nombre']." </td>
                            <td scope='col'> ".$key['documento']." </td>
                            <td scope='col'> ".$key['genero']   ." </td>
                            <td scope='col'> ".$key['edad']." </td>
                            <td scope='col'> ".$key['telefono']." </td>
                            <td scope='col'> ".$key['eps']." </td>
                            <td scope='col'> ".$key['rol']." </td>
                            <td> <button class='btn btn-success' id='enviarModalEdit' data-bs-toggle='modal' data-bs-target='#modalEditar' onClick='enviar(".$key['documento'].")'> Editar </button> </td>
                            <td> <button class='btn btn-danger' id='eliminar' onClick='eliminar(".$key['documento'].")'> Eliminar </button> </td>

                        </tr>";
                }

            ?>
        </tbody>
    </table>


</body>
</html>