<?php
//incluir las clases libro y crudlibro

require_once('crudAutor.php'); //para obtener clase crud Libro
require_once('autor.php'); //para obtener clase libro

$crud = new crudAutor(); //INICIALIZAR CLASE CRUDLIBRO EN VARIABLE CRUD
$autor = new Autor(); // inicializar clase libro en variable libro

// si el elemento insestar no viene nulo, llama al crud e inserta un libro

if (isset($_POST['insertar'])){
    $autor->setNombre($_POST['nombre']);
    $autor->setNacimiento($_POST['nacimiento']);
    $autor->setObraReconocida($_POST['obraReconocida']);

    //llama ala funcion insertar definida en el CRUD si todo se obtuvo correctamente
    $crud->insertar($autor);
    header('Location: index.php');


}

?>