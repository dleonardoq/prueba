<?php

    require_once('../../util/ClassConnection.php');
    require_once('../VO/UsuariosVO.php');

    class UsuariosDAO extends ClassConnection{

        private $documento;
        private $nombre;
        private $password;
        private $genero;
        private $fechaNacimiento;
        private $telefono;
        private $eps;
        private $rol;

        public function __construct(UsuariosVO $usuarioVO){

            try {

                parent::__construct();

                $this->documento = $usuarioVO->getDocumento();
                $this->nombre = $usuarioVO->getNombre();
                $this->password = $usuarioVO->getPassword();
                $this->genero = $usuarioVO->getGenero();
                $this->fechaNacimiento = $usuarioVO->getFechaNacimiento();
                $this->telefono = $usuarioVO->getTelefono();
                $this->eps = $usuarioVO->getEps();
                $this->rol = $usuarioVO->getRol();


            } catch (Exception $ex) {
                echo "Error -> ". $ex->getMessage();
            }

        }

        public function insertarUsuario(){

            $sqlInsert = "INSERT INTO prueba.usuarios(documento, nombre, password_usuario, genero, fecha_nacimiento, telefono, eps_id, rol_id, create_at)
                            VALUES(:documento, :nombre, :pass, :genero, :fecha, :telefono, :eps, :rol, :creat);";

            try {

                $pstm = $this->connection->prepare($sqlInsert);

                $pstm->bindValue(':documento', $this->documento);
                $pstm->bindValue(':nombre', $this->nombre);
                $pstm->bindValue(':pass', md5($this->password));
                $pstm->bindValue(':genero', $this->genero);
                $pstm->bindValue(':fecha', $this->fechaNacimiento);
                $pstm->bindValue(':telefono', $this->telefono);
                $pstm->bindValue(':eps', $this->eps);
                $pstm->bindValue(':rol', $this->rol);
                $pstm->bindValue(':creat', date("Y-m-d H:i:s"));

                $pstm->execute();

                $row = $pstm->rowCount();

                return $row;

            } catch (PDOException $ex) {
                echo "Error -> ".$ex->getMessage();
            }


        }

        public function listarUsuario(){

            $sqlListar = "SELECT U.nombre
                                    ,U.documento
                                    ,U.genero
                                    ,REPLACE(TO_CHAR(AGE(NOW(), U.fecha_nacimiento), 'YYY'),'0', '') AS edad
                                    ,telefono
                                    ,E.nombre AS eps
                                    ,R.nombre AS rol
                            FROM prueba.usuarios U
                            INNER JOIN prueba.eps E
                                ON U.eps_id = id_eps
                            INNER JOIN prueba.roles R
                                ON U.rol_id = R.id_roles";

            $pstm = $this->connection->prepare($sqlListar);

            $pstm->execute();

            $res = $pstm->fetchAll(PDO::FETCH_ASSOC);

            return $res;

        }

        public function eliminarUsuario(){

            $sqlEliminar = "DELETE FROM prueba.usuarios WHERE documento = :id";

            try {

                $pstm = $this->connection->prepare($sqlEliminar);
                $pstm->bindValue('id', $this->documento);

                $pstm->execute();

                $row = $pstm->rowCount();

                if($row != 0)
                    return 1;
                else
                    return 2;


            } catch (PDOException $ex) {
                echo "Error al eliminar el usuario ".$ex->getMessage();
            }

        }

        public function actualizarUsuario($id){
            $sqlActualizar = "UPDATE prueba.usuarios SET documento= :doc, nombre = :nom, password_usuario=:pass, genero = :gen, fecha_nacimiento = :fech, telefono = :tel, eps_id = :eps, rol_id = :rol WHERE documento = :id";

            try {

                $pstm = $this->connection->prepare($sqlActualizar);
                $pstm->bindValue(':doc', $this->documento);
                $pstm->bindValue(':nom', $this->nombre);
                $pstm->bindValue(':pass', md5($this->password));
                $pstm->bindValue(':gen', $this->genero);
                $pstm->bindValue(':fech', $this->fechaNacimiento);
                $pstm->bindValue(':tel', $this->telefono);
                $pstm->bindValue(':eps', $this->eps);
                $pstm->bindValue(':rol', $this->rol);
                $pstm->bindValue(':id', $id);

                $pstm->execute();

                $row = $pstm->rowCount();

                return $row;

            } catch (PDOException $ex) {
                echo "Error  al actualizar el usuario: ".$ex->getMessage();
            }

        }

    }

?>