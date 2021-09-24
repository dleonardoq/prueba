<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="./node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
</head>
<body>

    <section class="container">

        <div class="row">
            <div class="col-md-6">
                <form action="" id="form_ingreso">
                    <div class="form-floating mb-3 mt-4">
                        <input type="number" class="form-control" id="documento" placeholder="Ingrese el numero de documento" required>
                        <label for="documento">Ingrese el numero de documento</label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <input type="password" class="form-control" id="password" placeholder="Ingrese el numero el password" required>
                        <label for="password">Ingrese el numero el password</label>
                    </div>

                    <button class="btn btn-info"> Ingresar </button>
                </form>
            </div>
        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/validar_ingreso.js"></script>
</body>
</html>