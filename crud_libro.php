<?php
    //incluir la conexión a BD
    require_once('conexion.php');

    class CrudLibro{
        //Constructor de la clase
        public function __construct(){}

        //metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($libro){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO libros values(NULL,:Nombre, :Autor, :Edicion)');
            $insert->bindValue('Nombre',$libro->getNombre());
            $insert->bindValue('Autor',$libro->getAutor());
            $insert->bindValue('Edicion',$libro->getEdicion());
            $insert->execute();
        }
    }

?>