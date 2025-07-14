<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/scriptP.js"> </script>
</head>
<body>
    <?php

    $Pagina = "Práctica #3";
    $Curso = "Ambiente Web Cliente Servidor"; 

    echo "<h1>" . $Pagina . "</h1>";
    echo "<p>" . $Curso . "</p>";
    ?>

     <form id="formulario" action="./app/controllers/reservaController.php" method="POST">
        <ul>
            <li>
                <label for="Nombre">Ingrese el nombre: </label>
                <input type="text" id="nombre" name="nombre">
            </li>
            <li>
                <label for="Email">Ingrese el email: </label>
                <input type="text" id="email" name="email">
            </li>
            <li id="message">
                <label for="Mensaje">Ingrese su comentario: </label>
                 <textarea id="mensaje" name="mensaje" rows="3"></textarea> </li>
            </li>
            <li class="buttons">
                <button type="submit">Enviar</button>
                 <button type="reset" onclick="limpiar()">Limpiar</button>
            </li>
            </ul>            
    </form>    
</body>

</html>