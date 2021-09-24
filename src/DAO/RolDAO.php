<?php

    require_once('../../util/ClassConnection.php');

    class RolDAO extends ClassConnection{

        public function listarRoles(){

            $sql = "SELECT * FROM prueba.roles;";

            try {

                $pstm = $this->connection->prepare($sql);

                $pstm->execute();

                $res = $pstm->fetchAll(PDO::FETCH_ASSOC);

                return $res;


            } catch (PDOEception $ex) {
                echo "Error -> ".$ex->getMessage();
            }

        }

    }

?>