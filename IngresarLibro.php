<html>
    <head>
        <title> Ingresar Libro </title> 
    </head>
    
    <body>
        
        <header>Ingresar los datos del Libro</header>
        
        <form action="administrarAutor.php" method="post">

            <table>

                <tr> 
                    <td> Nombre Autor </td>
                    <td> <input type="text" name="nombre"> </td> 
                </tr>


                <tr> 
                    <td> Fecha Nacimiento </td>
                    <td> <input type="text" name="nacimiento"> </td> 
                </tr>

                <tr> 
                    <td> Mejor Obra </td>
                    <td> <input type="text" name="obraReconocida"> </td> 
                </tr>

                <input type="hidden" name="insertar" value="insertar">
                
            </table>

            <input type="submit" value="Guardar">
            <a href="INDEX.php"> Volver </a>

        </form>
    </body>
</html>