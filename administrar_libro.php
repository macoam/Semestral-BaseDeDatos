<?php
//incluir las clases libro y crudlibro

require_once('crud_libro.php'); //para obtener clase crud Libro
require_once('libro.php'); //para obtener clase libro

$crud = new crudLibro(); //INICIALIZAR CLASE CRUDLIBRO EN VARIABLE CRUD
$libro = new Libro(); // inicializar clase libro en variable libro

// si el elemento insestar no viene nulo, llama al crud e inserta un libro

if (isset($_POST['insertar'])){
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setEdicion($_POST['edicion']);

    //llama ala funcion insertar definida en el CRUD si todo se obtuvo correctamente
    $crud->insertar($libro);
    header('Location: index.php');
}

?>