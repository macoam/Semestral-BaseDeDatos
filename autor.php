<?php 
    class Autor{
        private $id;
        private $nombre;
        private $nacimiento;
        private $obraReconocida;

        function __construct(){}

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNacimiento(){
            return $this->nacimiento;
        }

        public function setNacimiento($nacimiento){
            $this->nacimiento = $nacimiento;
        }

        public function getObraReconocida(){
            return $this->obraReconocida;
        }

        public function setObraReconocida($obraReconocida){
            $this->obraReconocida = $obraReconocida;
        }

        public function getId(){
            return $this->id;

        }

        public function setId($id){
            $this->id = $id;
        }
    }
?>