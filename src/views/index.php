<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <title>Principal</title>
</head>
<body>

    <section class="container mt-4">

        <button class="btn btn-info" data-bs-toggle='modal' data-bs-target='#modalInsertar' id="insertar"> Insertar usuario </button>

        <div id="table" class="mt-5"></div>
    </section>


    <!-- Modales -->

    <?php
    require_once('./modales.php');
    ?>

    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/usuarios.js"></script>

</body>
</html>