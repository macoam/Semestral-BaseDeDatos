<?php

    require_once('conexion.php');

    class CrudAutor{
        //constructor de la clase
        public function __construct(){}

        //metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($autor){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO autores value(NULL, :nombre, :nacimiento, :obraReconocida)');
            $insert->bindValue('nombre',$autor->getNombre());
            $insert->bindValue('nacimiento',$autor->getNacimiento());
            $insert->bindValue('obraReconocida',$autor->getObraReconocida());
            $insert->execute();
        }
    }
?>