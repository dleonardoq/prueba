<?php

    require_once('../../util/ClassConnection.php');

    class EpsDAO extends ClassConnection{

        public function listarEps(){

            $sql = "SELECT * FROM prueba.eps;";

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