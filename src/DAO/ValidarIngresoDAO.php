<?php

    require_once('../../util/ClassConnection.php');
    require_once('../VO/ValidarIngresoVO.php');

    class ValidarIngresoDAO extends ClassConnection{

        private $documento;
        private $password;

        public function __construct(ValidarIngresoVO $ValidarVO){

            try {

                parent::__construct();

                $this->documento = $ValidarVO->getDocumento();
                $this->password = $ValidarVO->getPassword();


            } catch (Exception $ex) {
                echo "Error -> ".$ex->getMessage();
            }

        }

        public function ingresar(){


            $sqlValidar = "SELECT id_usuario FROM prueba.usuarios WHERE documento = :documento AND password_usuario = :pass;";

            try {

                $pstm = $this->connection->prepare($sqlValidar);
                $pstm->bindValue(':documento', $this->documento);
                $pstm->bindValue(':pass', md5($this->password));

                $pstm->execute();

                $row = $pstm->rowCount();


            } catch (PDOException $ex) {
                echo "Error al validar ingreso -> ".$ex->getMessage();
            }

            return $row;

        }

    }

?>