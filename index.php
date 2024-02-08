<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema escolar de adriel</title>
</head>

<body>
<h1> sistema escolar </h1>   
<form action="validar.php" method="POST">
    <label for="user"> Matricula: </label>   
    <input type="number" name="user" required>
    <br>
    <label for="pswd"> Contraseña: </label> 
    <input type="password" name="pswd" required>
    <br>
    <button type="submit" >enviar</button>

</form> 

<?php

    // validamos el warning
    if (!empty($_GET["error"]) && $_GET["error"] == 100) 
    {
        echo "Se ha detectado un accexo indebido";        
    }

?>

</body>
</html>