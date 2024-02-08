<?php
    //print_r($_POST);
    //echo "<br>";

    $SQL = "SELECT * FROM alumnos WHERE expediente = ".$_POST["user"]."  AND contrasenia = MD5('".$_POST["pswd"]."'); ";

    //echo $SQL;

    $connection = mysqli_connect("localhost","root","","sistema_escolar")or die("no se pudo conectar");

$result = mysqli_query($connection, $SQL) or die("no se pudo la query");

//print_r($result);

if ($result->num_rows == 1) {
    header("Location:menu.php");

}else{
    header("Location:index.php?error=100");
}

mysqli_close($connection);
