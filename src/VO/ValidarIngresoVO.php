<?php

    class ValidarIngresoVO{

        private $documento;
        private $password;

        public function __construct(int $documento, String $password){

            $this->documento = $documento;
            $this->password = $password;

        }

        public function getDocumento(){
            return $this->documento;
        }

        public function getPassword(){
            return $this->password;
        }


    }


?>