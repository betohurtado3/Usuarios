<?
require "conecta.php";
///Recibe Variables

$RPE        = $_POST['RPE'];
$PASSWORD   = $_POST['PASSWORD'];
$CAC        = $_POST['CAC'];

//Inserta en DB
$sql = "UPDATE usuario SET rpe='$RPE', contraseña='$PASSWORD', cac='$CAC' WHERE rpe='$RPE'";

///true o false (si el codigo de Sql ingresado esta correcto)
$respuesta = mysqli_query($con, $sql);

if($respuesta)
    echo 1;
else 
    echo 0;
?>