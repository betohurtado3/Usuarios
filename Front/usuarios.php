<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Administración</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/styles-admin.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- HIGHCHARTS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
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
        <div id="content col-md-4">
            <div class="header-content " style="display:flex; justify-content: space-between;">
                <h2>Inicio</h2>

                <a href="static/php/cerrar-sesion.php" style="padding: 10px;">Cerrar Sesión</a>

            </div>

            <div class="logo">
                <a href="admin.php">
                    <img style="width: 20%; margin-left: 50px;" src="../img/cfe-suministros.jpg" alt="LOGO">
                </a>
            </div>
            <div id="contenido-principal col-md-4">
           <div id="datos col-md-4">
        </div>
    </main>
            <table class='tabla_datos col-md-3 offset-md-3'>
                    <thead>
                        <tr>
                            <th>RPE</th>
                            <th>PASSWORD</th>
                            <th>CAC</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>


                    <?php
                require "../Back/conecta.php";
                $sql = "SELECT * FROM usuario WHERE eliminado='0' ";
            $res = mysqli_query($con, $sql);
            $num = mysqli_num_rows($res);
            
            for($i = $num; $objeto = $res->fetch_object() ; $i++)
            {
                ?>

                    <tbody>
                        <tr>
                            <td><?= $objeto->rpe?></td>
                            <td><?= $objeto->contraseña?></td>
                            <td><?= $objeto->cac?></td>
                            <td><button type="button" class="btn btn-warning"><a href="edicion-usuario.php?rpe=<?=$objeto->rpe?>">Editar</button></a></td>
                            <td><button type="button" class="btn btn-danger"><a href="eliminar-usuario.php?rpe=<?=$objeto->rpe?>">Eliminar</button></a></td>
                            
                            
                        </tr>


            <?php
            }
            ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>



    
</body>

</html>
