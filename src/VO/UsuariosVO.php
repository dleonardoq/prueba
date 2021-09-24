<?php

    class UsuariosVO {

        private $documento;
        private $nombre;
        private $password;
        private $genero;
        private $fechaNacimiento;
        private $telefono;
        private $eps;
        private $rol;

        public function __construct(int $documento, String $nombre, String $password, String $genero, String $fechaNacimiento, String $telefono, String $eps, String $rol){

            $this->documento = $documento;
            $this->nombre = $nombre;
            $this->password = $password;
            $this->genero = $genero;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->telefono = $telefono;
            $this->eps = $eps;
            $this->rol = $rol;

        }

        public static function __construct1(){

            $obj = new UsuariosVO(0, '', '', '', '', '', '', '');

            return $obj;

        }

        public static function __construct2($documento){

            $obj = new UsuariosVO($documento, '', '', '', '', '', '', '');

            return $obj;

        }

        public function getDocumento(){
            return $this->documento;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getEps(){
            return $this->eps;
        }

        public function getRol(){
            return $this->rol;
        }

    }

?>