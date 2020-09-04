<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Registros</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/styles-admin.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Link para Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

    <?php require "../Back/conecta.php";
        $RPE=$_GET["rpe"];

            $sql="SELECT * FROM usuario WHERE rpe='$RPE'";

            $res=mysqli_query($con, $sql);
            $row=mysqli_fetch_assoc($res);

    ?>
    <script>
        function validacion() {
            var code = document.formulario.RPE.value;
            var pass = document.formulario.PASSWORD.value;
            var center = document.formulario.CAC.value;

            if (code == "" | pass == "" | center == "") {
                alert("Campos Faltantes")
                return false;
            } else
                return true;
        } // TERMINA EL CODIO JS PARA VALIDAR LOS CAMPOS

        $(document).ready(function() {
            $("#boton").on('click', function() {
                if (validacion()) { ///Si los campos estan llenos
                    var form = $('#formulario')[0];
                    var data = new FormData(form);

                    $.ajax({
                        url: '../Back/editar-usuario.php',
                        type: 'POST',
                        dataType: 'text',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(respuesta) {
                            if (respuesta == 0)
                                alert('Registro incorrecto')
                            else {
                                alert('Edicion Completada')
                                location.href = "usuarios.php";
                            }
                        }

                    }); ///Fin del ajax
                } ///Termina el if de la funcion de validacion 
            }); ///Funcion de click en un boton
        }); ///Fin de la funcion ready   

    </script>

</head>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>Menú</h2>
            </div>

            <ul class="list-unstyled components">
                <p>Panel Administrativo</p>

                <li class="active">
                    <a href="#homeSubmenuMatrix" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Motivos de Visitas</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuMatrix">

                        <!-- <li>
                            <a href="#">Motivo de Visitas</a>
                            Mostrar resultado de visitas, a qué vino cada cliente, registrar, por día y seleccionar rango
                        </li> 
                        -->
                        <li>
                            <a href="#">División</a>
                        </li>

                        <li>
                            <a href="#">Zona</a>
                        </li>

                        <li id="motivoCAC">
                            <a href="#">CAC</a>
                        </li>

                        <li>
                            <a href="#">Generar Reporte Específico</a>
                        </li>

                    </ul>
                </li>

                <li class="active">
                    <a href="#homeSubmenuEjecutivo" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Evaluación de Ejecutivo</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuEjecutivo">

                        <!-- <li>
                            <a href="#">Motivo de Visitas</a>
                            Mostrar resultado de visitas, a qué vino cada cliente, registrar, por día y seleccionar rango
                        </li> 
                        -->
                        <li>
                            <a href="#">División</a>
                        </li>

                        <li>
                            <a href="#">Zona</a>
                        </li>

                        <li id="ejecutivoCAC">
                            <a href="#">CAC</a>
                        </li>

                        <li>
                            <a href="#">Generar Reporte Específico</a>
                        </li>

                    </ul>
                </li>
                <li id="ejecutivo">
                    <a href="#">Gestión de Ejecutivo</a>
                </li>

                <li>
                    <a href="#">Gestión de Encuestas</a>
                    <!-- Alta, baja, modificar preguntas -->
                </li>

                <li>
                    <a href="#">Gestión de Sitios</a>
                </li>

                <li class="active">
                    <!-- Sólo  jefes de cac, sólo podrá modificar lo de sus cacs  -->
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">

                        <li>
                            <a href="Front/usuarios.php">Usuarios</a>
                        </li>

                    </ul>
                </li>

            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="header-content" style="display:flex; justify-content: space-between;">
                <h2>Inicio</h2>

                <a href="static/php/cerrar-sesion.php" style="padding: 10px;">Cerrar Sesión</a>

            </div>

            <div class="logo">
                <a href="admin.php">
                    <img style="width: 20%; margin-left: 50px;" src="../img/cfe-suministros.jpg" alt="LOGO">
                </a>
            </div>
    </main>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br>
                <br>
                <!-- Formulario -->
                <hr>
                
                <form id="formulario" name="formulario" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="formGroupExampleInput">RPE</label>
                        <input type="text" class="form-control" name="RPE" value="<?= $row['rpe'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Contraseña</label>
                        <input type="text" class="form-control" name="PASSWORD" value="<?= $row['contraseña'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">CAC</label>
                        <input type="text" class="form-control" name="CAC" value="<?= $row['cac'] ?>">
                    </div>
                    <input id="boton" onclick="validacion()" class="btn btn-warning" type="button" value="Editar">
                    <button  type="button" class="btn btn-outline-info"><a href="javascript:history.back()">Regresar</a></button>
                
                </form>
                <!-- Fin Del Formulario -->
            </div>
        </div>
    </div>
</body>

</html>
