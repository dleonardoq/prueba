<?php
    require_once('../DAO/RolDAO.php');
    require_once('../DAO/EpsDAO.php');

    $RolDAO = new RolDAO();

    $res = $RolDAO->listarRoles();

    $EpsDAO = new EpsDAO();

    $resEps = $EpsDAO->listarEps();

?>

<!-- Modal insertar -->
<div class="modal fade" id="modalInsertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formInsertar">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="number" class="form form-control mt-3" id="idocumento" placeholder="Documento" required>
                    <input type="password" class="form form-control mt-3" id="ipassword" placeholder="password" required>
                    <input type="text" class="form form-control mt-3" id="inombre" placeholder="Nombre" required>
                    <select id="igenero" class="form form-control mt-3">
                        <option value="MASCULINO"> MASCULINO </option>
                        <option value="FEMENINO"> FEMENINO </option>
                    </select>
                    <input type="date" class="form form-control mt-3" id="ifecha" placeholder="fecha de nacimiento" required>
                    <input type="number" class="form form-control mt-3" id="itelefono" placeholder="telefono" required>
                    <select id="ieps" class="form form-control mt-3">
                        <?php

                            foreach ($resEps as $row => $key) {
                                echo "<option value=".$key['id_eps']."> ".$key['nombre']." </option>";
                            }

                        ?>
                    </select>
                    <select id="irol" class="form form-control mt-3">
                        <?php

                            foreach ($res as $row => $key) {
                                echo "<option value=".$key['id_roles']."> ".$key['nombre']." </option>";
                            }

                        ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="insertar">Insertar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="formEditar">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">actualizar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="documentoUsuario">
                    <input type="number" class="form form-control mt-3" id="documento" placeholder="Documento" required>
                    <input type="password" class="form form-control mt-3" id="password" placeholder="password" required>
                    <input type="text" class="form form-control mt-3" id="nombre" placeholder="Nombre" required>
                    <select name="genero" id="genero" class="form form-control mt-3">
                        <option value="MASCULINO"> MASCULINO </option>
                        <option value="FEMENINO"> FEMENINO </option>
                    </select>
                    <input type="date" class="form form-control mt-3" id="fecha" placeholder="fecha de nacimiento" required>
                    <input type="number" class="form form-control mt-3" id="telefono" placeholder="telefono" required>
                    <select name="eps" id="eps" class="form form-control mt-3">
                        <?php

                            foreach ($resEps as $row => $key) {
                                echo "<option value=".$key['id_eps']."> ".$key['nombre']." </option>";
                            }

                        ?>
                    </select>
                    <select name="rol" id="rol" class="form form-control mt-3">
                        <?php

                            foreach ($res as $row => $key) {
                                echo "<option value=".$key['id_roles']."> ".$key['nombre']." </option>";
                            }

                        ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="editar">actualizar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>