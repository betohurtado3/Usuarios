<?php
    require "conecta.php";
    ///Recibe Variables
    
    $RPE        = $_POST['RPE'];

    
    //Inserta en DB
    $sql = "UPDATE usuario SET eliminado='1' WHERE rpe='$RPE'";
    
    ///true o false (si el codigo de Sql ingresado esta correcto)
    $respuesta = mysqli_query($con, $sql);
    
    if($respuesta)
        echo 1;
    else 
        echo 0;
?>